<?php

// declare(strict_types=1);

namespace App\Services;

class PaymentServices
{
    public function __construct(
        public readonly  $token,
        public readonly  $baseURL,
    ){}

    // public function getToken():void
    // {
    //     $this->token;
    // }

    // public function getBaseUrl():string
    // {
    //     return $this->baseURL;
    // }


}