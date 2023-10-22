<?php

require __DIR__ . '../vendor/autoload.php';

require __DIR__ . '../src/routes.php';

require __DIR__ . '../src/config.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Helpers\Route;

Route::handle($_SERVER['PHP_SELF']);
