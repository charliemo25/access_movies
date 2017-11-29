    <?php require_once ('vues/vue_haut.php'); ?>
       <div class="row">
        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input id="nom" type="text"  name="nom" class="validate">
                    <label for="nom">Nom</label>
                </div>
                <div class="input-field col s6">
                    <input id="prenom" type="text"  name="prenom" class="validate">
                    <label for="prenom">Prenom</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="pseudo" name="pseudo" type="text" class="validate">
                    <label for="pseudo">Pseudo</label>
                </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                    <input id="mdp" name="mdp" type="password" class="validate">
                    <label for="mdp">Mot De Passe</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="waves-effect waves-light btn">S'ENREGISTRER</button>
                </div>
            </div>
        </form>
    </div>
    
   <?php require_once ('vues/vue_bas.php'); ?>