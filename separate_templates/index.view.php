<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de separación</title>
</head>
<body>
    <p>La mayoría de la lógica está en index.php lo que es el HTML "tonto" en index.view.php</p>          
    <ul>          
        <?php foreach ($filteredWithPhp as $item) : ?>                 
            <li>                     
                <span><?= $item['title'];?> de <?= $item['author'];?></span>                   
            </li>                
        <?php endforeach; ?>
    </ul>
</body>
</html>