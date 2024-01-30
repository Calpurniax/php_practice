<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);

if($_SERVER['REQUEST_METHOD']==='POST'){
    // dd($_POST);
    $db->query('INSERT INTO notes (content, author_id) VALUES
    (:content, :user_id)', [
        'content'=>$_POST['content'],
        'user_id'=>1
    ]);
}

// INSERT INTO `notes` (`content`, `author_id`) VALUES
// ('la la la', 1) esta funciona


$heading = "Create a new note";
require "views/note-create.view.php";