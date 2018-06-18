<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter article</title>
		<meta description="Page d'ajout d'article">
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

		<div class="row">
		<form class="col s6 offset-s3" method="post" action="">
		 <legend><h1 id="inscription">Ajouter un article</h1></legend>
		  <div class="row">
		    <div class="input-field col s12">
		      <input id="titre" type="text" name="titre" class="validate">
		      <label for="titre">Titre</label>
		    </div>
		   </div>
		  <div class="row">
		    <div class="input-field col s12">
		      <input id="contenu" type="text" name="texte" class="validate">
		      <label for="contenu">Ecrivez votre article ici</label>
		    </div>
		  </div>
		  <div class="waves-effect waves-light purple accent-3 btn col s4 offset-s4">
		    <input type="submit" value="Publier" class="validate">
		  </div>
		</form>
		</div>
        
	</body>
</html>