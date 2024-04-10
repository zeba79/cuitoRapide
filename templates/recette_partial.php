<div class="col-md-3 my-2 py-3">
      <div class="card" style="width: 18rem;">
      <img src="./uploads/images/<?=$recette['image'];?>" class="card-img-top" alt="<?=$recette['image'];?>">
      <div class="card-body">
        <h2 class="card-title"><?=$recette['nom'];?></h2>
        <p class="card-text"> <?=$recette['description'];?></p>
        <a href="./recette.php?id=<?=$recette['id'];?>" class="btn btn-primary">Voir la recette</a>
      </div>
    </div>
  </div>
