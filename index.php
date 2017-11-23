<?php

$uri = $_SERVER['REQUEST_URI'];

$uriarray = explode("/", rtrim($uri));
unset($uriarray[0], $uriarray[1]);
$uri = join("/", $uriarray);

var_dump($uri);

switch($uriarray){
    case $uriarray[2] == 'accueil':
        
        require_once 'modeles/pdo.php';
        require_once 'modeles/m_function.php';
        $liste_films = get_all_movies($pdo);
        $pagination = pagination($pdo, $liste_films, $uriarray[3], 6);
        
        foreach($liste_films as $film){
            $genres = get_genres($film['id'], $pdo);   
        }
        
        require_once 'vues/vue_accueil.php';
        break;
    default:
        echo "Erreur";
        break;
}

?>