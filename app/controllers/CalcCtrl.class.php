<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

/** Kontroler kalkulatora kredytowego */
class CalcCtrl {
  
    private $form;   
    private $result; 

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }
    
    public function getParams(){
        $this->form->amount = getFromRequest('amount');
        $this->form->years = getFromRequest('years');
        $this->form->rate = getFromRequest('rate');
    }

    public function validate() {
        // sprawdzenie czy parametry zostały przekazane
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->rate ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
        
        // walidacja danych
        if ($this->form->amount == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->rate == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        
        if (! getMessages()->isError()) {
            if (!is_numeric($this->form->amount)) {
                getMessages()->addError('Kwota nie jest liczbą');
            }
            if (!is_numeric($this->form->years)) {
                getMessages()->addError('Lata nie są liczbą');
            }
            if (!is_numeric($this->form->rate)) {
                getMessages()->addError('Oprocentowanie nie jest liczbą');
            }
        }
        
        return ! getMessages()->isError();
    }
    
    public function process(){

        $this->getParams();
        
        if ($this->validate()) {
            $amount = floatval($this->form->amount);
            $years = intval($this->form->years);
            $rate = floatval($this->form->rate) / 100 / 12;
            $months = $years * 12;
            
            getMessages()->addInfo('Parametry poprawne.');
            
            if ($rate > 0) {
                $this->result->result = ($amount * $rate) / (1 - pow(1 + $rate, -$months));
            } else {
                $this->result->result = $amount / $months;
            }
            
            getMessages()->addInfo('Wykonano obliczenia.');
        }
        
        $this->generateView();
    }
    
    public function generateView(){        
		getSmarty()->assign('page_title', 'Kalkulator kredytowy');
		getSmarty()->assign('page_description', 'Profesjonalny kalkulator kredytowy');
		getSmarty()->assign('page_header', 'Kalkulator kredytowy');
                
		getSmarty()->assign('form', $this->form);
		getSmarty()->assign('res', $this->result);
        
		getSmarty()->display('CalcView.html');
    }
}