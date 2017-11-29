<?php
    
    require_once('vues/vue_haut.php');
echo '<div class="row">
        <div class="col s4 offset-s4">';
echo '<ul class="pagination">';
    for($i=1; $i<=$pagination[1]; $i++){
        
        if($i==$pagination[2]){
            echo '<li class="waves-effect green darken-2 active"><a href="">'.$i.'</a></li>'; 
        }
        else{
            echo '<li class="waves-effect"><a href="http://localhost/access_movies/accueil/'.$i.'">'.$i.'</a></li> ';
        }
    }
echo '</ul> </div> </div> <div class="row">';
    
    foreach($pagination[0] as $film){
        
        echo '<div style="margin-bottom: 30px;" class="col m4"> 
        <div class="card"> 
        <div class="card-image">';
            

                echo '<img src="http://localhost/access_movies/img/'.$film['id'].'.jpg" alt="Miniature">
                <span style="text-shadow: 1px 1px 1px black;" class="card-title">'.$film['titre'].'</span>
                </div>';
                
        echo '<form method="POST" action="http://localhost/access_movies/films/'.$film['id'].'">
        <button class="view-more btn-floating btn-large halfway-fab waves-effect waves-light green material-icons" name="detail" value="'.$film['titre'].'" type="submit">remove_red_eye</button>
        </form></span>';
        
            echo '</div>
             </div>';
             }
        echo '<div class="row">
        <div class="col s4 offset-s4">
        <ul class="pagination">';
    for($i=1; $i<=$pagination[1]; $i++){
        
        if($i==$pagination[2]){
            echo '<li class="waves-effect green darken-2 active"><a href="">'.$i.'</a></li>'; 
        }
        else{
            echo '<li class="waves-effect"><a href="http://localhost/access_movies/accueil/'.$i.'">'.$i.'</a></li> ';
        }
    }
    echo '</ul> </div> </div> </div>';
    require_once ('vues/vue_bas.php');
    ?>
