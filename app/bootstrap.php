<?php

spl_autoload_register(function ($className){
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $classFilePath = 'app' . DIRECTORY_SEPARATOR . $className . '.php';
    if(file_exists($classFilePath)){
        include_once $classFilePath;
        return true;
    }
    return false;
});
\core\Route::start();

