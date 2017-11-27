<?php
function detail_movie($pdo, $film_id){
    
    $stmt = $pdo->prepare("SELECT * from film WHERE id = :iduri");
    $stmt->bindParam(':iduri', $film_id);
    $stmt->execute();
    $film = $stmt->fetchAll();
    
    return $film;
    
}

?>