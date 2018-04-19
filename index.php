<?php
/**
 * display errors
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * connecting Router
 */
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
include ROOT.'/components/Db.php';

$rout = new Router;

$rout->run();

function dd($value = null, $die = 1){
    echo 'Debug:<br><pre>';
    print_r($value);
    echo '</pre>';

    if($die) die;
}