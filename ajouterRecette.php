
<?php
require_once './lib/recette.php';
require_once './templates/header.php';

?>
<div class="container">
<h1>Formulaire d'ajout recettes</h1>
<form action="" method="post">
                <div class="mb-3">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control"required >
        </div>

        <div class="mb-3">
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"required ></textarea>
        </div>
        <div class="mb-3">
            <label for="ingredients">Ingredients :</label>
            <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="preparation">Préparation :</label>
            <textarea name="preparation" id="preparation" cols="30" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="Image">Image :</label>
            <input type="file" name="Image" id="Image" class="form-control" required >
        </div>

        <div class="mb-3">
            <input type="submit" name="ajoutVehicules" value="Ajouter véhicule" onclick=" return confirm('Êtes-vous sûr de vouloir ajouter un véhicule ?')" class="parrotbtn" >
        </div>

</form>
</div>


<?php
require_once './templates/footer.php';
?>
