<?php 

var_dump($_REQUEST);

if(empty($_REQUEST['nom']) && empty($_REQUEST['prenom']) && empty($_REQUEST['pseudo']) && empty($_REQUEST['mdp'])){
    
    
} else {
    
    $erreur = "";
    $envoi = true;
    
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $pseudo = $_REQUEST['pseudo'];
    $mdp = hash('sha256', $_REQUEST['mdp']);
    
    switch($nom){
        case '':
                $envoi = false;
                $erreur['nom'] = "Le nom est vide";
            break;
        default:
                $erreur['nom'] = '';
            break;
    }
    
    switch($prenom){
        case '':
                $envoi = false;
                $erreur['prenom'] = "Le prenom est vide";
            break;
        default:
                $erreur['prenom'] = '';
            break;
    }
    
    switch($pseudo){
        case '':
                $envoi = false;
                $erreur['pseudo'] = "Le pseudo est vide";
            break;
        default:
                $erreur['pseudo'] = '';
            break;
    }
    
    switch($mdp){
        case '':
                $envoi = false;
                $erreur['mdp'] = "Le mdp est vide";
            break;
        case strlen($mdp) > 12 || strlen($mdp) < 6:
                $envoi = false;
                $erreur['mdp'] = "Veuillez saisir un mdp compris entre 6 et 12 caractères";
            break;
        default:
                $erreur['mdp'] = '';
            break;
    }
    
    if($envoi){
        
        $req = $pdo->prepare("insert into utilisateurs(nom, prenom, pseudo, mdp) values(:nom, :prenom, :pseudo, :mdp)");
        $req->bindParam(':nom', $_REQUEST['nom']);
        $req->bindParam(':prenom', $_REQUEST['prenom']);
        $req->bindParam(':pseudo', $_REQUEST['pseudo']);
        $req->bindParam(':mdp', $mdp);
        $req->execute();
    }
    
    
    
}






?>