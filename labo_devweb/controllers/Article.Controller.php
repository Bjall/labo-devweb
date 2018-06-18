<?php 

//AFFICHAGE ARTICLE

$req_article = $bdd->query("SELECT * FROM articles WHERE id='".$_GET["id"]."' ");

$article = $req_article -> fetch();


//AFFICHAGE COMMENTAIRE

$commentaires = $bdd->query("SELECT * FROM commentaires WHERE id_article='".$_GET["id"]."' ORDER BY id");


//AFFICHAGE ENTREE COMMENTAIRE


if(!empty($_SESSION["connect_user"]) || !empty($_SESSION["connect_admin"]))
{
	if(!empty($_POST["commentaire"]))
	{
		$id_article = $_GET["id"];
		if(!empty($_SESSION["connect_admin"])) {
			$user = $_SESSION["admin_name"];
		}
		else{
			$user = $_SESSION["user_name"];
		}
		$commentaire = $_POST["commentaire"];

	    $ajout = $bdd->prepare("INSERT INTO commentaires (id, id_article, user, commentaire) VALUES (DEFAULT, :id_article, :user, :commentaire)");

	    $ajout->execute(array(
	    'id_article' => $id_article,	
	    'user' => $user,
	    'commentaire' => $commentaire
	    ));

	    header('Location: http://localhost/labo_devweb/articles/');
	}
	else
	{
		$_SESSION["ajout_impossible"] = "Ajout impossible";
	}
}
else
{
	$_SESSION["ajout_impossible"] = "Connecte toi pour commenter !";
}

require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["front"]."article.php";