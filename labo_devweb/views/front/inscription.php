<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
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
      <!-- Formulaire d'inscription -->
      <div class="container">
        <div class="row">
          <form class="col l6 offset-l3 m8 offset-m2 s10 offset-s1" method="post" action="">
            <legend><h1 id="inscription">Inscription</h1></legend>
              <div id="texte">
                <p id="inscrit">Si tu n'as pas encore de compte, inscris-toi pour pouvoir accéder aux cours.</p>
                <a href="/labo_devweb/connexion/">Déjà inscrit ?</a>
              </div>
            <div class="row">              
              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="prenom" name="prenom" type="text" class="validate" required>
                <label for="icon_prefix">Prénom</label>
              </div>              
              <div class="input-field col s6">
                <input id="nom" name="nom" type="text" class="validate" required>
                <label for="icon_prefix">Nom</label>
              </div>
            </div>            
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email" name="email" type="email" class="validate" required>
                <label for="icon_prefix">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="password" name="password" type="password" class="validate" required>
                <label for="icon_prefix">Mot de passe</label>
              </div>              
            </div>
            <div class="row">
              <div class="waves-effect waves-light purple accent-3 btn col s4 offset-s4">
                <input id="btn" type="submit" class="validate" value="S'inscrire">
              </div>
            </div>
          </form>
        </div>
      </div>

      <script>
        
        $(document).ready(function() {
            Materialize.updateTextFields();
        });

      </script>

    </body>
</html>

