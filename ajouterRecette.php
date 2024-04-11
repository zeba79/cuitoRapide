
<?php
require_once './lib/recette.php';
require_once './templates/header.php';

?>

<?php
$messages = [];
$errors = [];
if (isset($_POST["ajouterRecette"])) {
    if (!empty($_POST["image"]) && !empty($_POST["nom"]) && !empty($_POST["description"])
        && !empty($_POST["ingredients"]) && !empty($_POST["preparation"])) {
        $image = htmlentities($_POST["image"]);
        $nom = htmlentities($_POST["nom"]);
        $description = nl2br(htmlentities($_POST["description"]));
        $ingredients = nl2br(htmlentities($_POST["ingredients"]));
        $preparation = nl2br(htmlentities($_POST["preparation"]));

        $inserrerRecette = " INSERT INTO
        recettes (image, nom, description, ingredients , preparation)
        VALUES (:image, :nom, :description, :ingredients , :preparation)";

        $stmt = $pdo->prepare($inserrerRecette);
        $stmt->bindValue(":image", (string) $image);
        $stmt->bindValue(":nom", (string) $nom);
        $stmt->bindValue(":description", (string) $description);
        $stmt->bindValue(":ingredients", (string) $ingredients);
        $stmt->bindValue(":preparation", (string) $preparation);
        $stmt->execute();
        $messages[] = "La recette a bien été ajoutée dans la base de données";
    } else {
        $errors[] = "Veuillez remplir les champs ....";

    }

}
?>
<?php
foreach ($messages as $message) {?>
<div class="alert alert-success mt-3"><?=$message;?></div>
<?php }?>
<?php
foreach ($errors as $error) {?>
<div class="alert alert-danger mt-3"><?=$error;?></div>
<?php }?>

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
            <label for="image">Image :</label>
            <input type="file" name="image" id="image" class="form-control"  >
        </div>

        <div class="mb-3">
            <input type="submit" name="ajouterRecette" value="Ajouter recette" onclick=" return confirm('Êtes-vous sûr de vouloir ajouter cette recette ?')" class="parrotbtn" >
        </div>

</form>
</div>


<?php
require_once './templates/footer.php';
?>
