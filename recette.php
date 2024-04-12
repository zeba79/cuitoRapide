<?php
require_once './lib/pdo.php';
require_once './lib/config.php';
require_once './lib/recette.php';
require_once './templates/header.php';

if (isset($_GET['id'])) {
    $getId = $_GET['id'];
    $recette = getRecetteById($pdo, $getId);
} else {
    echo 'article introuvable';
}
$imagePath = getRecetteByImage($recette['image']);

if ($recette) {
    $ingredients = retourLigne($recette['ingredients']);
    $preparations = retourLigne($recette['preparation']);
}

?>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=$imagePath;?>" class="card-img-top" alt="<?=$recette['nom'];?>">
      </div>
      <div class="col-lg-6">
      <div class="card-body">
        <h1 class="card-title"><?=$recette['nom'];?></h1>
        <h2> Description : </h2>
        <p class="card-text"><?=$recette['description'];?></p>
        <h2> Ingredients : </h2>

        <ul class="list-group ">
        <?php foreach ($ingredients as $key => $ingredient) {?>
            <li class="list-group-item">
                <?=$ingredient;?>
            </li>
        <?php }?>
        </ul>

        <h2> Préparation : </h2>
        <ol class="list-group list-group-numbered">

        <?php foreach ($preparations as $key => $preparation) {?>
            <li class="list-group-item">
                <?=$preparation;?>
            </li>
        <?php }?>
        </ol>
        <a href="index.php" class="btn btn-primary">Retour accueil</a>
      </div>
      </div>
    </div>
  </div>
<div class="container">
  <div class="row">
  <div class="col-md-3 my-2 py-3">
      <div class="card" style="width: 18rem;">

    </div>
  </div>
  </div>
</div>

<?php
require_once './templates/footer.php';
?>