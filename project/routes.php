<?php 

$pathPublic= '/personal/php_practice/project/public/';


$router->get($pathPublic,'controllers/index.php');
$router->get($pathPublic.'about', 'controllers/about.php');
$router->get($pathPublic.'contact', 'controllers/contact.php');

$router->get($pathPublic.'notes', 'controllers/notes/index.php');
$router->get($pathPublic.'notes/create', 'controllers/notes/create.php');
$router->post($pathPublic.'notes', 'controllers/notes/store.php');

$router->get($pathPublic.'note/edit', 'controllers/notes/edit.php');
$router->patch($pathPublic.'note', 'controllers/notes/update.php');

$router->get($pathPublic.'note', 'controllers/notes/show.php');
$router->delete($pathPublic.'note', 'controllers/notes/destroy.php');



