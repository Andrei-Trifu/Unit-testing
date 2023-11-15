<?php

require 'src/greeterFunc.php';

use PHPUnit\Framework\TestCase;

class GreeterFuncTest extends TestCase
{
    public function test_greeter_fnameOnly(): void
    {
        $input = 'Ash';

        $expected = 'Welcome Ash';

        $result = greeter($input);

        $this->assertEquals($expected, $result);
    }

    public function test_greeter_bothNames(): void
    {
        $fname = 'Ash';
        $lname = 'Coles';

        $expected = 'Hello Ash Coles!';

        $result = greeter($fname, $lname);
        $this->assertEquals($expected, $result);
    }
}