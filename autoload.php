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
        $dirs = array(
            __DIR__ ,
        );
        // go through the directories to find classes
        foreach ($dirs as $dir) {

            $file = $dir . DIRECTORY_SEPARATOR . $part;
            $file = str_replace('Spexial/Rbac','src',$file);
            if (is_readable($file)) {
                require $file;
                return;
            }
        }
    }
);