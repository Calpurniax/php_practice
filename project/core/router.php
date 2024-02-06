<?php 

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// var_dump($uri);
// die();

routerController($uri, $routes);