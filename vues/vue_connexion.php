<?php require_once ('vues/vue_haut.php');
?>

<div class="row">
        <form class="col s12" method="POST" action="http://localhost/access_movies/connexion">
            <div class="row">
                <div class="input-field col s6">
                    <input id="login" type="text" name="pseudo" class="validate" placeholder="Pseudo">
                  <!--<label for="login">Pseudo: </label>-->
                </div>
                <div class="input-field col s6">
                   <input type="password" class="password" id="pass" name="password" placeholder="Mot de passe">
                   <!--<label for="pass">Mot de passe: </label>-->
                </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="waves-effect waves-light btn">Connexion</button>
                </div>
            </div>
            </div>
        </form>
    </div>
      




<?php require_once ('vues/vue_haut.php'); ?>