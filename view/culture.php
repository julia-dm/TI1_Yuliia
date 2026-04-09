<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Oslo - <?= ucfirst($_GET['p']) ?></title>
</head>

<body>
   <header id="go__up">
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
            <h2 class="main_title">Culture</h2>
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
            <img src="img/culture.jpg" alt="culture">
            <h3 class="content_title">Monuments célèbres</h3>
            <p>
               Rådhuset, l'hôtel de Ville, où se tient annuellement la cérémonie publique du prix Nobel de la paix.
               Nobels Fredssenter, le Centre Nobel de la Paix, à la mémoire de plus de cent ans de prix Nobel de la paix et des conflits dans le monde.
               Akershus festning, la citadelle d'Akershus : centre de commandement militaire, mais surtout ensemble architectural et espace ouverts au public, enchâssés entre deux des baies d'Oslo (Pipervika et Bjørvika).
               Det Kongelige Slott, le Palais royal.
               Stortinget, le Parlement.
               Frognerparken, domaine de 40 hectares abritant un parc arboré, avec l'ensemble sculpté et dessiné par Gustav Vigeland.
               Holmenkollen (tremplin), le tremplin de saut à ski de Holmenkollen, son « arène » et le musée du ski où est montré le plus ancien ski intact au monde (environ 4 000 ans), une chapelle (Holmenkollen kapell) et, un peu plus haut (à Voksenkollen), Kongsseteren (la cabane du Roi) se dressent à proximité.
               Tryvannstårnet', la tour de Tryvann, dont le sommet culmine à 529 m au-dessus de la mer, couronne un lieu de villégiature dominant Oslo et la naissance de son fjord, et d'où partent pistes de ski alpin et nordique.
               Operaen, le nouvel Opéra d'Oslo, inauguré en avril 2008 dans le quartier de Bjørvika.
               Nationaltheatret, le Théâtre national d'Oslo.
               Oslo Domkirke, la Cathédrale d'Oslo, inaugurée en 1697.
            </p>

            <h3 class="content_title">Musée</h3>
            <ul>
               <li>Le Musée national, de 1882</li>
               <li>Munch-museet' (musée Munch), consacré à l'œuvre du peintre norvégien Edvard Munch.</li>
               <li>Musée d'art contemporain Astrup Fearnley, musée privé d'art contemporain.</li>
               <li>Jødisk Museum, musée juif d'Oslo, qui présente l'histoire et la culture des juifs de Norvège.</li>
               <li>Henie Onstad kunstsenter (centre d'art Henie Onstad) collection d'art contemporain, située dans un parc de sculptures.
               </li>
               <li>Musée Vigeland, près du Vigelandsanlegget, installation monumentale du sculpteur Norvégien Gustav Vigeland comportant plusieurs centaines d'œuvres, dans le parc Frogner.
               </li>
               <li>Le bateau d'Oseberg (musée des navires vikings d'Oslo).</li>
               <li>Naturhistorisk Museum, muséum d'histoire naturelle.</li>
               <li>Vikingskipshuset, musée des navires vikings d'Oslo, qui abrite le bateau d'Oseberg.</li>
               <li>Naturhistorisk Museum, muséum d'histoire naturelle.</li>
               <li>Norsk Folkemuseum (musée folklorique norvégien) : culture et histoire du pays, chalets norvégiens anciens et l'église de Gol.</li>
            </ul>
            <a href="#go__up" class="go__up__link"> &#8593 </a>
            <h3 class="content_title">Personnalités</h3>
            <ul>
               <li>Carl Wilhelm Boeck (1808-1875), médecin et dermatologue, y est mort.</li>
               <li>Thomas Bennett (1814-1898), négociant britannique, pionnier du tourisme en Norvège, mort à Christiania.</li>
               <li>Anna Caspari Agerholt (1892-1943), écrivaine et activiste des droits des femmes.</li>
               <li>Arne Næss (1912-2009), philosophe et écrivain. Pionnier de l'écologie profonde (deep ecology), terme qu'il a créé en 1973.</li>
               <li>Henriette Bie Lorentzen (1911-2001), résistante et féministe norvégienne.</li>
               <li>Kjetil André Aamodt, skieur alpin aux multiples titres olympiques et mondiaux.</li>
               <li>Sigri Welhaven (1894-1991), sculptrice norvégienne.</li>
               <li>Nic Waal (1905-1960), pédiatre et résistante norvégienne.</li>
               <li>Gro Eva Farseth, connue en France sous son nom marital, Eva Joly.</li>
               <li>Jo Nesbø (1960), romancier.</li>
               <li>Tuva Syversten (1983-), musicienne</li>
               <li>Aksel Rykkvin (2003), chanteur norvégien.</li>
               <li>Fredrikke Egeberg (1815-1861), pianiste et compositrice norvégienne.</li>
               </p>
            </ul>
            <a href="#go__up" class="go__up__link">↑</a>


         </div>
      </div>
   </main>
</body>
<script src="js/script.js"></script>

</html>