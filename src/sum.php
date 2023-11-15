<?php

declare(strict_types=1);

/**
 * Adds together positive numbers only
 */
function sum(float $a, float $b): float|false {
    if ($a < 0 || $b < 0) {
        return false;
    }
    return $a + $b;
}