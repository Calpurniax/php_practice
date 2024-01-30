<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);



$current_user=1;

$note= $db->query("select * from notes where id = :id",[
    'id'=> $_GET['id']
])->findOrFail();


authorize($note['author_id']=== $current_user);

$heading = "note";
require "views/note.view.php";