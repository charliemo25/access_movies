<?php 
function pagination($pdo, $films, $uri, $nb_film_affiche){
    
    $nombreFilms = count($films);
    $nombrePages = ceil(intval($nombreFilms) / $nb_film_affiche);
    
    if(empty($uri)){
        $uri = 1;
    }
    
    $pageActuelle = intval($uri);
    
    if($pageActuelle > $nombrePages){
        $pageActuelle = $nombrePages;
    } 
    else {
        $pageActuelle = $pageActuelle;
    }
    
    $premiereEntree = ($pageActuelle - 1) * $nb_film_affiche;
    
    $liste_films = $pdo->query("SELECT * FROM film ORDER BY titre DESC LIMIT ".$premiereEntree.", ".$nb_film_affiche."");
    $retour = [$liste_films, $nombrePages, $pageActuelle];
    return $retour;
}
?>