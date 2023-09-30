<?php

declare(strict_types=1);

namespace App\ValueObjects;

final class Email
{
    public function __construct(
        private string  $email,
    ){
        $this->validate(); // 
    }

    private function validate():void
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            throw new \DomainException('O email infomado é inválido');
        }
    }

    public function __toString(): string 
    {
        return $this->email;
    }
}