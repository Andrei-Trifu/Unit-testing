<?php

declare(strict_types=1);

class Greeter
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getMessage(): string
    {
        if ($this->user->getLastName() === '') {
            return "Welcome {$this->user->getFirstName()}";
        }
    
        return "Hello {$this->user->getFirstName()} {$this->user->getLastName()}!";
    }   
}