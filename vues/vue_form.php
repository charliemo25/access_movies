    <?php require_once ('vues/vue_haut.php'); ?>
      <h2>Ajouter un film : </h2>
       <div class="row">
        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input id="titre" type="text"  name="titre" class="validate">
                    <label for="titre">Titre</label>
                </div>
                <div class="input-field col s6">
                   <input type="text" class="datepicker" id="annee" name="annee" placeholder="Sélectionner une année">
                </div>
                <div class="input-field col s12">
                    <textarea id="Description"  name="description" class="materialize-textarea"></textarea>
                    <label for="description">Description</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="realisateur" name="realisateur" type="text" class="validate">
                    <label for="Réalisateur">Réalisateur</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="chips chips-autocomplete"></div>
                    <input type="hidden" id="tags" name="tags" value="">
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="waves-effect waves-light btn">AJOUTER UN FILM</button>
                </div>
            </div>
        </form>
    </div>
    
   <?php require_once ('vues/vue_bas.php'); ?>