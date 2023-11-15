<?php

require 'src/Maths.php';

use PHPUnit\Framework\TestCase;

class MathsTest extends TestCase
{
    public function test_sum_success(): void
    {
        $inputa = 5;
        $inputb = 10;

        $expected = 15;

        $mathsObj = new Maths();
        $result = $mathsObj->sum($inputa, $inputb);

        $this->assertEquals($expected, $result);
    }

    public function test_multiply_success(): void
    {
        $inputa = 10;
        $inputb = 2;

        $expected = 20;

        $mathsObj = new Maths();
        $result = $mathsObj->multiply($inputa, $inputb);

        $this->assertEquals($expected, $result);
    }

    public function test_squarePositive_negativeNumber(): void
    {
        $input = -100;

        $mathsObj = new Maths();
        $result = $mathsObj->squarePositive($input);

        $this->assertFalse($result);
    }

    public function test_squarePositive_success(): void
    {
        $input = 5;

        $expected = 25;

        $mathsObj = new Maths();
        $result = $mathsObj->squarePositive($input);
        $this->assertEquals($expected, $result);
    }

    public function test_squarePositive_malformed(): void
    {
        $input = [5, 2, 4];

        $this->expectException(TypeError::class);

        $mathsObj = new Maths();
        $result = $mathsObj->squarePositive($input);
    }
}


