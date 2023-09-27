<?php

use Illuminate\Support\Facades\Route;
// use App\Entities\Person;
use App\Entities\NaturalPerson;
use Illuminate\Support\Facades\Http;
use App\Services\ViaCepService;
use Illuminate\Support\Fluent;

Route::get('/', function () {
    $tioJobs = new NaturalPerson("Tio Jobs", "121212121");
    // $tioJobs->gender = 'Male';

    // $objectDinamic = new stdClass();
    // $objectDinamic->name = "Tio Jobs";
    // $objectDinamic->cpf = "12122132132132131";
    // $objectDinamic->gender = "male";
    // dump($tioJobs,$objectDinamic);

    // dd($tioJobs->gender, $objectDinamic->gender);

    // $api = '{"name":"Tio jobs","document":"1234","gender":"male "}';

    // // classes anônimas 
    // $person = new class(json_decode($api)){

    // };

    // dd($person);

    // if (checkInstanceisNaturalPerson($tioJobs)) {
    //     dd(" È uma instancia Natural Person");
    // }

    // dd(" Não é uma instancia Natural Person", $tioJobs);

        // dd(ViaCepService::handleCep('72641132'));

        // $data  = viaCepService::handleCep('72641132');
        // dd($data['logradouro'], $data['uf']);

        $data = new Fluent(ViaCepService::handleCep('72641132'));
        dd($data->logradouro, $data->uf, $data->bairro);

    });

// function checkInstanceisNaturalPerson(NaturalPerson $naturalPerson):bool
// {
//     return true;
// }
