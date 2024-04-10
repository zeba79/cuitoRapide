<?php
require_once './lib/pdo.php';
require_once './lib/recette.php';

if (isset($_GET['id'])) {
    $getId = $_GET['id'];
    $recette = getRecetteById($pdo, $getId);
    # code...
} else {
    echo 'article introuvable';
}

?>
<div class="container">
  <div class="row">
  <div class="col-md-3 my-2 py-3">
      <div class="card" style="width: 18rem;">
      <img src="./uploads/images/<?=$recette['image'];?>" class="card-img-top" alt="<?=$recette['image'];?>">
      <div class="card-body">
        <h1 class="card-title"><?=$recette['nom'];?></h1>
        <p class="card-text"> <h2> Description : </h2> <?=$recette['description'];?></p>
        <p class="card-text"> <h2> Ingredients : </h2> <?=$recette['ingredients'];?></p>
        <p class="card-text"> <h2> Préparation : </h2> <?=$recette['preparation'];?></p>
        <a href="index.php" class="btn btn-primary">Retour accueil</a>
      </div>
    </div>
  </div>
  </div>
</div>