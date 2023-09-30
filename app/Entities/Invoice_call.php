<?php

declare(strict_types=1);

namespace App\Entities;

class Invoice_call
{

    protected function process(float $amount, string $description)
    {
        dump('Chamou', $amount, $description);
    }


    public function __call(string $method, $parameters)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this,$method],$parameters);
        }

        return $this;
    }

    public static function __callStatic(string $method, array $parameters):mixed
    {
        dd("estatico", $method, $parameters);
    }
}
