<?php
/* Smarty version 3.1.30, created on 2025-04-28 19:26:53
  from "E:\Programy\xamp\htdocs\php_05_obiektowosc\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_680fba5d355626_64271089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88eda1d6ebdf200b8e68580fe2b9c22f9c542793' => 
    array (
      0 => 'E:\\Programy\\xamp\\htdocs\\php_05_obiektowosc\\app\\views\\LoginView.tpl',
      1 => 1744663760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_680fba5d355626_64271089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1154596852680fba5d354dc3_45975627', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1154596852680fba5d354dc3_45975627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
	<div class="row gtr-50">
        <div class="col-6 col-12-mobile">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="col-6 col-12-mobile">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" />
		</div>
		<div class="col-12">
			<input type="submit" value="zaloguj" class="button"/>
		</div>
	</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
