<?php
function getRecettes(PDO $pdo, int $limit = null): array
{
    $sql = 'SELECT * FROM recettes ';

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

function getRecetteById(PDO $pdo, int $getId): array | bool
{
    $sql = 'SELECT * FROM recettes WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $getId);
    $stmt->execute();
    $recette = $stmt->fetch(PDO::FETCH_ASSOC);
    return $recette;
}

//  fonction pour créer les auts de ligne
function retourLigne(string $string)
{
    return explode(PHP_EOL, $string);
}

function getRecetteByImage(string | null $image): string
{
    if ($image == null) {
        $imagePath = IMAGES_RECETTE_PARDEFAUT . "default.jpg";

    } else {
        $imagePath = IMAGES_RECETTE_UPLOADS . htmlentities($image);
    }
    return $imagePath;
}
