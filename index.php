<?php

require_once 'src/User.php';
require_once 'src/Greeter.php';

$user = new User('Steve', 'Smith');

$greeter = new Greeter($user);

echo $greeter->getMessage();

