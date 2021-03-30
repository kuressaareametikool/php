<?php

namespace Lessons;

use InvalidArgumentException;

class Lesson
{
    public function render(string $a, string $b)
    {
        if (strlen($a)!==strlen($b)){
            throw new InvalidException("DNA strands must be of equal length.");
        }
        $solution = count
        $answer = count(array_diff_assoc(str_split($a),str_split($b)
    }
