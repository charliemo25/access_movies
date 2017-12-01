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
                echo '<li class="input-field"><form method="post" action="http://localhost/access_movies/search">
        <div class="input-field">
          <input class="searched" id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>';
                echo '<li><i class="material-icons left">theaters</i>Bonjour '.$_SESSION['pseudo'].' !';
                echo '</ul>';
                echo '<li><a class="deconnect" href="http://localhost/access_movies/deconnexion"><i class="material-icons left">label_outline</i>Déconnexion</a></li>';
            } else{
                echo '<li><a href="http://localhost/access_movies/connect"><i class="material-icons left">account_circle</i>Connexion</a></li>';
                echo '<li><a href="http://localhost/access_movies/register"><i class="material-icons left">input</i>Inscription</a></li>';
                echo '<ul class="right hide-on-med-and-down">';
                echo '<li class="input-field"><form method="post" action="http://localhost/access_movies/search">
        <div class="input-field">
          <input class="searched" id="search" placeholder="Rechercher un film" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>';
                echo '</ul>';
            }
          ?>
      </ul>
    </div>
</nav>

  <?php 
    if($_SESSION['result']){
        echo '<div class="profile">
    <a href="http://localhost/access_movies/profil" class="btn btn-floating btn-large tooltipped" data-position="right" data-delay="5" data-tooltip="Profil"><i class="material-icons">account_box</i></a>
    </div>';
    }
    ?>
<section class="container">