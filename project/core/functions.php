<?php


use core\Response;


function dd ($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
};

function urlIs($value){
    return $_SERVER['REQUEST_URI']=== $value;
}

function abort($code){
    http_response_code($code);    
    require base_path("views/$code.php");
}

// function routerController($uri, $routes){
//     if(array_key_exists($uri, $routes)){  
//         require base_path($routes[$uri]);
//     }
//     else{
//         abort(404);
//     }
// }

function authorize ($condition, $response = Response::FORBIDDEN){
    if(!$condition){
        abort($response);
    };
}

function base_path($path){
    return BASE_PATH.$path;
}

function view($path, $attributes=[]){
    extract($attributes);
    require base_path('views/'.$path);
}