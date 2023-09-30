<?php

namespace App\Entities;

class Invoice
{
    protected array $properties = [];

    public function __get(string $key):mixed
    {
        if(array_key_exists($key, $this->properties)){
            return $this->properties[$key];
        }

        return null;
    }


    public function __set(string $key,mixed $value)
    {
        $this->properties[$key] = $value;
    }

    public function __isset(string $key): bool
    {
        // dd($key);
        return array_key_exists($key,$this->properties);
    }

    public function unset(string $key):void
    {
        unset($this->properties[$key]);
    }
}