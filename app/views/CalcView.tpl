{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<section id="fourth" class="main">
    <header>
        <div class="container">
            <h2>Kalkulator Kredytowy</h2>
            <p>Wprowadź dane</p>
        </div>
    </header>
    <div class="content style4 featured">
        <div class="container medium">
            <form method="post" action="{$conf->action_root}calcCompute">
                <div class="row gtr-50">
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="amount" placeholder="Kwota" value="{$form->amount}" />
                    </div>
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="years" placeholder="Liczba lat" value="{$form->years}" />
                    </div>
                    <div class="col-4 col-12-mobile">
                        <input type="text" name="rate" placeholder="Oprocentowanie" value="{$form->rate}" />
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

    {include file='messages.tpl'}   

    {if isset($res->result)}
        <div class="container medium result-message">
            <h4>Wynik</h4>
            <p>Miesięczna rata: <strong>{$res->result|string_format:"%.2f"} zł</strong></p>
        </div>
    {/if}
</section>

{/block}