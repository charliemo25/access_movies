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
      <a href="#" class="brand-logo">Cancoicode-Movies</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="http://localhost/access_movies/accueil/">Accueil</a></li>
       <?php if($_SESSION['result']){
                echo '<li><a href="http://localhost/access_movies/ajout/">Ajout</a></li>';
            } ?>
      </ul>
    </div>
</nav>
<section class="container">