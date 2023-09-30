<?php

use Illuminate\Support\Facades\Route;
// use App\Entities\Person;
use App\Entities\NaturalPerson;
use Illuminate\Support\Facades\Http;
use App\Services\ViaCepService;
use Illuminate\Support\Fluent;
use App\Entities\Person;
use App\Entities\Invoice;
use App\Entities\Invoice_call;

use App\CRUDS\Customer;
use App\ValueObjects\Email;
use App\ValueObjects\User;
use App\Services\PaymentServices;

Route::get('/', function () {
    // $tioJobs = new NaturalPerson("Tio Jobs", "121212121");
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

    // $data = new Fluent(ViaCepService::handleCep('72641132'));
    // dd($data->logradouro, $data->uf, $data->bairro);

    // $tiojobs = new Person;
    // $tioJobs->name  = 'Tio Jobs';
    // dd($tiojobs->name);

    // $invoice = new Invoice;
    // $invoice->id = 1234;
    // $invoice->date = date('d/m/Y');
    // dd($invoice);

    // dd(isset($invoice->amount));

    // $array = [];
    // // dd(isset($array['nome']));

    // if (empty($array)) {
    //     $array = ["teste"];
    //     array_push($array);
    // }

    // $invoice->amount = 30.5;
    // unset($invoice->amount);
    // // dd($invoice);
    // dd(isset($invoice->amount));

    // dd($array);

    // dd(empty($invoice->amount));

    // $invoice_call = new Invoice_call;
    // $invoice_call->process(4, 5, 6);


    $customer = new Customer(
        'tio jobs ',
        new Email('tio@jobstreinamento.com'),
        '207355'
    );

    $email = (string) $customer->email;
    // dd($email);


    $user = new User;
    // dd($user(['banana','maçã']));

    $service = new PaymentServices(
        'sdfsdfdsfsdf',
        'http://gateway.com.br',
    );
    dd($service->token,$service->baseURL);
});

// function checkInstanceisNaturalPerson(NaturalPerson $naturalPerson):bool
// {
//     return true;
// }
