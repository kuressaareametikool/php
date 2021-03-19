<?php

namespace Lessons;

class Lesson1
{
    public function helloWorld()
    {
        return "Hello, World!";
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
