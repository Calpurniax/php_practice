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
            <h2>
                 <?= $message;?> 
                 <!-- esta se la forma corta de echo una variable -->
            </h2> 
           
        </h1>        
    </main>
</body>
</html>