<?php

use Core\Database;
use Core\Validator;
use Core\App;

//create an instance for DB
$db = App::resolve(Database::class);


$current_user=1;

$note= $db->query("select * from notes where id = :id",[
    'id'=> $_POST['id']
])->findOrFail();

authorize($note['author_id']=== $current_user);

$errors=[];

if (!Validator::string($_POST['content'], 1, 1000)) {
    $errors['body'] = "Notes should be between 1 and 1000 characters";
}

if(count($errors)){
    return view("notes/edit.view.php",[
        'heading'=>'Edit note',
        'errors'=>$errors,
        'note'=>$note
    ]);
}

$db->query('update notes set content = :content where id = :id',[
    'id'=>$_POST['id'],
    'content'=>$_POST['content']
]);

header('location: /personal/php_practice/project/public/notes');
die();