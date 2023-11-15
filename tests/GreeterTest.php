<?php

require_once 'src/Greeter.php';
require_once 'src/User.php';

use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    public function test_getMessage_fnameOnly(): void
    {
        // Making a fake version of the User object
        $mockUser = $this->createMock(User::class);
        $mockUser->method('getFirstName')->willReturn('Ash');
        $mockUser->method('getLastName')->willReturn('');

        $expected = 'Welcome Ash';

        $greeter = new Greeter($mockUser); // Passing the mock in
        $result = $greeter->getMessage();

        $this->assertEquals($expected, $result);
    }

    public function test_getMessage_bothNames(): void
    {
        // Making a fake version of the User object
        $mockUser = $this->createMock(User::class);
        $mockUser->method('getFirstName')->willReturn('Ash');
        $mockUser->method('getLastName')->willReturn('Coles');

        $expected = 'Hello Ash Coles!';

        $greeter = new Greeter($mockUser); // Passing the mock in
        $result = $greeter->getMessage();

        $this->assertEquals($expected, $result);
    }
}