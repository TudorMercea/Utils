<?php

if (version_compare(PHP_VERSION, '7.4') < 0) {
    throw new \Exception('TMVPHPUtils requires PHP 7.4 or above');
}

if (! class_exists('TMVPHP\Utils\\')) {
    spl_autoload_register(function($class){
        if (0 !== strpos($class, 'TMVPHP\Utils\\')) {
            return;
        }

        $subClass = substr($class, strlen('TMVPHP\Utils\\'));
        $path = __DIR__ . '/src/' . str_replace('\\', '/', $subClass) . '.php';

        if (file_exists($path)) {
            require $path;
        }
    });
}