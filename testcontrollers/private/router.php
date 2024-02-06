<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes =[
    '/personal/php_practice/testcontrollers/public/' => '/../public/index.php',
    '/personal/php_practice/testcontrollers/public/test' => 'controllers/test.php',
    '/personal/php_practice/testcontrollers/public/other' => 'controllers/another_controller.php'
];



if(array_key_exists($uri, $routes)){  
    require $routes[$uri];
}else{
    var_dump($uri);
    die();
}