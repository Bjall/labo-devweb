<?php
// Si le visiteur n'est pas encore identifié
if(empty($_SESSION["connect_admin"]) && empty($_SESSION["connect_user"]))
{
    // On vérifie s'il est admin
    if(!empty($_POST))
    {
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $req = $bdd->prepare("SELECT * FROM admins
    	WHERE email=:email
    	AND password=:password");

        $req->execute(array(
        'email' => $email,
        'password' => $password
        ));

        $admin = $req->fetch();

        // Si le login et password sont bons
        if(!empty($admin)) 
        {
            $_SESSION["connect_admin"] = true;
            $_SESSION["admin_name"] = $admin["prenom"]." ".$admin["nom"];
            // On renvoie vers le back office
            header('location: http://localhost/labo_devweb/admin/');
        }
        else // Sinon
        {
            $_SESSION["erreur"] = "Mauvais identifiants";
        }
    }

    // On vérifie s'il est utilisateur
    if(!empty($_POST))
    {
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $req = $bdd->prepare("SELECT * FROM users
    	WHERE email=:email
    	AND password=:password");

        $req->execute(array(
            'email' => $email,
            'password' => $password
        ));

        $user = $req->fetch();

        // Si le login et password sont bons
        if(!empty($user))
        {
            $_SESSION["connect_user"] = true;
            $_SESSION["user_name"] = $user["prenom"]." ".$user["nom"];
            // On renvoie vers le front office
            header('location: http://localhost/labo_devweb/articles/');
        }
        else // Sinon
        {
            $_SESSION["erreur"] = "Mauvais identifiants";
        }
    }
}

require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["front"]."connexion.php";