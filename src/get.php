<?php

use MySQLCrud\MySQLPDO;

require_once '../vendor/autoload.php';

$pdo = new MySQLPDO();
$query = $pdo->getPDO()->query("
    SELECT f.film_id, f.name, f.genre, f.age_rating 
    FROM film AS f
    LEFT JOIN film_actor AS fa USING (`film_id`)
    LEFT JOIN actor AS a ON a.actor_id = fa.actor_id
    LIMIT 0, 10
");
$films = $query->fetchAll(PDO::FETCH_ASSOC);

$filmsWithActors = [];
foreach($films as $film) {
    $query = $pdo->getPDO()->query("
        SELECT a.actor_id, a.name FROM film_actor AS fa
        INNER JOIN actor AS a ON a.actor_id = fa.actor_id
        WHERE film_id = {$film['film_id']}
        LIMIT 0, 10
    ");
    $actors = $query->fetchAll(PDO::FETCH_ASSOC);

    $filmsWithActors[] = array_merge($film, ['actors' => $actors]);
}

echo json_encode($filmsWithActors);