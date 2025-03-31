<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

/** Kontroler kalkulatora kredytowego */
class CalcCtrl {

    private $msgs;    
    private $form;   
    private $result; 
    private $hide_intro;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
    }
    
    public function getParams(){
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
        $this->form->rate = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;
    }
    
    public function validate() {
        // sprawdzenie czy parametry zostały przekazane
        if (!(isset($this->form->amount) && isset($this->form->years) && isset($this->form->rate))) {
            return false;
        } else { 
            $this->hide_intro = true;
        }
        
        // walidacja danych
        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            $this->msgs->addError('Nie podano liczby lat');
        }
        if ($this->form->rate == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }
        
        if (!$this->msgs->isError()) {
            if (!is_numeric($this->form->amount)) {
                $this->msgs->addError('Kwota nie jest liczbą');
            }
            if (!is_numeric($this->form->years)) {
                $this->msgs->addError('Lata nie są liczbą');
            }
            if (!is_numeric($this->form->rate)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą');
            }
        }
        
        return !$this->msgs->isError();
    }
    
    public function process(){
        $this->getParams();
        
        if ($this->validate()) {
            $amount = floatval($this->form->amount);
            $years = intval($this->form->years);
            $rate = floatval($this->form->rate) / 100 / 12;
            $months = $years * 12;
            
            $this->msgs->addInfo('Parametry poprawne.');
            
            if ($rate > 0) {
                $this->result->result = ($amount * $rate) / (1 - pow(1 + $rate, -$months));
            } else {
                $this->result->result = $amount / $months;
            }
            
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        
        $this->generateView();
    }
    
    public function generateView(){
        global $conf;
        
        $smarty = new Smarty\Smarty();
        $smarty->assign('conf', $conf);
        $smarty->assign('app_url', $conf->app_url);
        $smarty->assign('root_path', $conf->root_path);
        
        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign('page_description', 'Profesjonalny kalkulator kredytowy');
        $smarty->assign('page_header', 'Kalkulator kredytowy');
                
        $smarty->assign('hide_intro', $this->hide_intro);
        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);
        
        $smarty->display($conf->root_path.'/app/calc/CalcView.html');
    }
}