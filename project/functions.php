<?php

function dd ($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
};

function urlIs($value){
    return $_SERVER['REQUEST_URI']=== $value;
}

function abort($code, $uri){
    http_response_code($code);
    if($code === 404){
        require "views/404.php";
       
    }
    else  dd($uri);
}

function routerController($uri, $routes){
    if(array_key_exists($uri, $routes)){  
        require $routes[$uri];
    }
    else{
        abort(404, $uri);
    }
}