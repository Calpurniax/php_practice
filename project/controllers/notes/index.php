<?php

use core\Database;

//create an instance for DB
$config= require base_path('config.php');
$db= new Database($config['database']);


$current_user=1;
$query = "select * from notes where author_id = $current_user";

$notes= $db->query($query)->get();


view('notes/index.view.php',[
    'heading' => "My notes",
    'notes'=> $notes
]);