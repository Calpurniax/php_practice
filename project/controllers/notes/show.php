<?php

use Core\Database;
use Core\App;

//create an instance for DB
$db = App::resolve(Database::class);


$current_user=1;

$note= $db->query("select * from notes where id = :id",[
    'id'=> $_GET['id']
])->findOrFail();


authorize($note['author_id']=== $current_user);

view('notes/show.view.php',[
    'heading' => "Show a note",
    'note'=> $note
]);