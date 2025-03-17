<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator Kredytowy</legend>
	<fieldset>
		<label for="id_amount">Kwota kredytu: </label>
		<input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>" /><br />
		<label for="id_years">Liczba lat: </label>
		<input id="id_years" type="text" name="years" value="<?php out($years) ?>" /><br />
		<label for="id_rate">Oprocentowanie (% rocznie): </label>
		<input id="id_rate" type="text" name="rate" value="<?php out($rate) ?>" /><br />
	</fieldset>
	<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary" style="background-color: blue; color: white; padding: 10px 20px; border: rounded; border-radius: 5px; "  />
</form> 

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border: rounded; border-radius: 15px; background-color: #fc2121; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata: '.number_format($result, 2, ',', ' ').' PLN'; ?>
</div>
<?php } ?>
</div>
</body>
</html>