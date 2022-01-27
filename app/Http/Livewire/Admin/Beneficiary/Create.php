<?php

namespace App\Http\Livewire\Admin\Beneficiary;

use App\Models\Country;
use App\Models\Document;
use App\Models\Operator;
use App\Models\Reason;
use Livewire\Component;

class Create extends Component
{

    public $name,
    $surname,
    $secondSurname,
    $typeId,
    $numberId,
    $birth,
    $dateInput,
    $timeInput,
    $sim,
    $datePard,
    $admin,
    $regional,
    $evaluation,
    $zonalCenter,
    $race,
    $nationality,
    $result,
    $sede,
    $modality,
    $document,
    $observationsInput,
    $vacuna,



    $getDocuments = [],
    $sedes = [],
    $getReasons = [],
    $getCountries = []

    
    
    ;



    public function render()
    {
        $this->sedes = Operator::all();
        $this->getDocuments = Document::all();
        $this->getReasons = Reason::all();
        $this->getCountries = Country::all();
        return view('livewire.admin.beneficiary.create')
        ->extends('layouts.app')
        ->section('content');
    }



    
}
