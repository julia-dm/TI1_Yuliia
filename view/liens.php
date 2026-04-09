<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= ucfirst($_GET['p']) ?></title>
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
 <h2 class="main_title">Quelques liens vers nos partnaires</h2>
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
 <img src="img/liens.jpg" alt="liens">
 
<div class="links_wrapp links">
<a class="" href="#">Berlin</a>
 <a class="" href="#">Lissbone</a>
  <a class="" href="#">Sofia</a>
   <a class="" href="#">Vienne</a>
    <a class="" href="#">Prague</a>
     <a class="" href="#">Varsovie</a>
      <a class="" href="#">Paris</a>
       <a class="" href="#">Amsterdam</a>
        <a class="" href="#">Helsinki</a>
         <a class="" href="#">Madrid</a>
          <a class="" href="#">Copenhague</a>
           <a class="" href="#">Stockholm</a>
    <a class="" href="#">Rome</a>
        <a class="" href="#">Dublin</a>
            <a class="" href="#">Oslo</a>
                <a class="" href="#">Londres</a>
                    <a class="" href="#">Athènes</a>
                        <a class="" href="#">Budapest</a>

</div>
</div>
</div>
</main>
</body>
<script src="js/script.js"></script>
</html>