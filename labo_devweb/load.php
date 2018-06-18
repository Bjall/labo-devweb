<?php
require('config.php');

$bdd = new PDO("mysql:host=localhost;dbname=".$config["base"].";charset=utf8", 
$config["loginBDD"], $config["mdpBDD"]);
