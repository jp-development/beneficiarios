<?php

namespace App\Http\Livewire\Admin\Beneficiary;

use Livewire\Component;

class Create extends Component
{

    public 
    // Variables de formulario
    $sim,
    $zonalCenter,
    $name,
    $surname,
    $secondSurname,
    $sex,
    $birth,
    $department,
    $municipality,
    $campus,
    $authority,
    $documents = [],
    $adoptability,
    $eps,
    $ethnic,
    $scholarship,
    $observationsSchool,
    $nameResponsable,
    $surnameResponsable,
    $secondSurnameResponsable,
    $inputObservations,
    $inputDate,
    $idType,
    $identificationNumber;

    public function render()
    {
        return view('livewire.admin.beneficiary.create')
        ->extends('layouts.app')
        ->section('content');
    }

    public function create ()
    {
        dd($this);
    }
}
