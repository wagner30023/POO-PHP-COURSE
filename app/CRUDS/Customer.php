<?php

declare(strict_types=1);

namespace App\CRUDS;

use App\ValueObjects\Email;

class Customer
{
    public function __construct(
        protected string $name,
        public Email $email,
        protected string $document
    ) {}


}
