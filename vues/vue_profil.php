<?php
require_once ('vues/vue_haut.php');

echo '<h1>'.$_SESSION['nom'].' '.$_SESSION['prenom'].'</h1>';
echo '<i class="material-icons left">account_box</i><p>'.$_SESSION['pseudo'].'</p>';
echo "<h3>Vos Ajouts</h3>";
echo "<div class='row'>";
echo "<div class='carousel'>";

foreach($films_user as $user){
    foreach($liste_films as $f){
        
        if($f['id'] == $user['id']){
            if(intval($f['id']) > 39){
                echo '<a class="carousel-item" href="http://localhost/access_movies/films/'.$f['id'].'"><img src="http://localhost/access_movies/img/void.jpg"></a>';
            } else {
                echo '<a class="carousel-item" href="http://localhost/access_movies/films/'.$f['id'].'"><img src="http://localhost/access_movies/img/'.$f['id'].'.jpg"></a>';
            }
        }
    }    
}
echo "</div>";
echo "</div>";
?>
<div class="row">
        <form class="col s12" method="POST">
            <div class="row">
               <h2>Changement de mot de passe: </h2>
                <div class="input-field col s12">
                    <input type="password" id="mdp_ancien"  name="mdp_ancien" class="materialize-textarea">
                    <label for="mdp_ancien">Veuillez taper votre mot de passe:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" id="mdp"  name="mdp" class="materialize-textarea">
                    <label for="mdp">Veuillez taper votre nouveau mot de passe:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" id="mdp2"  name="mdp2" class="materialize-textarea">
                    <label for="mdp2">Veuillez retaper votre nouveau mot de passe:</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="waves-effect waves-light btn">Changer de mot de passe</button>
                </div>
            </div>
        </form>
    </div>




<?php require_once ('vues/vue_bas.php'); ?>