<?php
function getRecettes(PDO $pdo)
{
    $sql = 'SELECT * FROM recettes';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $recettes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $recettes;
}

function getRecetteById(PDO $pdo, int $getId)
{
    $sql = 'SELECT * FROM recettes WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $getId);
    $stmt->execute();
    $recette = $stmt->fetch(PDO::FETCH_ASSOC);
    return $recette;
}
