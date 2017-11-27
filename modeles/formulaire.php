<?php

if(isset($_REQUEST['tags'], $_REQUEST['titre'], $_REQUEST['annee'], $_REQUEST['description'], $_REQUEST['realisateur'])){

    /*Récuperation des genres dans un tableau*/
    $tags = explode("," , $_REQUEST['tags']);

    /*Récupération de la date; Séparation du jour,mois et année*/
    $annee = explode(", ", $_REQUEST['annee']);
    /*Suppresion du jour et du mois*/
    unset($annee[0]);
    /*annee prend la valeur de... l'année*/
    $annee = intval($annee[1]);
    
    
    /*Insertion d'un film*/
    $req = $pdo->prepare("insert into film(titre, annee, description, realisateur) values(:titre, :annee, :description, :realisateur)");
    $req->bindParam(':titre', $_REQUEST['titre']);
    $req->bindParam(':annee', $annee);
    $req->bindParam(':description', $_REQUEST['description']);
    $req->bindParam(':realisateur', $_REQUEST['realisateur']);
    $req->execute();
    
    /* Récuperation de l'id du dernier film insérer pour la lier au genre */
    $req = $pdo->prepare("select max(id) as id from film");
    $req->execute();
    $films = $req->fetch();
    foreach($films as $f){
        $film_id = $f;
    }
    $film_id = intval($film_id);
    /*Récuperation des id des genres du film et insertion dans l_film_genre*/
    foreach($tags as $genre){
        $req = $pdo->prepare("select id from genre where nom=:genre");
        $req->bindParam(':genre', $genre);
        $req->execute();
        $genres = $req->fetch();
        foreach($genres as $g){
            $genre_id = $g; 
        }
        $genre_id = intval($genre_id);
        
        $req = $pdo->prepare("insert into l_film_genre(film_id, genre_id) values(:film_id, :genre_id)");
        $req->bindParam(':film_id', $film_id);
        $req->bindParam('genre_id', $genre_id);
        $req->execute();
    }
    echo '<p>Merci de votre contribution</p>';
    header("Refresh:1; url=accueil");
    
}




?>