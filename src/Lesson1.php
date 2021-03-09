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
        /// Kirjuta oma kood siia
        $array = [
            "key1" => "item1",
            "key2" => "item2",
            "key3" => "item3",
        ];
        return $array;
    }

    public function addFunction($a,$b){
        /// Kirjuta oma kood siia
        return ($a + $b);
    }
}
