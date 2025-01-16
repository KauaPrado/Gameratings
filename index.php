<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\GameController;
use Config\Database;
$pdo = Database::connect();

$controller = new GameController($pdo);
// $controller->index();

