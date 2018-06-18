<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin</title>
		<meta description="Back office">
		<!--Import Google Icon Font-->
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="/labo_devweb/css/materialize.min.css"  media="screen,projection"/>
	    <!--Import de la CSS personnalisé-->
	     <link type="text/css" rel="stylesheet" href="/labo_devweb/css/custom.css"/>
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <!--Import materialize icons-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import jQuery before materialize.js-->
	    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="/labo_devweb/js/materialize.min.js"></script>
	</head>

	<body>

		<?php 

			// Message d'accueil personnalisé
			if(!empty($_SESSION["connect_admin"]))
			{
				echo 
				'<h2 id="bonjour">Bonjour '.$_SESSION["admin_name"].'</h2>';
			}

			// On liste les articles
			echo '<div class="container">
					<ul class="collection with-header">
        				<li class="collection-header"><h4>Liste des cours</h4></li>';

			foreach($articles as $article)
			{
				echo 
						'<li class="collection-item"><div>'.$article["titre"].'<a href="/labo_devweb/article/?id='.$article["id"].'" class="secondary-content"><i id="send" class="material-icons">play_circle_outline</i></a></div></li>';
			}
			echo
						'</ul>
					</div>';

		?>

	</body>

</html>