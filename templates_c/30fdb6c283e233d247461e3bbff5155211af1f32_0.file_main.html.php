<?php
/* Smarty version 5.4.2, created on 2025-03-25 01:55:44
  from 'file:E:\Programy\xamp\htdocs\php_04_szablony_smarty\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e1ff1094f9a7_88783631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30fdb6c283e233d247461e3bbff5155211af1f32' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\app\\../templates/main.html',
      1 => 1742864091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1ff1094f9a7_88783631 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_smarty_tpl->getValue('page_title');?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/main.css" />
	</head>
	<body class="is-preload">
		
		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<h1><?php echo $_smarty_tpl->getValue('page_header');?>
</h1>
					<p><?php echo $_smarty_tpl->getValue('page_description');?>
</p>
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
								<div class="col-4 col-12-mobile">
									<input type="text" name="amount" placeholder="Kwota" value="<?php echo $_smarty_tpl->getValue('form')['amount'];?>
" />
								</div>
								<div class="col-4 col-12-mobile">
									<input type="text" name="years" placeholder="Liczba lat" value="<?php echo $_smarty_tpl->getValue('form')['years'];?>
" />
								</div>
								<div class="col-4 col-12-mobile">
									<input type="text" name="rate" placeholder="Oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')['rate'];?>
" />
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" class="button" value="Oblicz" /></li>
										<li><input type="reset" class="button alt" value="Wyczyść formularz" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

		<!-- Kalkulator wynik -->
		<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2676774567e1ff1094af03_72468342', "content");
?>


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
</html>
<?php }
/* {block "content"} */
class Block_2676774567e1ff1094af03_72468342 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\templates';
?>

		<section class="main">
			<div class="container">
				<h2 class="content-head is-center">Wynik Kalkulacji</h2>
				
				<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
					<h4>Wystąpiły błędy:</h4>
					<ul class="error-messages">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'message');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('message')->value) {
$foreach2DoElse = false;
?>
							<li><?php echo $_smarty_tpl->getValue('message');?>
</li>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>
				
				<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
					<h4>Informacje:</h4>
					<ul class="info-messages">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'info');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('info')->value) {
$foreach3DoElse = false;
?>
							<li><?php echo $_smarty_tpl->getValue('info');?>
</li>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>
				
				<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
					<h4>Wynik kalkulacji:</h4>
					<p class="result">Rata miesięczna: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('result'), ENT_QUOTES, 'UTF-8', true);?>
</p>
				<?php }?>
			</div>
		</section>
		<?php
}
}
/* {/block "content"} */
}
