<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld(){

        return "Hello, World!";

    }

    public function createArray()
    {
        $array = [1, 38, 17];

        return $array;

    }

    public function addFunction($a,$b){
        $answer = $a + $b;
        return $answer;

    }
}
