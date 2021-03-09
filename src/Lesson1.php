<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld(){
        return "Hello, World!";

    }

    public function createArray()
    {
        $array =["joonas"=>"joonas2",
        "joonas3"=>"joonas4",
        "joonas5"=>"joonas6",];
        return $array;

    }

    public function addFunction($a,$b){
        return $a + $b;

    }
}
