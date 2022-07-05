<?php

use MySQLCrud\MySQLPDO;

require_once '../vendor/autoload.php';

$name = 'Die Hard';
$newName = 'Die Hard 2';

$pdo = new MySQLPDO();
$pdo->getPDO()->query("
    UPDATE film
    SET `name` = \"{$newName}\"
    WHERE `name` = \"{$name}\"
");