<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Oslo - Accueil</title>
</head>

<body>
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
            <h2 class="main_title">Bienvenue sur notre site consacré à Oslo.</h2>
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
            <img src="img/armoiries.png" alt="armoiries" class="img">
            <p>
               Oslo est la capitale d'État de la Norvège. La ville s'est appelée Christiania de 1624 à 1924, selon l'ancienne graphie latine héritée du danois, ou communément Kristiania en dano-norvégien. Le 1er janvier 1925, elle a officiellement repris le nom d'un modeste faubourg, site historique de la première ville, fondée au fond de l'Oslofjord par Harald III et promue capitale royale sous Håkon V.

               La ville d'Oslo compte en 2020 une population de plus de 690 000 habitants, dont 25,6 % d'immigrants. La région du Grand Oslo a pour sa part une population totale de 1 546 706 habitants en 2020. La capitale regroupe ainsi 12,9 % de la population norvégienne et constitue tant une kommune qu'un fylke (comté), regroupant quinze bydeler (arrondissements), s'étendant largement autour du fjord d'Oslo et vers le nord-est.

               Il n'y a pas de gentilé d'usage générique dans la langue norvégienne pour les habitants et originaires d'Oslo (sur le modèle de Tokyo, on parle parfois d'Osloïtes en français, voire très récemment d'Osloviens). En norvégien, le terme admis est Osloborger, dont la traduction littérale en français est «citoyen d'Oslo ».

               La commune s'étend sur 450 km2 et possède de grands parcs ainsi que des pistes de ski de fond. Important nœud de communication ferroviaire et portuaire, la ville est desservie par un réseau routier et autoroutier dense et de nombreux trains de banlieue.


            </p>
            <h3 class="title_links">Dans ce site, vous trouvez diverses informations contenant</h3>
            <div class="links_wrapp accueil">
               <a href="?p=geographie">Une brève presentation d'Oslo</a>
               <a href="?p=histoire">Un rappel hisorique, de sa fondation à ajourd'hui</a>
               <a href="?p=culture">Un tour d'horison en matière d'art et culture</a>
               <a href="?p=galerie">Une galleriede photographies</a>
               <a href="?p=contact">Un formoulaire pour nous contacter</a>
               <a href="?p=liens">Des liens vers des sites partnaires</a>
            </div>
            <p class="source">Source: <a href="https://fr.wikipedia.org/wiki/Oslo">Wikipédia – Oslo</a></p>
         </div>
      </div>

   </main>
</body>
<script src="js/script.js"></script>

</html>