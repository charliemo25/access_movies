    <?php
    
    require_once ('vues/vue_haut.php');

    
    foreach($detail_film as $f){
        
        echo "<h2>".$f['titre']."</h2>";
        
        echo '<img class="img-small" src="http://localhost/access_movies/img/'.$f['id'].'.jpg" alt="Miniature de '.$f['titre'].'"><br>';
        
        echo "<b>Genre:</b> ";
        foreach($genres as $g){
            if($f['id'] == $g['id']){
                echo "<span>".$g['genre']."</span> ";
            }
        }
        echo "<br><span class='realisateur'><b>Réalisateur:</b> ".$f['realisateur']."</span>";
        foreach($user as $u){
            if($u['titre'] == $f['titre']){
                echo "<br><span class='user'><b>Ajouté par:</b> ".$u['pseudo']."</span>";
            }
        }
        echo "<p class='flow-text'><b>Synopsis:</b> <br>".$f['description']."</p>";
        
    }
        echo '<form method="POST" action="javascript:history.back()">
        <button class="btn waves-effect waves-light blue material-icons" type="submit">arrow_back</button>
        </form>';
    require_once ('vues/vue_bas.php');
    ?>