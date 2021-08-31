<?php

echo "Installing";

exec("composer install");

require "public/index.php";

use App\Documetation;

Documetation::update();

echo "Done, to start, type `php lemonade serve`";
