<?php
/* Smarty version 5.4.2, created on 2025-03-25 03:07:24
  from 'file:E:\Programy\xamp\htdocs\php_04_szablony_smarty\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e20fdc6cd201_44698101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7848fccc5d93bcdc0a020c3fa9877b3065231105' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\app\\../templates/main.html',
      1 => 1742868428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e20fdc6cd201_44698101 (\Smarty\Template $_smarty_tpl) {
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
                    <h1>Kalkulator Kredytowy</h1>
                    <p>Witaj w kalkulatorze</p>
                </header>
                <footer>
                    <a href="#fourth" class="button scrolly">Przejdź do kalkulatora</a>
                </footer>
            </section>

            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_47756025267e20fdc6ca1f3_10691305', 'content');
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
</html><?php }
/* {block 'content'} */
class Block_47756025267e20fdc6ca1f3_10691305 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\templates';
}
}
/* {/block 'content'} */
}
