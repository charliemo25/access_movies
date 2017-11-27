<?php

$uri = $_SERVER['REQUEST_URI'];


$uriarray = explode("/", rtrim($uri));
unset($uriarray[0], $uriarray[1]);
$uri = join("/", $uriarray);

require_once ('modeles/get_genre.php');

switch($uriarray){
    case empty($uriarray[2]):
        header("Refresh: 0; url=accueil");
        break;
    case $uriarray[2] == 'accueil':
        
        require_once 'modeles/pdo.php';
        
        require_once 'modeles/get_all_movies.php';
        
        $liste_films = get_all_movies($pdo);
        
        require_once 'modeles/pagination.php';
        
        $pagination = pagination($pdo, $liste_films, $uriarray[3], 6);
        
        require_once 'modeles/get_genres.php';
        
        foreach($liste_films as $film){
            $genres = get_genres($film['id'], $pdo);   
        }
        
        require_once 'vues/vue_accueil.php';
        break;
    case $uriarray[2] == 'films':
        
        require_once 'modeles/pdo.php';
        require_once 'modeles/detail_movie.php';
        $detail_film = detail_movie($pdo, $uriarray[3]);
        require_once 'modeles/get_genres.php';
        
        foreach($detail_film as $film){
            $genre = get_genres($film['id'], $pdo);   
        }
        require_once 'vues/vue_films.php';
        break;
    case $uriarray[2] == 'ajout':
        require_once 'modeles/pdo.php';
        require_once 'vues/vue_form.php';
        require_once 'modeles/formulaire.php';
        break;
    default:
        echo "Erreur 404";
        break;
}

?>
<script src="vues/js/app.js"></script>