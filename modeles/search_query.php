<?php 

function search_query($pdo, $search, $films){
        $bool = false;
        $searchx = $search.'%';
        $searchy = '%'.$search;
        $searched = $pdo->prepare("SELECT film.titre, film.id FROM film WHERE film.titre LIKE :searchx OR :searchy");
        $searched->bindParam(':searchx', $searchx);
        $searched->bindParam(':searchy', $searchy);
        $searched->execute();
        $result = $searched->fetchAll();
        foreach($result as $r){
            $titre_searched = $r['titre'];
        }
        foreach($films as $f){
            if($f['titre'] == $titre_searched){
                header("Refresh:0; url=http://localhost/access_movies/films/".$f['id']."");
                $bool = true;
            }
        }
    return $bool;
    }
?>