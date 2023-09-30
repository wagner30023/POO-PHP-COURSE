<?php

declare(strict_types=1);

namespace App\ValueObjects;

class User
{
    public function __invoke(array $fruits): mixed
    {
        foreach ($fruits as $fruit) {
            echo $fruit.'<br />';
        }
        return $this;
    }
}
