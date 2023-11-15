<?php

declare(strict_types=1);

class Maths
{
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function squarePositive(float $a): float|false
    {
        if ($a < 0) {
            return false;
        }
        return $a * $a;
    }
}


