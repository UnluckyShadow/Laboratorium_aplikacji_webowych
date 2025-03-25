<?php
/* Smarty version 5.4.2, created on 2025-03-25 03:09:43
  from 'file:E:\Programy\xamp\htdocs\php_04_szablony_smarty/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e21067ed56a5_11211289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f2bdc577fe5b21f715452e84f0d942bb44f265b' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty/app/calc.html',
      1 => 1742868582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e21067ed56a5_11211289 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_72679963167e21067e95d28_86573849', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_198335185267e21067e98165_72015354', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_72679963167e21067e95d28_86573849 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_198335185267e21067e98165_72015354 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_04_szablony_smarty\\app';
?>


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

    <?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
        <div class="container medium error-messages">
            <h4>Wystąpiły błędy:</h4>
            <ol>
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
            </ol>
        </div>
    <?php }?>

    <?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
        <div class="container medium info-messages">
            <h4>Informacje:</h4>
            <ol>
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
            </ol>
        </div>
    <?php }?>

    <?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
        <div class="container medium result-message">
            <h4>Wynik</h4>
            <p>Miesięczna rata: <strong><?php echo sprintf("%.2f",$_smarty_tpl->getValue('result'));?>
 zł</strong></p>
        </div>
    <?php }?>
</section>

<?php
}
}
/* {/block 'content'} */
}
