<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// var_dump($uri);
// die();
$routes=[
    '/personal/php_practice/project/' => 'controllers/index.php',
    '/personal/php_practice/project/about' => 'controllers/about.php',
    '/personal/php_practice/project/contact' => 'controllers/contact.php'
];


routerController($uri, $routes);