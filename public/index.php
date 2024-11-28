<?php

use Bdd\Data;
use Core\View;

require_once __DIR__ . '/../vendor/autoload.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$router = new AltoRouter();

// map homepagec
$router->map('GET', '/', function() {
   View::render('pages/home',["title"=>"Antoine Claitte"]);
});

// dynamic named route
$router->map('GET', '/projet/[*:name]', function($name) {
    $data = new  Data();
   $project =  $data->getProjectByUniqueName($name);

    $data = [
        "title"=>"Projet ". preg_replace('/(?<!\s)([A-Z])/', ' $1', $name),
        "project"=>$project
    ];

     View::render("pages/project",$data);
});

// match current request
$match = $router->match();


// call closure or throw 404 status
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {

    View::render('pages/error', [
        "title" => "ERROR"]);
    return;

}
?>