<?php
/**
 * Created by PhpStorm.
 * User: dima3
 * Date: 21.04.2018
 * Time: 11:39
 */

function __autoload($class_name)
{
    //List all the class directories in the array
    $array_path = array(
        '/models/',
        '/components/'
    );

    foreach ($array_path as $path){
        $path = ROOT.$path.$class_name.'.php';
        if(is_file($path)){
            include_once $path;
        }
    }
}