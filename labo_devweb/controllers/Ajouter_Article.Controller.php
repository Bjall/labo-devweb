<?php 

if(!empty($_POST["titre"]) && !empty($_POST["texte"]))
{
	$titre = $_POST["titre"];
	$texte = $_POST["texte"];

	$ajout = $bdd->prepare("INSERT INTO articles (id, titre, texte)
    VALUES (DEFAULT, :titre, :texte)");

    $ajout->execute(array(
    'titre' => $titre,
    'texte' => $texte
    ));

    header('Location: http://localhost/labo_devweb/articles/');

}

require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["back"]."ajouter_article.php";