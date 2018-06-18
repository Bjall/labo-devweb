<?php

if(!$_SESSION["connect_admin"]){
	$_SESSION["erreur"] = "Vous devez vous connecter pour accéder à cette page";
	header('Location: http://localhost/labo_devweb/');
}

$articles = $bdd->query("SELECT * FROM articles");

require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["back"]."admin.php";