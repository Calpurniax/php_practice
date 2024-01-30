<?php

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(strlen($_POST['content'])>0){
        $db->query('INSERT INTO notes (content, author_id) VALUES
    (:content, :user_id)', [
        'content'=>$_POST['content'],
        'user_id'=>1
    ]);
    }
    // dd($_POST);
    
}

// INSERT INTO `notes` (`content`, `author_id`) VALUES
// ('la la la', 1) esta funciona


$heading = "Create a new note";
require "views/note-create.view.php";