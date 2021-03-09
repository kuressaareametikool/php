<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld(){
        /// Kirjuta oma kood siia
        return "Hello, World!";
    }

    public function createArray()
    {
        /// Kirjuta oma kood siia#
    $array = [
        "mhm1" => "jah1",
        "mhm2" => "jah2",
        "mhm3" => "jah3",
    ];
      return $array;  
    }

    public function addFunction( int $a, int $b){
        /// Kirjuta oma kood siia
        return $a +$b;
    }
}

?>