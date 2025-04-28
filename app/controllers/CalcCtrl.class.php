<?php

namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;
use Medoo\Medoo;

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
    
    public function action_calcCompute(){

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
        try {
            $database = new Medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => 'kalk',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_polish_ci',
            'port' => 3306,
            'option' => [
            \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        ]);
        
            $database->insert("wynik", [
            "kwota" => $this->form->amount,
            "lat" => $this->form->years,
            "procent" => $this->form->rate,
            "rata" => $this->result->result,
            "data" => date("Y-m-d H:i:s")
            ]);

        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: ".$ex->getMessage());
        }
        $this->generateView();
    }

    public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

    public function generateView(){   
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        
		getSmarty()->assign('page_title', 'Kalkulator kredytowy');
                
		getSmarty()->assign('form', $this->form);
		getSmarty()->assign('res', $this->result);
        
		getSmarty()->display('CalcView.tpl');
    }
}