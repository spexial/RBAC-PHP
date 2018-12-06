<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 下午3:43
 */
spl_autoload_register(
    function($class)
    {
        // a partial filename
        $part = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        // directories where we can find classes

        $file = __DIR__ . DIRECTORY_SEPARATOR . $part;
        $file = str_replace('Spexial/Rbac','src',$file);
        if (is_readable($file)) {
            return require $file;

        }
    }
);