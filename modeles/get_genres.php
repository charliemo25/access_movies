<?php
function get_genres($id, $pdo){
    
    $req = $pdo->prepare("SELECT film.id, genre.nom as genre from l_film_genre INNER JOIN film on l_film_genre.film_id = film.id INNER JOIN genre on l_film_genre.genre_id = genre.id");
    
    $req->bindParam(':id', $id);
    
    $req->execute();
    
    return $req->fetchAll();
}
?>