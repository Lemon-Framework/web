<?php

use App\Documetation;

function docsPage(String $page)
{
    $page = str_replace("/", DIRECTORY_SEPARATOR, $page);
    return Documetation::page($page);
}
