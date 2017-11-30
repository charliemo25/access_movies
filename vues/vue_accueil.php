<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur Cancoicode-Movies</title>
    <link rel="stylesheet" href="http://localhost/access_movies/css/style.css">
    <link rel="stylesheet" href="http://localhost/access_movies/css/materialize.min.css">
</head>

<body>

    <section class="container">


        <div class="row">
                <div class="carousel">
                    <?php
                    
                    foreach($last_films as $films){
                        echo '<a class="carousel-item" href="http://localhost/access_movies/films/'.$films['id'].'"><img src="http://localhost/access_movies/img/'.$films['id'].'.jpg"></a>';
                    }
                    
                    ?>
                </div>
            <div class="col l4"></div>
            <div class="col l4"></div>
        </div>
    </section>

<script src="http://localhost/access_movies/js/jquery.min.js"></script>
<script src="http://localhost/access_movies/js/materialize.min.js"></script>
<script src="http://localhost/access_movies/js/app.js"></script>
</body>

</html>
