<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cancoicode Movies</title>
    <link rel="stylesheet" href="http://localhost/access_movies/css/materialize.min.css">
    <link rel="stylesheet" href="http://localhost/access_movies/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header class="z-depth-3">
        <h1 class="center"><img src="http://localhost/access_movies/img/logo_white.png" height="70" width="70">Access-Movies</h1>
</header>
<nav>
    <div class="nav-wrapper navigation green darken-1">
      <ul id="nav-mobile" class="center hide-on-med-and-down">
       <li><a href="http://localhost/access_movies/accueil/1"><i class="material-icons left">home</i>Accueil</a></li>
       <?php if($_SESSION['result']){
                echo '<li><a href="http://localhost/access_movies/ajout/"><i class="material-icons left">add</i>Ajout</a></li>';
                echo '<ul class="right hide-on-med-and-down">';
                echo '<li class="input-field"><i class="material-icons prefix">search</i><input type="text" class="search" placeholder="Rechercher un film"></li>';
                echo '<li><i class="material-icons left">theaters</i>Bonjour '.$_SESSION['pseudo'].' !';
                echo '</ul>';
                echo '<li><a href="http://localhost/access_movies/deconnexion"><i class="material-icons left">label_outline</i>Déconnexion</a></li>';
            } else{
                echo '<li><a href="http://localhost/access_movies/connect"><i class="material-icons left">account_circle</i>Connexion</a></li>';
                echo '<li><a href="http://localhost/access_movies/register"><i class="material-icons left">input</i>Inscription</a></li>';
                echo '<ul class="right hide-on-med-and-down">';
                echo '<li class="input-field"><form method="POST" action="http://localhost/access_movies/search"><i class="material-icons prefix">search</i><input name="searchtext" type="text" class="search" placeholder="Rechercher un film"></form></li>';
                echo '</ul>';
            }
          ?>
      </ul>
    </div>
</nav>
<section class="container">