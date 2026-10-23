<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
 
require_once __DIR__ . '/app/core/Router.php';
require_once __DIR__ . '/app/controllers/HomeController.php';
require_once __DIR__ . '/app/controllers/GenreController.php';
require_once __DIR__ . '/app/controllers/AuthorController.php';
 
$router = new Router();
$router->add('home', 'HomeController', 'index');
$router->add('genres', 'GenreController', 'index');
$router->add('authors', 'AuthorController', 'index');
$router->dispatch($_GET['route'] ?? 'home');
