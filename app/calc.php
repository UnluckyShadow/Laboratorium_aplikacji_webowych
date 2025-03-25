<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getParams(&$form){
	$form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $form['rate'] = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;	
}

function validate(&$form,&$infos,&$messages,&$hide_intro){
	$amount = $form['amount'];
    $years = $form['years'];
    $rate = $form['rate'];
	
	if ( ! (isset($amount) && isset($years) && isset($rate))) {
		return false;
	}
	
	if ( $amount == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $years == "") {
		$messages [] = 'Nie podano liczby lat';
	}
	if ( $rate == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	if (count ( $messages ) != 0) return false;
	
	if (! is_numeric( $amount )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Ilość lat nie jest liczbą całkowitą';
	}

	if (! is_numeric( $rate )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$form,&$infos,&$messages,&$result){

    $amount = floatval($form['amount']);
    $years = intval($form['years']);
    $rate = floatval($form['rate']) / 100 / 12;
    $months = $years * 12;
	
		if ($rate > 0) {
			$result = ($amount * $rate) / (1 - pow(1 + $rate, -$months));
		} else {
			$result = $amount / $months;
		}
}

$form = null;
$infos = array();
$hide_intro = null;
$result = null;
$messages = array();

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// ... (keep all the existing code until the end)

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalny kalkulator kredytowy');
$smarty->assign('page_header','Kalkulator kredytowy');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// Make sure this path is correct for your directory structure
$smarty->display(_ROOT_PATH.'/app/calc.html');