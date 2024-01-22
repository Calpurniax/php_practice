<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <main>
        <h1>
            <?php 
                $test = "prueba";
                echo $test ." "."concatenando"; 
                echo " $test concatenando" //esto siempre con " " nunca con ' ' 
            ?>
        </h1> 
            <?php 
                $name = "dune";
                //ejemplo de condicional
                $read = false;   
                if($read){
                    $message = "guay, te leiste $name";
                }else{
                    $message ="vaya, aún no te leiste $name";
                }    
            ?>  
            <h3>
                 <?= $message;?> 
                 <!-- esta se la forma corta de echo una variable -->
            </h3> 
            <h2> Pruebas con array</h2>
            <!-- ejemplo con arrays -->
            <?php $books=["Cumbres borrascosas", "Frankenstein", "La mala costumbre"] ?>
            <ul>
                <?php foreach ($books as $book){
                    echo "<li>{$book},</li>"; //las {} se usan para separar el nombre de la variable exactamente, puedes poner algo a continuación y sabe que no forma parte del nombre de la variable
                }
                ?>            
            </ul>
            <!-- atajo para los bucles -->
            <ul>
                <?php foreach ($books as $book) : ?>
                    <li><?= $book ?></li>
                <?php endforeach;?>
            </ul>
            <!-- mas cosas de arrays -->
            <p> un libro solo: 
                <?= $books[1]?>
            </p>
            <h2>Prueba con array asociativo</h2>
            <?php
            //associative array
            $books2=[
                [
                    'title'=> 'Cumbres borrascosas',
                    'author'=>'Emily Brontë',
                    'year'=>'1847'
                ],
                [
                    'title'=>'Frankenstein',
                    'author'=>'Mary Shelley',
                    'year'=>'1818'
                ],
                [
                    'title'=>'Mathilda',
                    'author'=>'Mary Shelley',
                    'year'=>'1819'
                ],
                [
                    'title'=>'Mathilda',
                    'author'=>'Roald Dahl',
                    'year'=>'1988'
                ],
                [
                    'title'=>'La mala costumbre',
                    'author'=>'Alana S. Portero',
                    'year'=>'2023'
                ]
                ];
          
            ?>
            <?php foreach ($books2 as $book) : ?>
                <li> 
                    <!-- tiene que ser un < ? = por cosa que quieras que se imprima -->
                         <span><?= $book['title'];?> de <?= $book['author'];?></span>                   
                    </li>
            <?php endforeach; ?>  
            <p></p>
            <!-- funciones           --> 
            <?php 
              function filterByAuthor($books2){
                $filteredBooks =[];
                foreach ($books2 as $book){
                    if($book['author']==='Mary Shelley'){
                        $filteredBooks[]=$book;
                    }
                }
                return $filteredBooks;
                };
            ?>

            <!-- un condicional sin función -->
            <p>Dos ejemplos de filtro uno con función y otro sin</p>
            <?php foreach ($books2 as $book) : ?>
                 <?php if ($book['author'] === 'Mary Shelley') : ?>
                    <li>                     
                        <span><?= $book['title'];?> de <?= $book['author'];?></span>                   
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
                    <!-- un poco más sofisticado -->
            <?php foreach (filterByAuthor($books2) as $book) : ?>                 
                    <li>                     
                        <span><?= $book['title'];?> de <?= $book['author'];?></span>                   
                    </li>                
            <?php endforeach; ?>
            <p> ejemplo sencillo de pintar algo que te devuelve una función: declaras una q sea un return de un string y luego la llamas a la funcion con () y la parte de php de "echo"</p>
            <?php function printString(){return "hola que tal";};?>
            <?= printString() ?>

            <p>Si usamos los filtros como parámetros de la función también, sería algo así</p>
            <?php 
              function filterByYear($books2, $year){
                $filteredBooks2 =[];
                foreach ($books2 as $book){
                    if($book['year']===$year){
                        $filteredBooks2[]=$book;
                    }
                }
                return $filteredBooks2;
                };
            ?>
            
            <?php foreach (filterByYear($books2, '2023') as $book) : ?>                 
                    <li>                     
                        <span><?= $book['title'];?> de <?= $book['author'];?></span>                   
                    </li>                
            <?php endforeach; ?>
            <p>Creamos una función anónima alojada en una variable:</p>
            <?php
            $filteredByAuthor = function ($books, $author){
                $filteredBooks=[];
                foreach ($books as $book){
                    if($book['author']===$author){
                        $filteredBooks[]=$book;
                    }
                }
                return $filteredBooks;
            };
            $refilterBooks=$filteredByAuthor($books2, 'Emily Brontë')
            ?>
            <ul>
                <?php foreach ($refilterBooks as $book) : ?>                 
                    <li>                     
                        <span><?= $book['title'];?> de <?= $book['author'];?></span>                   
                    </li>                
                <?php endforeach; ?>
            </ul>
            <p>Refactorizando:</p>
            <?php
            function filter($items, $key, $value){
                $filteredItems =[];
                foreach ($items as $item){
                    if($item[$key]===$value){
                        $filteredItems[]=$item;
                    }
                };
                return $filteredItems;
            }
            $genericFilter = filter($books2, 'title', 'Frankenstein')
            ?>
            <ul>          
                <?php foreach ($genericFilter as $item) : ?>                 
                    <li>                     
                        <span><?= $item['title'];?> de <?= $item['author'];?></span>                   
                    </li>                
                <?php endforeach; ?>
            </ul>
            <p>Refactorizando v2:</p>
            <?php
            function filter2($items, $function){
                $filteredItems =[];
                foreach ($items as $item){
                    if($function($item)){
                        $filteredItems[]=$item;
                    }
                };
                return $filteredItems;
            }
            $genericFilter2 = filter2($books2, function($book){
                return $book['title']=== 'Frankenstein';
                // esta linea estaba antes dentro de la fncion, ahora se lo mandarías al llamarla con lo cual es mucho más sencillo todo
            })
            ?>
            <ul>          
                <?php foreach ($genericFilter2 as $item) : ?>                 
                    <li>                     
                        <span><?= $item['title'];?> de <?= $item['author'];?></span>                   
                    </li>                
                <?php endforeach; ?>
            </ul>
            <p>Refactorizando con función específica para arrays, te quitarías crear toda la función anónima anterior</p>
            <?php 
            $filteredWithPhp = array_filter($books2, function($book){
                //return $book['year']<='1900';
                //aqui pondrías la condición que prefieras igual que antes, esta es una opción, otra sería
                return $book['author']==='Mary Shelley' || $book['author']==='Alana S. Portero';
                //el AND es con &&
                //return $book['author'] ==='Mary Shelley' && $book['title'] ==='Mathilda';
                
            })
            ?>
            <ul>          
                <?php foreach ($filteredWithPhp as $item) : ?>                 
                    <li>                     
                        <span><?= $item['title'];?> de <?= $item['author'];?></span>                   
                    </li>                
                <?php endforeach; ?>
            </ul>

            <p>Interesante en cualquier situacion para debugear es crear una función que te lea una variable o una variable global y luego tenga un die() que hace que no se ejecute nada más después de esa función</p>
            <?php
            function dd($value){
                echo "<pre>";
                var_dump($value);
                echo "</pre>";
                die();
            };            
            ?>
                   
    </main>
</body>
</html>