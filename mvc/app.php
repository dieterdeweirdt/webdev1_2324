<?php
include 'Models/News.php';


$uri = $_SERVER['REQUEST_URI'];

$uri_info = explode("/", $uri);
print_r($uri_info);
$controller = ucfirst($uri_info[1]) . "Controller";
$method = $uri_info[2] ?? '';
if(!$method) {
    $method = 'index';
}
$parameter = $uri_info[3] ?? '';

echo $method;
//echo $controller;

include "Controllers/" . $controller . ".php";

$controller = new NewsController();
$controller->$method($parameter);




