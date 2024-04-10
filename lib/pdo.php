<?php
try {
    $pdo = new PDO ('mysql:host=localhost;dbname=cuistorapide;', 'root', '');

} catch (PDOException $e) {
    echo 'Erreur de connexion à la base de données' . $e->getMessage();
}
