<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);


$current_user=1;
$query = "select * from notes where author_id = $current_user";

$notes= $db->query($query)->get();


$heading = "My notes";
require "views/notes/index.view.php";