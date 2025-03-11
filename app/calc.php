<?php
require_once dirname(__FILE__).'/../config.php';

$amount = $_REQUEST['amount'];
$years = $_REQUEST['years'];
$rate = $_REQUEST['rate'];

if (!isset($amount) || !isset($years) || !isset($rate)) {
	$messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ($amount == "") {
	$messages[] = 'Nie podano kwoty kredytu';
}
if ($years == "") {
	$messages[] = 'Nie podano liczby lat';
}
if ($rate == "") {
	$messages[] = 'Nie podano oprocentowania';
}

if (empty($messages)) {
	if (!is_numeric($amount) || $amount <= 0) {
		$messages[] = 'Kwota kredytu musi być liczbą dodatnią';
	}
	if (!is_numeric($years) || $years <= 0) {
		$messages[] = 'Liczba lat musi być liczbą dodatnią';
	}
	if (!is_numeric($rate) || $rate < 0) {
		$messages[] = 'Oprocentowanie musi być liczbą dodatnią';
	}
}

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

include 'calc_view.php';