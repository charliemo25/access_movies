<?php 

function get_user($pdo){
    $req = $pdo->prepare("SELECT film.titre, utilisateurs.nom, utilisateurs.prenom, utilisateurs.pseudo, utilisateurs.mdp FROM film INNER JOIN utilisateurs ON film.id_utilisateur = utilisateurs.id");
    $req->execute();
    $user = $req->fetchAll();
    
    return $user;
}

?>