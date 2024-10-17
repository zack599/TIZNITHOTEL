<?php
session_start();
require_once("controleur/controleur_class.php");

$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Garage</title>
<link rel="stylesheet" href="css/site.css">
</head>
<body>

<header>Votre Garage</header>

<nav>
   <img src="images/concept_auto.png" alt="" >

   <a href="index.php?page=2"><h1>Nous</h1></a>

    <a href="index.php?page=1"><h1>Nos Annonces</h1></a>

    <!-- <a href="index.php?page=2"><h1>Notre Garage</h1></a>
    
    <a href="index.php?page=3"><h1>Nos Recommandations</h1></a> -->

    <?php 
    if(isset($_SESSION["email"]))
    {
        echo '<a href="index.php?page=4"><h1>Favoris</h1></a>';

    }
    ?>

    <a href="index.php?page=5"><h1>Compte</h1></a>

    
    
</nav>


<?php
    

if (isset($_GET["page"]))
{
    $page=$_GET["page"];
    switch ($page){

        case 1 : require_once("gestion/annonces.php");break;
        case 2 : require_once("Nous.php");break;
       
        case 4 : require_once("gestion/gestion_favoris.php");break;

        case 5 : require_once("gestion/connexion_inscription.php");break;
        case 6 : require_once("affiche_annonce.php");break;

        

        
    }
}
?>
    
</body>
</html>
