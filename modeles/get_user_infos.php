<?php 

function get_user_infos($pdo){
    $req = $pdo->prepare("SELECT utilisateurs.nom, utilisateurs.prenom, utilisateurs.pseudo, utilisateurs.mdp FROM utilisateurs");
    $req->execute();
    $user = $req->fetchAll();
    
    return $user;
}

?>