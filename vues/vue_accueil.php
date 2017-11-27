    <?php
    
    require_once('vues/vue_haut.php');
echo '<div class="row">
        <div class="col s4 offset-s4">';
echo '<ul class="pagination">Page : ';
    for($i=1; $i<=$pagination[1]; $i++){
        
        if($i==$pagination[2]){
            echo '<li class="waves-effect active"><a href="">'.$i.'</a></li>'; 
        }
        else{
            if(empty($uriarray[3])){
            echo '<li class="waves-effect"><a href="accueil/'.$i.'">'.$i.'</a></li> ';
            } else {
                echo '<li class="waves-effect"><a href="'.$i.'">'.$i.'</a></li> ';
            }
        }
    }
echo '</ul> </div> </div> <div class="row">';
    
    foreach($pagination[0] as $film){
        
        echo '<div class="col m4 z-depth-1"> 
        <div class="card"> 
        <div class="card-image">';
            
            if(empty($uriarray[3])){
                echo '<img src="vues/img/'.$film['id'].'.jpg" alt="Miniature">
                <span style="text-shadow: 1px 1px 1px black;" class="card-title">'.$film['titre'].'</span>
                </div>';
            } else {
                echo '<img src="../vues/img/'.$film['id'].'.jpg" alt="Miniature">
                <span style="text-shadow: 1px 1px 1px black;" class="card-title">'.$film['titre'].'</span>
                </div>';
            }
        if(!isset($uriarray[3])){
            
        echo '<form method="POST" action="films/'.$film['id'].'">
        <button class="view-more btn-floating btn-large halfway-fab waves-effect waves-light green material-icons" name="detail" value="'.$film['titre'].'" type="submit">add</button>
        </form></span>';
            
        } else {
             echo '<form method="POST" action="../films/'.$film['id'].'">
        <button class="view-more btn-floating btn-large halfway-fab waves-effect waves-light green material-icons" name="detail" value="'.$film['titre'].'" type="submit">add</button>
        </form></span>';
        }
        
        echo "<p><b>Année de production:</b> ".$film['annee']."<br>";
        echo "<b>Genre :</b> ";
        foreach($genres as $genre){
            if($film['id'] == $genre['id']){
                echo "<span>".$genre['genre']." </span>";
            }
        }
        echo '</p>
            </div>
             </div>';
             }
        echo '<div class="row">
        <div class="col s4 offset-s4">
        <ul class="pagination">Page :';
    for($i=1; $i<=$pagination[1]; $i++){
        
        if($i==$pagination[2]){
            echo '<li class="waves-effect active"><a href="">'.$i.'</a></li>'; 
        }
        else{
            if(empty($uriarray[3])){
            echo '<li class="waves-effect"><a href="accueil/'.$i.'">'.$i.'</a></li> ';
            } else {
                echo '<li class="waves-effect"><a href="'.$i.'">'.$i.'</a></li> ';
            }
        }
    }
    echo '</ul> </div> </div> </div>';
    require_once ('vues/vue_bas.php');
    ?>