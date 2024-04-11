<?php
function getRecettes(PDO $pdo, int $limit = null)
{
    $sql = 'SELECT * FROM recettes';

    if ($limit) {
        $sql .= "LIMIT :limit";
    }

    $stmt = $pdo->prepare($sql);

    if ($limit) {
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
    }

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

function retourLigne(string $string)
{
    return explode(PHP_EOL, $string);
}
