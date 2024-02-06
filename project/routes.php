<?php 

$pathPublic= '/personal/php_practice/project/public/';
return [  
        $pathPublic => 'controllers/index.php',
        $pathPublic.'about'=> 'controllers/about.php',
        $pathPublic.'contact' => 'controllers/contact.php',
        $pathPublic.'notes' => 'controllers/notes/index.php',
        $pathPublic.'notes/show' => 'controllers/notes/show.php',
        $pathPublic.'notes/create' => 'controllers/notes/create.php'
];

