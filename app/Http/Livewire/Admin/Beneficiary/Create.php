<?php

namespace App\Http\Livewire\Admin\Beneficiary;

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
    $inputObservations,
    $inputDate,
    $idType,
    $identificationNumber,
    
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

        return view('livewire.admin.beneficiary.create')
        ->extends('layouts.app')
        ->section('content');
    }



    public function create ()
    {
        dd($this);
    }
}
