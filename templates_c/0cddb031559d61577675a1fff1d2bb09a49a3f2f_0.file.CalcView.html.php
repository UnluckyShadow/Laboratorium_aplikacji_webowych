<?php
/* Smarty version 3.1.30, created on 2025-04-14 16:09:29
  from "E:\Programy\xamp\htdocs\php_05_obiektowosc\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67fd1719e03152_43112017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cddb031559d61577675a1fff1d2bb09a49a3f2f' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_05_obiektowosc\\app\\views\\CalcView.html',
      1 => 1744638646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
  ),
),false)) {
function content_67fd1719e03152_43112017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119020619467fd1719df4af4_15045287', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156007000367fd1719e02dd5_06695061', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_119020619467fd1719df4af4_15045287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_156007000367fd1719e02dd5_06695061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
                <div class="row gtr-50">
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="amount" placeholder="Kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" />
                    </div>
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="years" placeholder="Liczba lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" />
                    </div>
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="rate" placeholder="Oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rate;?>
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

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <div class="container medium error-messages">
            <h4>Wystąpiły błędy:</h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ol>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <div class="container medium info-messages">
            <h4>Informacje:</h4>
            <ol class="inf">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ol>
        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
        <div class="container medium result-message">
            <h4>Wynik</h4>
            <p>Miesięczna rata: <strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['res']->value->result);?>
 zł</strong></p>
        </div>
    <?php }?>
</section>

<?php
}
}
/* {/block 'content'} */
}
