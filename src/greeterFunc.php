<?php

declare(strict_types=1);

function greeter(string $fname, string $lname = ''): string {
    if ($lname === '') {
        return "Welcome $fname";
    }

    return "Hello $fname $lname!";
}