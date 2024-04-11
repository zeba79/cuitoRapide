<?php
require_once './lib/recette.php';
require_once './templates/header.php';

$recettes = getRecettes($pdo);
?>

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

