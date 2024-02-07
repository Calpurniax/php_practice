<?php

use Core\Database;
use Core\App;

//create an instance for DB
$db = App::resolve(Database::class); //esto es lo mismo que poner 'Core\Database'

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