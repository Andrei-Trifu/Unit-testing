<?php

require_once 'src/sum.php';

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase {
    public function test_sum_negative() : void {

        $inputa = -10;
        $inputb = -10;

        $expected = false;

        $result = sum($inputa, $inputb);
        $this->assertEquals($expected, $result);


    }

    public function test_sum_positive() : void
    {
        $inputa = 12;
        $inputb = 2;
        $expected=14;
        $result = sum($inputa, $inputb);
        $this->assertEquals($expected, $result);
     }
}