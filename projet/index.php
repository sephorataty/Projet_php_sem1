<?php
require_once("model/projet.model.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
        <div class="menu">
            <ul>
                <li><a href="index.php?view=1">OUVRAGES</a></li>
                <li><a href="index.php?view=2">RAYONS</a></li>
                <li><a href="index.php?view=3">AUTEURS</a></li>
                <li><a href="index.php?view=4">EXEMPLAIRE</a></li>
                <li><a href="index.php?view=5">PRETS</a></li>
                <li><a href="index.php?view=6">ADHERENTS</a></li>
            </ul>
        </div>
     <?php 
            if (isset($_GET['view'])){
                //$view=$_GET["view"];
                extract($_GET);
                if($view==1){
                    require_once("views/ouvrage.html.php"); 
                }elseif ($view==2){
                    require_once("views/rayon.html.php");
                }elseif ($view==3){
                    require_once("views/auteur.html.php");
                }elseif ($view==4){
                    require_once("views/exemplaire.html.php");
                }elseif ($view==5){
                    require_once("views/prets.html.php");
                }elseif ($view==6){
                    require_once("views/adherent.html.php");
                }else{
                require_once("views/ouvrage.html.php");
             }
            }
       ?>  
</body>
</html>