<?php

require_once 'src/Cow.php';
require_once 'src/Grass.php';

use PHPUnit\Framework\TestCase;

class CowTest extends TestCase
{
    public function test_eat_success(): void
    {
        // Because the Cow now depends on another object (Grass)
        // We don't just pass the dependency into the Cow
        // because that is not a unit test - testing 2 things at once

        // Instead, we make a fake 'mock' version of the dependency
        $grassMock = $this->createMock(Grass::class);
        // We look at what methods the mock needs to have
        // and we make dumb fake versions of those methods
        $grassMock->method('getFoodType')->willReturn('Grass');

        $expected = 'mmmm Grass';
        
        $cow = new Cow();
        // We pass our mock version of grass into the cow
        $result = $cow->eat($grassMock);

        
        // Perform an assertion
        $this->assertEquals($expected, $result);
    }
    
    // With malformed tests, we are making sure the function/object
    // properly rejects the wrong kind of data
    public function test_eat_malformed(): void
    {
        // Creating a test input that is the wrong data type
        $testFood = ['Grass', 'Hay'];
        // Telling PHPUnit that we WANT to get a type error
        $this->expectException(TypeError::class);

        $cow = new Cow();
        $cow->eat($testFood); // Trigger the type error, because we're
        // passing in the wrong datatype
    }
}
    
