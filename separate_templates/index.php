<?php 

$books2=[
    ['title'=> 'Cumbres borrascosas',
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
],
];


$filteredWithPhp = array_filter($books2, function($book){
    //return $book['year']<='1900';
    //aqui pondrías la condición que prefieras igual que antes, esta es una opción, otra sería
    return $book['author']==='Mary Shelley' || $book['author']==='Alana S. Portero';
    //el AND es con &&
    //return $book['author'] ==='Mary Shelley' && $book['title'] ==='Mathilda';
    
});
require"index.view.php";

?> 