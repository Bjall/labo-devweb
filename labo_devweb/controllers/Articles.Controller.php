<?php

$articles = $bdd->query("SELECT * FROM articles ORDER BY id");

require $_dir["views"]."navbar.php";
require $_dir["controllers"]."Navbar.Controller.php";
require $_dir["front"]."articles.php";