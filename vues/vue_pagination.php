<?php
    
    require_once('vues/vue_haut.php');
echo '<div class="row">
        <div class="col s4 offset-s4 center">';
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
     
        if(intval($film['id']) > 39){
            echo '<img class="miniature" src="http://localhost/access_movies/img/void.jpg" alt="Miniature">
                <span style="text-shadow: 1px 1px 1px black;" class="card-title titre z-depth-3">'.$film['titre'].'</span>
                </div>';
        } else{
            echo '<img class="miniature" src="http://localhost/access_movies/img/'.$film['id'].'.jpg" alt="Miniature">
                <span style="text-shadow: 1px 1px 1px black;" class="card-title titre z-depth-3">'.$film['titre'].'</span>
                </div>';
        }
             if($_SESSION['pseudo'] == "admin"){
                 echo ' <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a href="http://localhost/access_movies/delete/'.$film['id'].'" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></li>
      <li><a href="http://localhost/access_movies/edit/'.$film['id'].'" class="btn-floating waves-effect waves-light yellow darken-1"><i class="material-icons">mode_edit</i></a></li>
      <li><a href="http://localhost/access_movies/films/'.$film['id'].'" class="btn-floating waves-effect waves-light" value="'.$film['titre'].'"><i class="material-icons">remove_red_eye</i></a></li>
    </ul>
  </div></span>';
             } else {
                 echo '<form method="POST" action="http://localhost/access_movies/films/'.$film['id'].'">
            <button class="view-more btn-floating btn-large halfway-fab waves-effect waves-light material-icons" name="detail" value="'.$film['titre'].'" type="submit">remove_red_eye</button>
            </form></span>';
             }
            echo '</div>
             </div>';
             }
        echo '<div class="row">
        <div class="col s4 offset-s4 center">
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
