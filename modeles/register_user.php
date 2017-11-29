<?php 

var_dump($_REQUEST);

if(empty($_REQUEST['nom']) && empty($_REQUEST['prenom']) && empty($_REQUEST['pseudo']) && empty($_REQUEST['mdp'])){
    
    echo "<p>Rempli ça sérieusement jeune bipède ! </p>";
    
} else {
    
    $envoi = true;
    
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $pseudo = $_REQUEST['pseudo'];
    $mdp = hash('sha256', $_REQUEST['mdp']);
    
    if($nom == '' || $prenom == '' || $pseudo == '' || $mdp == ''){
        
        echo'<p>Veuillez remplir les champs';
        $envoi = false;
        
    }
    
    if(strlen($mdp) >10 || strlen($mdp)<8){
        
        echo "<p>Le mot de passe doit être compris entre 8 et 12 caractères</p>";
        $envoi = false;
        
    }
    
    if($envoi == true){
        
        $req = $pdo->prepare("insert into utilisateurs(nom, prenom, pseudo, mdp) values(:nom, :prenom, :pseudo, :mdp)");
        $req->bindParam(':nom', $_REQUEST['nom']);
        $req->bindParam(':prenom', $_REQUEST['prenom']);
        $req->bindParam(':pseudo', $_REQUEST['pseudo']);
        $req->bindParam(':mdp', $mdp);
        $req->execute();
    }
    
    
    
}






?>