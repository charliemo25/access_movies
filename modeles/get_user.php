<?php 

function get_user($pdo){
    $req = $pdo->prepare("SELECT film.id_user, utilisateurs.id as user from INNER JOIN film on l_film_genre.film_id = film.id INNER JOIN genre on l_film_genre.genre_id = genre.id");
}



?>