<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cancoicode Movies</title>
</head>
<body>
   
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
    
    echo '<p class="text-center">Page : ';
    for($i=1; $i<=$pagination[1]; $i++){
        
        if($i==$pagination[2]){
            echo $i; 
        }
        else{
            if(empty($uriarray[3])){
            echo ' <a href="accueil/'.$i.'">'.$i.'</a> ';
            } else {
                echo ' <a href="'.$i.'">'.$i.'</a> ';
            }
        }
    }
    echo '</p>';
    
    ?>
    
</body>
</html>