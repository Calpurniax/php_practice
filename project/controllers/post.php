<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);



$current_user=1;

$post= $db->query("select * from posts where id = :id",[
    'id'=> $_GET['id']
])->fetch();

if(!$post){
    abort(Response::NOT_FOUND, $uri);
};
if($post['author_id']!== $current_user){
    abort(Response::FORBIDDEN, $uri);
};

$heading = "Post";
require "views/post.view.php";