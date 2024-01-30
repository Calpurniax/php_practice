<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);


$current_user=1;
$query = "select * from posts where author_id = $current_user";

$posts= $db->query($query)->get();


$heading = "My posts";
require "views/posts.view.php";