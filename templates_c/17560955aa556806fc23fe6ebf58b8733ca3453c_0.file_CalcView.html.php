<?php
/* Smarty version 5.4.2, created on 2025-03-31 23:31:04
  from 'file:E:\Programy\xamp\htdocs\php_05_obiektowosc/app/CalcView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eb0998475683_04929009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17560955aa556806fc23fe6ebf58b8733ca3453c' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_05_obiektowosc/app/CalcView.html',
      1 => 1743456482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb0998475683_04929009 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_05_obiektowosc\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16549883367eb09984672c9_00196993', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_214013404767eb0998469e05_98339297', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ($_smarty_tpl->getValue('conf')->root_path).("/templates/main.html"), $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_16549883367eb09984672c9_00196993 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_05_obiektowosc\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_214013404767eb0998469e05_98339297 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\Programy\\xamp\\htdocs\\php_05_obiektowosc\\app';
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
            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php">
                <div class="row gtr-50">
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="amount" placeholder="Kwota" value="<?php echo $_smarty_tpl->getValue('form')->amount;?>
" />
                    </div>
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="years" placeholder="Liczba lat" value="<?php echo $_smarty_tpl->getValue('form')->years;?>
" />
                    </div>
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="rate" placeholder="Oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')->rate;?>
" />
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" class="button" value="Oblicz" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
        <div class="container medium error-messages">
            <h4>Wystąpiły błędy:</h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('err');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
        <div class="container medium info-messages">
            <h4>Informacje:</h4>
            <ol class="inf">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
    <?php }?>

    <?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
        <div class="container medium result-message">
            <h4>Wynik</h4>
            <p>Miesięczna rata: <strong><?php echo sprintf("%.2f",$_smarty_tpl->getValue('res')->result);?>
 zł</strong></p>
        </div>
    <?php }?>
</section>

<?php
}
}
/* {/block 'content'} */
}
