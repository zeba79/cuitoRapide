<?php
function getRecettes(PDO $pdo)
{
    $sql = 'SELECT * FROM recettes';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $recettes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $recettes;
}
