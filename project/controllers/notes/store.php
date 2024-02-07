<?php

use Core\Database;
use Core\Validator;
use Core\App;

//create an instance for DB
$db = App::resolve(Database::class);

$errors =[];

if($_SERVER['REQUEST_METHOD']==='POST'){    

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

header('location: /personal/php_practice/project/public/notes');
exit();