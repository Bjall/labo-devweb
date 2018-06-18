<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
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
				
			// Si le visiteur n'est pas encore identifié
			if(empty($_SESSION["connect_admin"]) && empty($_SESSION["connect_user"]))
				{
				echo
				' <div class="container">
					<div class="row">
				        <form class="col l6 offset-l3 m8 offset-m2 s10 offset-s1" method="post" action="">
				          <legend><h1 id="connexion">Connexion</h1></legend>
				          <div class="row">
				            <div class="input-field col s12">
				              <i class="material-icons prefix">email</i>
				              <input id="email" name="email" type="email" class="validate" required>
				              <label for="icon-prefix">Email</label>
				            </div>
				          </div>
				          <div class="row">
				            <div class="input-field col s12">
				              <i class="material-icons prefix">lock</i>
				              <input id="password" name="password" type="password" class="validate" required>
				              <label for="icon_prefix">Password</label>
				            </div>
				          </div>
				          <div class="row">
				            <div class="waves-effect waves-light light-green accent-3 black-text btn col s4 offset-s4">
				              <input id="btn" type="submit" class="validate" value="Se connecter">
				            </div>
				          </div>
				        </form>
				    </div>
				  </div>';
				}

			?>

      <script>
        
        $(document).ready(function() {
            Materialize.updateTextFields();
        });

      </script>

	</body>
</html>
