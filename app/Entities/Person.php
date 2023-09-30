<?php

namespace App\Entities;

class Person
{
    public function __get(string $name):mixed
    {
        if (property_exists($this, $name)) {
            return $this->name;
        }

        return null;
    }

    public function __set(string $name, mixed $value): void
    {
        // if (property_exists($this, $name)) {
        //     $this->$name = $value;
        // }

        $this->$name = $value;
        // dd($name, $value); 
    }


}
