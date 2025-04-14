<!DOCTYPE HTML>
<html>
    <head>
        <title>{$page_title|default:"Kalkulator Kredytowy"}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
    </head>
    <body class="is-preload">
        
        <!-- Header -->
            <section id="header" class="dark">
                <header>
                    <h1>Kalkulator Kredytowy</h1>
                    <p>Witaj w kalkulatorze</p>
                </header>
                <footer>
                    <a href="#login-form" class="button scrolly">Przejdź do kalkulatora</a>
                </footer>
            </section>
                        {block name=content}{/block}
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
            <script src="{$app_url}/js/jquery.min.js"></script>
            <script src="{$app_url}/js/jquery.scrolly.min.js"></script>
            <script src="{$app_url}/js/browser.min.js"></script>
            <script src="{$app_url}/js/breakpoints.min.js"></script>
            <script src="{$app_url}/js/util.js"></script>
            <script src="{$app_url}/js/main.js"></script>

    </body>
</html>