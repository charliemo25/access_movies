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
<nav>
    <div class="nav-wrapper green darken-1">
      <a href="http://localhost/access_movies/accueil/1" class="brand-logo">Cancoicode-Movies</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="http://localhost/access_movies/accueil/1">Accueil</a></li>
       <?php if($_SESSION['result']){
                echo '<li><a href="http://localhost/access_movies/ajout/">Ajout</a></li>';
                echo '<li>Bonjour '.$_SESSION['pseudo'].' !';
                echo '<li><a href="http://localhost/access_movies/deconnexion">Déconnexion</a></li>';
            } else{
                echo '<li><a href="http://localhost/access_movies/connect">Connexion</a></li>';
                echo '<li><a href="http://localhost/access_movies/register">Inscription</a></li>';
            }
          ?>
      </ul>
    </div>
</nav>
<section class="container">