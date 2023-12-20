<?php
//inladen van models, helpers, controllers

require 'autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'config.php';

session_start();
//connectie maken met DB
$db = new PDO($config['db_connection'] . ':dbname=' . $config['db_database'] . ';host=' . $config['db_host'] . ';port=' . $config['db_port'], $config['db_username'], $config['db_password']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


$user = null;
if(isset($_SESSION['user_id'])) {
    $user = \App\Models\User::find($_SESSION['user_id']);
}


//routes aanmaken
//let op bij het aanmaken, dit werkt top-down. De eerste route die matcht wordt uitgevoerd.
$router = new \Bramus\Router\Router();
$router->setNamespace('\App\Controllers');
//Een url wordt gekoppeld aan een controller met bijhorende method
//Bv '/' wordt gekoppeld aan de index method van de ArticleController
$router->get('/', 'ArticleController@index');
$router->get('/article/add', 'ArticleController@add');
$router->post('/article/save', 'ArticleController@save');
$router->get('/article/(.*)', 'ArticleController@detail');
$router->get('/tags/(.*)', 'ArticleController@index');
$router->get('/user/(\d+)', 'UserController@detail');
$router->get('/login', 'UserController@login');
$router->post('/login', 'UserController@handleLogin');
$router->get('/register', 'UserController@register');
$router->post('/register', 'UserController@handleRegister');
$router->get('/logout', 'UserController@logout');

//Run
$router->run();