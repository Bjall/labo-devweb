<?php
	// Vérification de la taille maxi du fichier
	$maxsize=1024;
	if ($_FILES['image']['size'] > $maxsize) $erreur = "Le fichier est trop gros";

	// Vérification de l'extension
	$extensions_valides = array( 'jpg' , 'jpeg' , 'png');

	//1. strrchr renvoie l'extension avec le point (« . »).
	//2. substr(chaine,1) ignore le premier caractère de chaine.
	//3. strtolower met l'extension en minuscules.
	$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );

	if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";

	// Modifier l'extension du fichier stocké
	// Déplacer le fichier vers un dossier sur le serveur
	$nom = "/images/{$extension_upload}";
	$resultat = move_uploaded_file($_FILES['image']['tmp_name'],"images/image.jpeg");
	if ($resultat) echo "Transfert réussi";

