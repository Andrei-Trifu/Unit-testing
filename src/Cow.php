<?php

declare(strict_types=1);

class Cow
{
    public function eat(Grass $food): string
    {
        return "mmmm {$food->getFoodType()}";
    }
}