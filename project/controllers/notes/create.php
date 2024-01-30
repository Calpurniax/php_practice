<?php

$heading = "Create a new note";

//create an instance for DB
$config= require "config.php";
$db= new Database($config['database']);


require "Validator.php";



if($_SERVER['REQUEST_METHOD']==='POST'){

    $errors =[];

    if(!Validator::string($_POST['content'],1,1000)){
       $errors['body'] = "Notes should be between 1 and 1000 characters";
    }
    else{
        $db->query('INSERT INTO notes (content, author_id) VALUES
        (:content, :user_id)', [
            'content'=>$_POST['content'],
            'user_id'=>1
        ]);
    }    
}

require "views/notes/create.view.php";