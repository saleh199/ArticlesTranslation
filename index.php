<?php
/**
 * Created by PhpStorm.
 * User: Saleh Saeed
 * Date: 1/23/2016
 * Time: 11:22 PM
 */

require_once "vendor/autoload.php";

$router = new AltoRouter();

$router->map('GET', '/', function(){
    require_once "App/Views/index.php";
}, 'home');

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    die('404 Not Found');
}