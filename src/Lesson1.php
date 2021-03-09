<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld(){
        echo "Hello World!";

    }

    public function createArray()
    {
        $cars = array (
            "Nissan", "Toyota", "škoda"
        )
        echo $cars
    }

    public function addFunction( int $a, int $b){
        return $a + $b
    }
    echo addFunction(5, 10);
}
