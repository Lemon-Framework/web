<?php

/**
 *
 * Lemon Framework
 *
 * This file takes all requests and returns valid response using the booter.php
 *
 *
 */

require __DIR__ . "/../vendor/autoload.php";

use Lemon\Utils\Env;

Env::setPath(__DIR__."/..");

$app = require __DIR__ . "/../app.php";

$app->boot();


?>
