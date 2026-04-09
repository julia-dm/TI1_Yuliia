<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Erreur</title>
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
 <h2 class="main_title">Erreur 404</h2>
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
 <img src="img/404.jpg" alt="error" >
 <a class="error_link" href="./">Retour à l'accueil</a>
</div>
</div>
</main>
</body>
<script src="js/script.js"></script>
</html>