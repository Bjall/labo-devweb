<?php 


$req = $bdd->query("DELETE FROM commentaires WHERE id='".$_GET["id"]."' ");

header('Location: http://localhost/labo_devweb/articles/');


require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["front"]."article.php";