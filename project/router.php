<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// var_dump($uri);
// die();
$routes=[
    '/personal/php_practice/project/' => 'controllers/index.php'
];


if(array_key_exists($uri, $routes)){  
    require $routes[$uri];
}
else{
    http_response_code(404);
    var_dump($uri);
    die();  
}