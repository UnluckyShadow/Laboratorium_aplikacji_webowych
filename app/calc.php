<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount,&$years,&$rate){
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$rate = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;	
}

function validate(&$amount,&$years,&$rate,&$messages){
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

function process(&$amount,&$years,&$rate,&$messages,&$result){
	global $role;
	
	$amount = intval($amount);
	$years = intval($years);
	$rate = intval($rate);
	
	if (empty($messages)) {
		$amount = floatval($amount);
		$years = intval($years);
		$rate = floatval($rate) / 100 / 12; 
		$months = $years * 12;
	
		if ($rate > 0) {
			$result = ($amount * $rate) / (1 - pow(1 + $rate, -$months));
		} else {
			$result = $amount / $months;
		}
	}
}

$amount = null;
$years = null;
$rate = null;
$result = null;
$messages = array();

getParams($amount,$years,$rate);
if ( validate($amount,$years,$rate,$messages) ) {
	process($amount,$years,$rate,$messages,$result);
}
include 'calc_view.php';