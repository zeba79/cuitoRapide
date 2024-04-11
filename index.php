<?php
require_once './lib/config.php';
require_once './lib/recette.php';
require_once './templates/header.php';

$recettes = getRecettes($pdo, HOME_PAGE_RECETTES_LIMIT);
?>

<div class="container">
    <h1 class="shadow-none p-3 mb-5 bg-body-tertiary rounded text-center" >Bienvenue sur notre page Cuistorapide !</h1>
  <div class="row">
<div class="container">
  <div class="row">
<?php
foreach ($recettes as $key => $recette) {
    require './templates/recette_partial.php';
}
?>


  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
require_once './templates/footer.php';
?>

