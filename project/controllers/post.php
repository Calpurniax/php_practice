<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);



$current_author=1;

$post= $db->query("select * from posts where id = :id",[
    'id'=> $_GET['id']
])->fetch();

if(!$post){
    abort(404, $uri);
};
if($post['author_id']!== $current_author){
    abort(403, $uri);
};

$heading = "Post";
require "views/post.view.php";