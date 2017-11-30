<?php 

function get_user_films($pdo, $utilisateur){
    
    /*Récupérer les films de l'utilisateur*/
    $req = $pdo->prepare("select film.id as id from film inner join utilisateurs on film.id_utilisateur = utilisateurs.id where utilisateurs.pseudo=:pseudo");
    $req->bindParam(':pseudo', $utilisateur);
    $req->execute();
    $films_user = $req->fetchAll();
    return $films_user;
}

?>