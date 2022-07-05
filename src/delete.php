<?php

use MySQLCrud\MySQLPDO;

require_once '../vendor/autoload.php';

$name = 'Die Hard 2';

$pdo = new MySQLPDO();
$pdo->getPDO()->query("
    DELETE FROM film
    WHERE name = \"{$name}\"
");