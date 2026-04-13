<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="dist/css/lightbox.css" rel="stylesheet" />

    <title>Oslo - <?= ucfirst($_GET['p']) ?></title>
</head>

<body>
    <header  id="go__up">
        <?php
        include ROOT_PATH . "/view/inc/entete.php";
        ?>
    </header >
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
                <h2 class="main_title">Galerie Photo</h2>
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
                <div class="gallery">
                    <div>
                        <a class="image-link" href="img/1280px_Akershus_slott.jpg" data-lightbox="example-1" data-title="Akershus slott">
                            <img class="example-image" src="img/480px_Akershus_slott.jpg" alt="image-1" />
                        </a>
                        <p class="gallery_title">Akershus slott</p>
                    </div>
                    <div>
                        <a class="image-link" href="img/1280px_Holmenkollbakken.jpg" data-lightbox="example-1" data-title="Holmenkollbakken">
                            <img class="example-image" src="img/480px_Holmenkollbakken.jpg" alt="image-1" />
                        </a>
                        <p class="gallery_title">Holmenkollbakken</p>
                    </div>
                    <div>
                        <a class="image-link" href="img/1280px_MaisonRoyale_ParcChateau.jpg" data-lightbox="example-1" data-title="Maison Royale Parc Chateau">
                            <img class="example-image" src="img/480px_MaisonRoyale_ParcChateau.jpg" alt="image-1" />
                        </a>
                        <p class="gallery_title"> Maison Royale Parc Chateau</p>
                    </div>
                    <div>
                        <a class="image-link" href="img/1280px_Nasjonalgalleriet_oslo.jpg" data-lightbox="example-1" data-title="Nasjonal gallerie Oslo">
                            <img class="example-image" src="img/480px_Nasjonalgalleriet_oslo.jpg" alt="image-1" />
                        </a>
                        <p class="gallery_title">National galerie d'Oslo</p>
                    </div>
                    <div>
                        <a class="image-link" href="img/1280px_Oslo_harbour.jpg" data-lightbox="example-1" data-title="Oslo harbour">
                            <img class="example-image" src="img/480px_Oslo_harbour.jpg" alt="image-1" />
                        </a>
                        <p class="gallery_title">Oslo harbour</p>
                    </div>
                    <div>
                        <a class="image-link" href="img/1280px_Port.jpg" data-lightbox="example-1" data-title="Port">
                            <img class="example-image" src="img/480px_Port.jpg" alt="image-1" />
                        </a>
                        <p class="gallery_title">Port</p>
                    </div>
                </div>
                <a href="#go__up" class="go__up__link">↑</a>
                  <p class="source">Source: <a href="https://fr.wikipedia.org/wiki/Oslo">Wikipédia – Oslo</a></p>
            </div>
        </div>
    </main>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
</body>
<script src="js/script.js"></script>

</html>