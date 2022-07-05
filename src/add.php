<?php

use MySQLCrud\MySQLPDO;

require_once '../vendor/autoload.php';

$name = 'Die Hard 3';
$genre = 'Action';
$ageRating = 18;

$pdo = new MySQLPDO();
$pdo = $pdo->getPDO();

$query = $pdo->prepare("
    INSERT INTO film
    (film_id, name, genre, age_rating)
    VALUES(33, :name, :genre, :ageRating)
");
$query->bindParam(':name', $name, PDO::PARAM_STR);
$query->bindParam(':genre', $genre, PDO::PARAM_STR);
$query->bindParam(':ageRating', $ageRating, PDO::PARAM_INT);
$query->execute();