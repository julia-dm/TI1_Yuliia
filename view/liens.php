<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Oslo - <?= ucfirst($_GET['p']) ?></title>
</head>

<body>
    <header>
        <?php
        include ROOT_PATH . "/view/inc/entete.php";
        ?>
    </header>
    <main>
        <div class="container">
            <div class="navigation">
                <nav class="nav">
                    <?php
                    include ROOT_PATH . "/view/inc/menu.php";
                    ?>
                </nav>
            </div>
            <div class="content">
                <h2 class="main_title">Quelques liens vers nos partenaires</h2>
                <div class="wrapper_nav_mobile">
                    <div class="btn_wrapper">
                        <button class="btn" id="open_menu_btn">&#9776</button>
                        <span class="menu_text">MENU</span>
                    </div>
                    <nav class="nav_mobile" id="nav_mobile">
                        <?php
                        include ROOT_PATH . "/view/inc/menu_mobile.php";
                        ?>
                    </nav>
                </div>
                <img class="img"  src="img/liens.jpg" alt="liens">
                <div class="links_wrapp links">
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/bryan/T.I/TI1_Bryan/public" target="_blank">Berlin</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/mohamed/ti/ti1_mohamed/public" target="_blank">Lisbonne</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/christophe/T.I./T1_Christophe/public" target="_blank">Sofia</a>
                    <a class="" href="#">Vienne</a>
                    <a class="" href="#">Prague</a>
                    <a class="" href="#">Varsovie</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/meidhy/T.I./TI1_Meidhy/public" target="_blank">Paris</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/badr/T.I./finileTI1pro/public/?p=Accueil" target="_blank">Amsterdam</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/maxim/T.I./ti1_Maxim/public" target="_blank">Helsinki</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/robin/T.I./TI-ROBIN-NEW/public" target="_blank">Madrid</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/john-david/T.I/TI1_JOHN-DAVID/public" target="_blank">Copenhague</a>
                    <a class="" href="#">Stockholm</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/tiromana/T.I./TI1_TIromana/public" target="_blank">Rome</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/laetitia/T.I./TI2/public" target="_blank">Dublin</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/yuliia/TI/TI1_Yuliia/public">Oslo</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/raphael/T.I./TI1-Raphael/public" target="_blank">Londres</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/bruce/T.I/TI1_Bruce/public" target="_blank">Athènes</a>
                    <a class="" href="https://2026.webdev-cf2m.be/Stagiaires/eiji/T.I./TI1_Eiji/public" target="_blank">Budapest</a>

                </div>
  <p class="source">Source: <a href="https://fr.wikipedia.org/wiki/Oslo">Wikipédia – Oslo</a></p>
            </div>
        </div>
    </main>
</body>
<script src="js/script.js"></script>

</html>