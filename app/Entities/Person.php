<?php

namespace App\Entities;

class Person
{
    public function __construct(
        protected string $name,
        protected string $document,
    ) {}

    public function showName()
    {
        return $this->name;
    }
}