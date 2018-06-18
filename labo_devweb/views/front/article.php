<!DOCTYPE html>
<html>
	<head>
		<title>Article</title>
		<meta charset="utf-8">
		<meta description="Page d'un article">
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
		<!-- ARTICLE -->
		<!-- Carte contenant l'article -->
		<div id="card" class="row">
	        <div class="col s12 m6 l6 offset-s3">
	          <div class="card white z-depth-5">
	            <div class="card-content blue-grey-text text-darken-1">
	              <!-- Titre de la carte -->
	              <h1><span id="card_title" class="card-title center-align"><?=$article["titre"]?></span></h1>
	              <!-- Contenu de la carte -->
	              <p><?=$article["texte"]?></p>
	            </div>
	            <div class="card-action light-blue darken-1 center-align">
	              <a href="/labo_devweb/articles/" class="white-text">Retour à la liste des cours</a>
	            </div>
	          </div>
	        </div>
      	</div>

		<!-- COMMENTAIRES -->

      	<?php

			echo
		   	  '<div class="row">
		        <div class="col s6 offset-s3">
		          <div class="card white">
		            <div class="card-content blue-grey-text text-darken-1">
		              <span class="card-title"><h2 id="comments">COMMENTAIRES</h2></span>
		              	<ul class="collection"
		              	<li></li>';
				foreach($commentaires as $comm)
				{
			        echo
			              '<li class="collection-item"><p id="user">'.$comm["user"].'</p>
			              <p>'.$comm["commentaire"].'</p></li>';
			    	// Si l'utilisateur est admin, il peut supprimer le commentaire
					if(!empty($_SESSION["connect_admin"]))
					{
						echo
			            '<div class="card-action">
			              <a href="/labo_devweb/supprimer_commentaire/?id='.$comm["id"].'">Supprimer</a>
			            </div>';
			        }
			    }
			    echo
			           '</ul>
			           </div>
			          </div>
			        </div>
			      </div>';

      	?>

		<!-- POSTER UN COMMENTAIRE -->

		    <div class="row">
		      <div class="col s6 offset-s3">
		        <div class="card-panel white">
		          <span class="blue-grey-text text-darken-1">		  
			          <!-- Champ textarea pour poster un commentaire -->
					  <div class="row">
					    <form method="post" action="">
					      <div class="row">
					        <div class="input-field col s12">
					          <textarea id="textarea1" name="commentaire" class="materialize-textarea"></textarea>
					          <label for="textarea1">Votre commentaire</label>
					          <div class="center-align">
					          	<input class="waves-effect waves-light btn light-blue darken-1 center-align" type="submit"></input>
					          </div>
					        </div>
					      </div>
					    </form>
					  </div>
		          </span>
		        </div>
		      </div>
		    </div>

	</body>
</html>