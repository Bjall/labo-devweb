<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Accueil</title>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!--Import de la CSS personnalisé-->
         <link type="text/css" rel="stylesheet" href="/labo_devweb/css/custom.css"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Import materialize icons-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</head>

	<body>
		<nav>
			<div class="nav-wrapper light-blue darken-1">
				<a href="/labo_devweb" class="brand-logo"><img id="github" src="/labo_devweb/images/github.svg" width="60em"></a>
				<div></div>
				<a href="/labo_devweb" class="brand-logo" id="y2s">[Y2School] DevWeb</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					
				<?php
					if(empty($_SESSION["connect_user"]) && empty($_SESSION["connect_admin"]))
					{
						echo '	<li><a href="/labo_devweb/inscription/">S\'inscrire</a></li>
								<li><a href="/labo_devweb/connexion/">Se connecter</a></li>';
					}
					elseif(!empty($_SESSION["connect_user"]) || !empty($_SESSION["connect_admin"]))
					{
						if(!empty($_SESSION["connect_admin"]))
						{
							echo '<li><a href="/labo_devweb/ajouter_article/">Ajouter un article</a></li>';
						}
						echo '<li><a href="/labo_devweb/articles/">Voir les articles</a></li>
						<li><a href="/labo_devweb/deconnexion/">Se déconnecter</a></li>';
					}

				?>

				</ul>
			</div>
		</nav>
	</body>
</html>
