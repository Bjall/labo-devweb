<?php
if(!empty($_POST))
{
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	$req = $bdd->prepare("INSERT INTO users (nom,prenom,email,password)
    VALUES (:nom, :prenom, :email, :password)");

    $req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'email' => $email,
	'password' => $password
	));

	$_SESSION["erreur"] = "Vous êtes désormais inscris";
	header("Location: http://localhost/labo_devweb/");

}

require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["front"]."inscription.php";