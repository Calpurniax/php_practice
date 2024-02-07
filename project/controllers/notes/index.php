<?php

use Core\Database;
use Core\App;

//create an instance for DB
$db = App::resolve(Database::class);


$current_user=1;
$query = "select * from notes where author_id = $current_user";

$notes= $db->query($query)->get();


view('notes/index.view.php',[
    'heading' => "My notes",
    'notes'=> $notes
]);