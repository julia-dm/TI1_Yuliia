<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
     <link href="dist/css/lightbox.css" rel="stylesheet" />

    <title>Galerie</title>
</head>
<body>
    <header>
         <?php 
      include ROOT_PATH."/view/inc/entete.php";
       ?> 
    </header>
    <main>
    <div class="container">
        <div class="navigation">
    <nav class="nav">
    <?php 
       include ROOT_PATH."/view/inc/menu.php";
       ?>
    </nav>
    </div>
    <div class="content">
 <h2 class="main_title">Gallerie Photo</h2>
 <div class="wrapper_nav_mobile">
 <div class="btn_wrapper">
    <button id="open_menu_btn">&#9776</button>
    <span>MENU</span>
</div>
 <nav class="nav_mobile" id="nav_mobile">
    <?php 
       include ROOT_PATH."/view/inc/menu_mobile.php";
       ?> 
    </nav>
    </div>
<div class="gallery">
     <a class="image-link" href="img/1280px_Akershus_slott.jpg" data-lightbox="example-1"  data-title="Akershus slott">
        <img class="example-image" src="img/480px_Akershus_slott.jpg" alt="image-1" />
    </a>
    <a class="image-link" href="img/1280px_Holmenkollbakken.jpg" data-lightbox="example-1"  data-title="Holmenkollbakken">
        <img class="example-image" src="img/480px_Holmenkollbakken.jpg" alt="image-1" />
    </a>
    <a class="image-link" href="img/1280px_MaisonRoyale_ParcChateau.jpg" data-lightbox="example-1"  data-title="MaisonRoyale ParcChateau">
        <img class="example-image" src="img/480px_MaisonRoyale_ParcChateau.jpg" alt="image-1" />
    </a>
    <a class="image-link" href="img/1280px_Nasjonalgalleriet_oslo.jpg" data-lightbox="example-1"  data-title="Nasjonalgalleriet Oslo">
        <img class="example-image" src="img/480px_Nasjonalgalleriet_oslo.jpg" alt="image-1" />
    </a>
    <a class="image-link" href="img/1280px_Oslo_harbour.jpg" data-lightbox="example-1"  data-title="Oslo harbour">
        <img class="example-image" src="img/480px_Oslo_harbour.jpg" alt="image-1" />
    </a>
    <a class="image-link" href="img/1280px_Port.jpg" data-lightbox="example-1"  data-title="Port">
        <img class="example-image" src="img/480px_Port.jpg" alt="image-1" />
    </a>
</div>
</div>
</div>
</main>
<script src="dist/js/lightbox-plus-jquery.min.js"></script>
</body>
<script src="js/script.js"></script>
</html>