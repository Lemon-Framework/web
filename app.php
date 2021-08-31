<?php

use Lemon\Kernel\Application;

/**
 * Initializes whole application
 */
$app = new Application(__DIR__);

/**
 * Setting folders to load
 */
$app->load(
    "routes",
    "app"
    // Here you can type other folders that will be required
);

// Optional-Setting view folder
// $app->views("new_folder")

return $app;


?>
