<?php 

var_dump($_REQUEST);

if(empty($_REQUEST['nom']) && empty($_REQUEST['prenom']) && empty($_REQUEST['pseudo']) && empty($_REQUEST['mdp'])){
    
    echo "<p>Rempli ça sérieusement jeune bipède ! </p>";
    
} else {
    
    $mdp = password_hash($_REQUEST['mdp'], PASSWORD_DEFAULT);
    
    $req = $pdo->prepare("insert into utilisateurs(nom, prenom, pseudo, mdp) values(:nom, :prenom, :pseudo, :mdp)");
    $req->bindParam(':nom', $_REQUEST['nom']);
    $req->bindParam(':prenom', $_REQUEST['prenom']);
    $req->bindParam(':pseudo', $_REQUEST['pseudo']);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    
}






?>