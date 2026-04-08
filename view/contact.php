<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
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
 <h2 class="main_title">Pour nous contacter</h2>
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
 <img src="img/contacts.jpg" alt="contacts">
 <form action="">
   <h3>Pour nous laisser un commentaire ou pouur obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h3>
   <div class="label_cover">
   <label for="first_name">NOM:</label>
   <input type="text" id="name" name="name" >
   </div>
     <div class="label_cover">
   <label for="last_name">PRENOM:</label>
   <input type="text" name="last_name" id="last_name">
   </div>
     <div class="label_cover">
<label for="city">VILLE:</label>
   <input type="text" id="name" name="name" >
   </div>
    <div class="label_cover">
   <label for="mail">EMAIL:</label>
   <input type="text" id="mail" name="mail" >
   </div>
     <div class="label_cover">
   <label for="message">COMMENTAIRES:</label>
   <textarea name="" id="" rows="7"></textarea>
   </div>
  <button  class="button_form">Envoyer votre message </button>
 </form>
 
</div>
</div>
</div>
</main>
</body>
<script src="js/script.js"></script>
</html>