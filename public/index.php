<?php

use Core\View;
require_once __DIR__ . '/../vendor/autoload.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$router = new AltoRouter();

// map homepage
$router->map('GET', '/', function() {
   View::render('pages/home',["title"=>"Antoine Claitte"]);
});

// dynamic named route
$router->map('GET', '/projet/[*:name]/', function($name) {
     View::render("pages/project",["title"=>"Projet ".$name]);
});

// match current request
$match = $router->match();


// call closure or throw 404 status
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {

    View::render('pages/error', [
        "routeToFind" => ""]);
    return;

}
?>