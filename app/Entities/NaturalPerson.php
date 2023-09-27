<?php

declare(strict_types=1);
namespace App\Entities;

use App\Entities\Person;
use App\Entities\Traits\SuperPersonTrait;

class NaturalPerson extends Person
{
    use SuperPersonTrait; // herda todas as características como se fosse uma herança multipla
}