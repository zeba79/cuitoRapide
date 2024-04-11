
<?php
require_once './lib/config.php';
require_once './lib/recette.php';
require_once './templates/header.php';

$recettes = getRecettes($pdo);
?>

<div class="container">
    <h1 class="shadow-none p-3 mb-5 bg-body-tertiary rounded" >Une recettes vous tente ? Alors vous êtes à la bonne page</h1>
  <div class="row">
<?php
foreach ($recettes as $key => $recette) {
    require './templates/recette_partial.php';
}

?>

<?php
require_once './templates/footer.php';
?>
