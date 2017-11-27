<?php
function get_all_movies($pdo){
    
    $stmt = $pdo->prepare("SELECT * from film");
    $stmt->execute();
    $film = $stmt->fetchAll();
    
    return $film;
    
}

?>