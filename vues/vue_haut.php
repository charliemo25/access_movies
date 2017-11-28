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
       <?php if(empty($uriarray[3])){
        echo '<li><a href="accueil">Accueil</a></li>';
        } else {
        echo '<li><a href="../accueil">Accueil</a></li>';
        }?>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Films<i class="material-icons right">arrow_drop_down</i></a></li>
         <?php if(empty($uriarray[3])){
        echo '<li><a href="ajout">Ajout</a></li>';
        } else {
        echo '<li><a href="../ajout">Ajout</a></li>';
        }  ?>
      </ul>
      <ul id="dropdown1" class="dropdown-content">
       <?php
          // On récupère les genres (pas de doubles !)
            $genre = get_genre($pdo);
            foreach($genre as $g){
              echo '<li><a href="#!">'.$g['nom'].'</a></li>';
          }
          ?>
        </ul>
    </div>
</nav>
<section class="container">