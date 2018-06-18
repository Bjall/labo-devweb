RewriteEngine On

## Partie Admin ##
RewriteRule ^admin/$      index.php?page=Admin&%{QUERY_STRING} [L]
   
## Le site ##
RewriteRule ^login/$      index.php?page=Login&%{QUERY_STRING} [L]

## Page de deconnexion ##
RewriteRule ^deconnexion/$      index.php?page=Deconnexion&%{QUERY_STRING} [L]

## Page d'inscription ##
RewriteRule ^inscription/$      index.php?page=Inscription&%{QUERY_STRING} [L]

## Page de connexion ##
RewriteRule ^connexion/$      index.php?page=Connexion&%{QUERY_STRING} [L]

## Page d'articles ##
RewriteRule ^articles/$      index.php?page=Articles&%{QUERY_STRING} [L]

## Page d'un seul article ##
RewriteRule ^article/$      index.php?page=Article&%{QUERY_STRING} [L]

## Page d'user ##
RewriteRule ^user/$      index.php?page=User&%{QUERY_STRING} [L]

## Page d'ajout d'article ##
RewriteRule ^ajouter_article/$      index.php?page=Ajouter_Article&%{QUERY_STRING} [L]

## Page de suppression de commentaire
RewriteRule ^supprimer_commentaire/$      index.php?page=Supprimer_Commentaire&%{QUERY_STRING} [L]

## Page d'ajout d'image
RewriteRule ^image/$      index.php?page=Image&%{QUERY_STRING} [L]
