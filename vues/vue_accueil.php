       <?php
    
    foreach($pagination[0] as $film){
        
        echo "<h1>".$film['titre']."</h1>";
        
        echo "<p>".$film['annee']."</p>";
        
        echo "<p>".$film['description']."</p>";
        
        echo "<p>".$film['realisateur']."</p>";
        
        echo "<p>";
        foreach($genres as $genre){
            if($film['id'] == $genre['id']){
                echo "<span>".$genre['genre']."</span> ";
            }
        }
        echo "</p>";
    }
    
    echo '<ul class="pagination">Page : ';
    for($i=1; $i<=$pagination[1]; $i++){
        
        if($i==$pagination[2]){
            echo '<li class="active">'.$i.'</li>'; 
        }
        else{
            if(empty($uriarray[3])){
            echo ' <li class="waves-effect"><a href="accueil/'.$i.'">'.$i.'</a></li> ';
            } else {
                echo ' <li class="waves-effect"><a href="'.$i.'">'.$i.'</a></li> ';
            }
        }
    }
    echo '</ul>';
    
    ?>