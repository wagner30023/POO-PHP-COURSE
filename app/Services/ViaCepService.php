<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ViaCepService
{

    public static function handleCep(string $zipcode)
    {
        return Http::get("viacep.com.br/ws/{$zipcode}/json/")->json();
    }
}
