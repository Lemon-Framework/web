<?php

namespace App;

use App\Lib\Parsedown;
use Lemon\Http\Response;

class Documetation
{

    public static $storage_dir = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "storage" . DIRECTORY_SEPARATOR . "documentation";

    public static function update()
    {
        $storage_dir = self::$storage_dir;
        exec("rm -rf $storage_dir");
        exec("git clone https://github.com/Lemon-Framework/docs {$storage_dir}");
        exec("git pull --all");
    }

    public static function page(String $name)
    {
        $file = self::$storage_dir . DIRECTORY_SEPARATOR . $name . ".md";
        if (!is_file($file))
            return Response::raise(404);

        $content = file_get_contents($file);
        $parsedown = new Parsedown();
        return $parsedown->text($content); 
    }
}
