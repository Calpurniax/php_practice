<?php

namespace core;

class Validator{

     //al crearlo como static puedes llamarlo sin tener q crear una instancia de la clase
     
    public static function string($value, $min =1, $max= INF){
        $value= trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
   
    
    public static function email($value){
        return filter_var($value,FILTER_VALIDATE_EMAIL);
    }

}