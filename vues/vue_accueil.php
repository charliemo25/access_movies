<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur Cancoicode-Movies</title>
    <link rel="stylesheet" href="http://localhost/access_movies/css/style.css">
    <link rel="stylesheet" href="http://localhost/access_movies/css/materialize.min.css">
</head>

<body>
<nav>
<div class="nav-wrapper green darken-2">
    <a href="http://localhost/access_movies/accueil/1" class="title_ac brand-logo center"><img src="http://localhost/access_movies/img/logo_white.png" width="50" height="50" alt="Logo de access-movies">Access-movies</a>
    <ul class="right hide-on-med-and-down">
       <?php
        if($_SESSION['result']){
            echo '<li><a class="waves-effect waves-light btn-large" href="http://localhost/access_movies/profil">Mon Profil</a></li>';
        } else {
            echo '<li><a class="waves-effect waves-light btn-large" href="http://localhost/access_movies/connect">Connexion</a></li>';
            echo '<li><a class="btn btn-large z-depth-2" href="http://localhost/access_movies/register">Inscription</a></li>';
               }
        ?>
    </ul>
</div>
    </nav>
              <div class="slider fullscreen">
        <ul class="slides">
          <li>
            <img src="http://localhost/access_movies/img/fond1.jpg">
            <div class="caption center-align tagline">
              <h3 class="shadow">Bienvenue sur Access-movies !</h3>
               <p class="shadow light grey-text text-lighten-3">Sur notre site, tu trouvera des informations intéressantes sur les meilleurs films,<br> sélectionné par une équipe de cinéphile professionnelle !</p>
               <a class="btn btn-large z-depth-2" href="http://localhost/access_movies/accueil/1">Rejoins-nous</a>
            </div>
          </li>
          <li>
            <img src="http://localhost/access_movies/img/fond2.jpg">
            <div class="caption center center-align tagline">
              <h3 class="shadow">Un site de partage</h3>
              <p class="shadow light grey-text text-lighten-3">Vous avez la possibilité de partager vos films préféré avec la communauté de l'Access-movies !</p>
              <a class="btn btn-large z-depth-2" href="http://localhost/access_movies/accueil/1">Rejoins-nous</a>
            </div>
          </li>
          <li>
            <img src="http://localhost/access_movies/img/fond3.jpg">
            <div class="caption center center-align tagline">
              <h3 class="shadow">La passion du film</h3>
              <p class="shadow light grey-text text-lighten-3">De très grand passionné(e)s du cinéma recommande fortement de consulter notre site !</p>
              <a class="btn btn-large z-depth-2" href="http://localhost/access_movies/accueil/1">Rejoins-nous</a>
            </div>
          </li>
          <li>
            <img src="http://localhost/access_movies/img/fond4.jpg">
            <div class="caption center center-align tagline">
              <h3 class="shadow">Une communauté très active</h3>
              <p class="shadow light grey-text text-lighten-3">Notre communauté ajoute constamment des films à notre site !</p>
              <a class="btn btn-large z-depth-2" href="http://localhost/access_movies/accueil/1">Rejoins-nous</a>
            </div>
          </li>
        </ul>
      </div>
        <div class="row ajout">
                <div class="carousel">
                   <h3 class="text-center">Derniers Ajouts: </h3>
                    <?php
                    
                    foreach($last_films as $films){
                        if($films['id'] > 39){
                        echo '<a class="z-depth-3 carousel-item" href="http://localhost/access_movies/films/'.$films['id'].'"><img src="http://localhost/access_movies/img/void.jpg"></a>';
                        } else {
                            echo '<a class="z-depth-3 carousel-item" href="http://localhost/access_movies/films/'.$films['id'].'"><img src="http://localhost/access_movies/img/'.$films['id'].'.jpg"></a>';
                        }
                    }
                    
                    ?>
                </div>
        </div>

<script src="http://localhost/access_movies/js/jquery.min.js"></script>
<script src="http://localhost/access_movies/js/materialize.min.js"></script>
<script src="http://localhost/access_movies/js/app.js"></script>
</body>

</html>
