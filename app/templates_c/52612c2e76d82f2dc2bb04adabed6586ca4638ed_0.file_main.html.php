<?php
/* Smarty version 5.4.2, created on 2025-03-25 02:58:26
  from 'file:E:\Programy\xamp\htdocs\php_04_szablony_smarty/templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e20dc29c5387_43625888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52612c2e76d82f2dc2bb04adabed6586ca4638ed' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty/templates/main.html',
      1 => 1742867905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e20dc29c5387_43625888 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\templates';
?><!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/main.css" />
	</head>
	<body class="is-preload">
		
		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<h1>Kalkulator Kredytowy</h1>
					<p>Witaj w kalkulatorze</p>
				</header>
				<footer>
					<a href="#fourth" class="button scrolly">Przejdź do kalkulatora</a>
				</footer>
			</section>
			<section id="fourth" class="main">
				<header>
					<div class="container">
						<h2>Kalkulator Kredytowy</h2>
						<p>Wprowadź dane</p>
					</div>
				</header>
				<div class="content style4 featured">
					<div class="container medium">
						<form method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php">
							<div class="row gtr-50">
								<div class="col-4 col-12-mobile"><input type="text" name="amount" placeholder="Kwota" /></div>
								<div class="col-4 col-12-mobile"><input type="text" name="years" placeholder="Liczba lat" /></div>
								<div class="col-4 col-12-mobile"><input type="text" name="rate" placeholder="Oprocentowanie" /></div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" class="button" value="Oblicz" /></li>
										<li><input type="reset" class="button alt" value="Wyczyść formularz" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
					<!-- Add this after your form in main.html -->
<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
<div class="error-messages">
	<h4>Błędy:</h4>
	<ul>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
<div class="info-messages">
	<h4>Informacje:</h4>
	<ul>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
<div class="calculation-result">
	<h4>Miesięczna rata:</h4>
	<p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('result'),2);?>
 zł</p>
</div>
<?php }?>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
				</ul>
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</section>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
