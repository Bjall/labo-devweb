<?php

if(!$_SESSION["connect"]){
    $_SESSION["erreur"] = "Vous devez vous connecter pour accéder à cette page";
    header('Location: http://localhost/labo_devweb/');
}

require $_dir["front"]."user.php";