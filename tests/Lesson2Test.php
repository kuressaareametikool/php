<?php

use Lessons\Lesson2;

it('returns the percentage of the number in correct format', function (){
    expect((new Lesson2())->calcPercentageOf(100, 20))->toBe('20.00 %');
    expect((new Lesson2())->calcPercentageOf(995, 60))->toBe('6.03 %');
    expect((new Lesson2())->calcPercentageOf(9, 23.4))->toBe('260.00 %');
    expect((new Lesson2())->calcPercentageOf(109, 34))->toBe('31.19 %');
});

it( 'calculates the contents of an array', function () {
    $array = [3,6,27,8,4,6,7,54,3,5,6,7,65,4,1,23,12,767,31,64,42,54,94];
    expect((new Lesson2())->calcArray($array))->toBe(1293);
});
