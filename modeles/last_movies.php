<?php 
function last_movies($pdo){
    
    $stmt = $pdo->prepare("SELECT film.titre, film.id, film.date_ajout, film.id_utilisateur from film order by date_ajout desc limit 0,7");
    $stmt->execute();
    $film = $stmt->fetchAll();
    
    return $film;
    
}

?>