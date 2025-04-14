{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post">
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

{include file='messages.tpl'}

{/block}
