<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld(){
        return "Hello World!";

    }

    public function createArray()
    {
        $array = [
            "key1" => "item1",
            "key2" => "item2",
            "key3" => "item3",
        ];
        return $array;
    }

    public function addFunction( int $a, int $b){
        return $a + $b;
    }
}
