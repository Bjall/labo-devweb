<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Accueil</title>
		<link rel="stylesheet" type="text/css" href="/labo_devweb/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/labo_devweb/css/custom.css">
	</head>
	
	<body>
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<?php
						if(empty($_SESSION["connect_admin"]) && empty($_SESSION["connect_user"]))
						{
						echo
							'<ul>
								<li><a href="/labo_devweb/inscription/">S\'inscrire</a></li>
							</ul>

							<form method="post">
									<div>
										<input type="text" placeholder="Email" name="email">
										<input type="password" placeholder="Password" name="password">
									</div>
								<button type="submit">Se connecter</button>
							</form>';
						}
						elseif(!empty($_SESSION["connect_user"]))
						{
							echo
							'<ul>
								<li><a href="/labo_devweb/deconnexion/">Se déconnecter</a></li>
							</ul>';
						}
						elseif(!empty($_SESSION["connect_admin"]))
						{
							echo 
							'<ul>
								<li><a href="/labo_devweb/ajouter_article/">Ajouter un article</a></li>
								<li><a href="/labo_devweb/deconnexion/">Se déconnecter</a></li>
							</ul>';
						}
					?>
				</ul>
			</div>
		</nav>
	</body>
</html>