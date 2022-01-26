<?php

namespace App\Http\Livewire\Admin\Beneficiary;

use App\Models\Document;
use App\Models\Operator;
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
    $idType,
    $identificationNumber,
    $sex,
    $birth,
    $department,
    $municipality,
    $nacionality,
    $campus,
    $authority,
    $getDocuments = [],
    $documents,
    $adoptability,
    $disability,
    $eps,
    $ethnic,
    $pard,
    $inputDate,
    $scholarship,
    $observationsSchool,
    $nameResponsable,
    $relationship,
    $address,
    $tel,
    $inputObservations,
    $sedes = [];

    protected $rules = [
        'sim' => 'required',
        'zonalCenter' => 'required',
        'name' => 'required',
        'surname' => 'required',
        'secondSurname' => 'required',
        'sex' => 'required',
        'birth' => 'required',
        'department' => 'required',
        'municipality' => 'required',
        'campus' => 'required',
        'authority' => 'required',
        'documents' => 'required',
        
    ];

    public function render()
    {
        $this->sedes = Operator::all();
        $this->documents = Document::all();
        return view('livewire.admin.beneficiary.create')
        ->extends('layouts.app')
        ->section('content');
    }



    public function create ()
    {
        dd($this);
    }
}
