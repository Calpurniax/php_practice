<?php

use core\Database;

//create an instance for DB
$config= require base_path('config.php');
$db= new Database($config['database']);

$current_user=1;

$note= $db->query("select * from notes where id = :id",[
    'id'=> $_POST['id']
])->findOrFail();


authorize($note['author_id']=== $current_user);

$db->query("delete from notes where id = :id",[
    'id'=> $_POST['id']
]);

header('location: /personal/php_practice/project/public/notes');
exit();