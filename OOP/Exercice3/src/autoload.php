<?php


spl_autoload_register(
    function($file){
        $src = __DIR__ . '/' . $file . '.php';

        if(is_file($src)){
            require_once $src;
        } else {
            echo 'Error';
        }
    }
);
