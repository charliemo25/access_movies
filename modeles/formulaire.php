<?php

if(empty($_REQUEST['tags']) && empty($_REQUEST['titre']) && empty($_REQUEST['annee']) && empty($_REQUEST['description']) && empty($_REQUEST['realisateur'])){
    
} else {
    
    $envoi = true;

    /*Verification du titre*/
    switch($_REQUEST['titre']){
        case '':
                $envoi = false;
                $erreur['titre'] = "Le titre est vide";
            break;
        default:
                $titre = $_REQUEST['titre'];
                $erreur['titre'] = '';
            break;
    }
    
    /*Verification de l'année*/
    switch($_REQUEST['annee']){
        case '':
                $envoi = false;
                $erreur['annee'] = "L'année est vide";
            break;
        default:
                /*Récupération de la date; Séparation du jour,mois et année*/
                $annee = explode(", ", $_REQUEST['annee']);
                /*Suppresion du jour et du mois*/
                unset($annee[0]);
                /*annee prend la valeur de... l'année*/
                $annee = intval($annee[1]);
                $erreur['annee'] = '';
            break;
    }
    
    /*Verification de la description*/
    switch($_REQUEST['description']){
        case '':
                $envoi = false;
                $erreur['description'] = "La description est vide";
            break;
        default:
                $description = $_REQUEST['description'];
                $erreur['description'] = '';
            break;
    }
    
    /*Verification du réalisateur*/
    switch($_REQUEST['realisateur']){
        case '':
                $envoi = false;
                $erreur['realisateur'] = "Le réalisateur n'est pas renseigné";
            break;
        default:
                $realisateur = $_REQUEST['realisateur'];
                $erreur['realisateur'] = '';
            break;
    }
    
    /*Vérification des genres*/
    switch($_REQUEST['tags']){
        case '':
                $envoi = false;
                $erreur['genre'] = 'Les genres sont vides';
            break;
        default:
                /*Récuperation des genres dans un tableau*/
                $tags = explode("," , $_REQUEST['tags']);
                $erreur['genre'] = '';
            break;
    }
    
    /*Récupération du pseudo*/
    $pseudo = $_SESSION['pseudo'];
    
    if($envoi){
        
        /*Récupération de l'utilisateur*/
        $req = $pdo->prepare("select id from utilisateurs where pseudo=:pseudo");
        $req->bindParam('pseudo', $pseudo);
        $req->execute();
        $pseudo_r = $req->fetch();
        foreach($pseudo_r as $id){
            $pseudo_id = $id;
        }
        $pseudo_id = intval($pseudo_id);
        
        /*Insertion d'un film*/
        $req = $pdo->prepare("insert into film(titre, annee, description, realisateur, id_utilisateur) values(:titre, :annee, :description, :realisateur, :utilisateur)");
        $req->bindParam(':titre', $titre);
        $req->bindParam(':annee', $annee);
        $req->bindParam(':description', $description);
        $req->bindParam(':realisateur', $realisateur);
        $req->bindParam(':utilisateur', $pseudo_id);
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
        header("Refresh:1; url=http://localhost/access_movies/accueil");
        
    } else{
        foreach($erreur as $fail){
            echo '<p>'.$fail.'</p>';
        }
    } 
}

?>