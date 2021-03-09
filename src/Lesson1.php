<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld()
    {
        echo "Hello world!";
    }

    public function createArray()
    {
        $array = [1, 2, 3];
        return $array;
    }

    public function addFunction($a, $b)
    {
        return $a + $b;
    }
}
