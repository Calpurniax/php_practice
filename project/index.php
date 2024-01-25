<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';

//createan instance for DB

$db= new Database();
$posts= $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);

dd($posts);
// foreach ($posts as $post){
//     echo "<li>".$post['title']."</li>";
// };


