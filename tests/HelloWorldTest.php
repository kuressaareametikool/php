<?php

use Lessons\Lesson1;


it('home returns hello world', function () {
    expect((new Lesson1())->helloWorld())->toBe('Hello, World!');
});

it('returns an array of items', function (){
    $this->assertCount(3, (new Lesson1())->createArray());
});

it('returns a function', function (){
    $this->assertEquals(4, (new Lesson1())->addFunction(2, 2));
});
