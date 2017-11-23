<?php
function get_all_movies($pdo){
    
    $stmt = $pdo->prepare("SELECT * from film");
    $stmt->execute();
    $film = $stmt->fetchAll();
    
    return $film;
    
}

function pagination($pdo, $films, $uri, $nb_film_affiche){
    
    $nombreFilms = count($films);
    $nombrePages = ceil(intval($nombreFilms) / $nb_film_affiche);
    
    if(empty($uri)){
        $uri = 1;
    }
    
    $pageActuelle = intval($uri);
    
    if($pageActuelle > $nombrePages){
        $pageActuelle = $nombrePages;
    } 
    else {
        $pageActuelle = $pageActuelle;
    }
    
    $premiereEntree = ($pageActuelle - 1) * $nb_film_affiche;
    
    $liste_films = $pdo->query("SELECT * FROM film ORDER BY titre DESC LIMIT ".$premiereEntree.", ".$nb_film_affiche."");
    $retour = [$liste_films, $nombrePages, $pageActuelle];
    return $retour;
}



function get_genres($id, $pdo){
    
    $req = $pdo->prepare("SELECT film.id, genre.nom as genre from l_film_genre INNER JOIN film on l_film_genre.film_id = film.id INNER JOIN genre on l_film_genre.genre_id = genre.id");
    
    $req->bindParam(':id', $id);
    
    $req->execute();
    
    return $req->fetchAll();
}


?>