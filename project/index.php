<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';

//connect to DB

// $dsn = "mysql:host=localhost;port=3306;dbname=project;user=root;charset=utf8mb4";

// $pdo = new PDO($dsn);
// $statement = $pdo->prepare("select title from posts");
// $statement->execute();

// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
//   dd($posts);

$db= new Database();
$posts= $db->query("select * from posts");

foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
};


