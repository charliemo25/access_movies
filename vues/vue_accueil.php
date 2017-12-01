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
<div class="nav-wrapper indigo lighten-4">
    <a href="#" class="title_ac brand-logo center"><img src="http://localhost/access_movies/img/logo_white.png" width="50" height="50" alt="Logo de access-movies">Access-movies</a>
    <ul class="right hide-on-med-and-down">
       <?php
        if($_SESSION['result']){
            echo '<li><a class="waves-effect waves-light btn-large" href="http://localhost/access_movies/profil">Mon Profil</a></li>';
        } else {
            echo '<li><a class="waves-effect waves-light btn-large" href="http://localhost/access_movies/connect">Connexion</a></li>';
        }
        ?>
    </ul>
</div>
    </nav>
              <div class="slider fullscreen">
        <ul class="slides">
          <li>
            <img src="http://localhost/access_movies/img/fond1.jpg">
            <div class="caption center-align">
              <h3>Access-Movies</h3>
              <h5 class="light grey-text text-lighten-3">Test de slogan</h5>
            </div>
          </li>
          <li>
            <img src="http://localhost/access_movies/img/fond2.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="http://localhost/access_movies/img/fond3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Right Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="http://localhost/access_movies/img/fond4.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
           <div class="center first">
               <h2>Bienvenue sur Access-movies !</h2>
               <p>Sur notre site, tu trouvera des informations intéressantes sur les meilleurs films,<br> sélectionné par une équipe de cinéphile professionnelle !</p>
               <a class="btn btn-large z-depth-2" href="http://localhost/access_movies/accueil/1">Rejoins-nous</a>
               <?php 
               if($_SESSION['result']){
                   echo '';
               } else {
                   echo '<p>Pas encore inscrit ?</p><a class="btn btn-large z-depth-2" href="http://localhost/access_movies/register">Inscrit toi</a>';
               }
               ?>
           </div>
        <div class="row">
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
