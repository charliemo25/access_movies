<?php 
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['password'] = $_POST['password'];

function connect_user($login, $mdp, $users){
    $mdp = hash('sha256', $mdp);
    $_SESSION['password'] = $mdp;
    if (isset($login) && isset($mdp)){
        $bool = false;
        foreach($users as $u){
            if($login == $u['pseudo'] && $mdp == $u['mdp']){
                $_SESSION['nom'] = $u['nom'];
                $_SESSION['prenom'] = $u['prenom'];
                $bool = true;
                break;
            }
        }
    } else{
        return $bool;
    }
    return $bool;
}
?>