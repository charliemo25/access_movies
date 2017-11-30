<?php 

if(empty($_REQUEST['mdp_ancien']) && empty($_REQUEST['mdp']) && empty($_REQUEST['mdp2'])){
    
    $erreur = "";
    
} else {
    
    $erreur = "";
    $envoi = true;
    
    $mdp_ancien = $_REQUEST['mdp_ancien'];
    $mdp = $_REQUEST['mdp'];
    $mdp2 = $_REQUEST['mdp2'];
    
    switch($mdp_ancien){
        case '':
                $envoi = false;
                $erreur['mdp_ancien'] = "Le champ mot de passe est vide";
            break;
        case $mdp_ancien != $_SESSION['password']:
                $envoi = false;
                $erreur['mdp_ancien'] = "Votre mot de passe n'est pas bon";
        default:
                $erreur['mdp_ancien'] = '';
            break;
    }
    
    switch($mdp){
        case '':
                $envoi = false;
                $erreur['mdp'] = "Votre nouveau mot de passe n'est pas bon";
            break;
         case strlen($mdp) > 12 || strlen($mdp) < 6:
                $envoi = false;
                $erreur['mdp'] = "Veuillez saisir un mot de passe compris entre 6 et 12 caractères";
            break;  
        default:
                $erreur['mdp'] = '';
            break;
    }
    
    if($mdp != $mdp2){
        $erreur['match'] = "Votre nouveau mot de passe n'est pas bon";
        $envoi = false;
    } else{
        $erreur['match'] = '';
    }
    
    if($envoi){
        $mdp_ancien = hash('sha256', $mdp_ancien);
        
        $mdp = hash('sha256', $mdp);
        
        $req = $pdo->prepare("update utilisateurs set mdp=:mdp where mdp=:mdp_ancien");
        
        $req->bindParam(':mdp', $mdp);
        $req->bindParam(':mdp_ancien', $mdp_ancien);
        $req->execute();
        
        echo '<p>Votre mot de passe a bien été modifié</p>';
        
    } else{
        foreach($erreur as $fail){
            echo '<p>'.$fail.'</p>';
        }  
    }
}

?>