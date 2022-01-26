<?php

namespace App\Http\Livewire\Admin\Operators;

use App\Models\Operator;
use Livewire\Component;

class Create extends Component
{

    public

        $name,
        $regional,
        $zonalCenter,
        $municipality,
        $attentionModality,
        $population,
        $contractNumber,
        $institution,
        $campus,
        $phone,
        $address,
        $responsable,
        $email,

        $operators = [];


    protected $rules = [

        'name' => 'required',
        'regional' => 'required',
        'zonalCenter' => 'required',
        'municipality' => 'required',
        'attentionModality' => 'required',
        'population' => 'required',
        'contractNumber' => 'required',
        'institution' => 'required',
        'campus' => 'required',
        'phone' => 'required|min:10|max:10 ',
        'address' => 'required',
        'responsable' => 'required',
        'email' => 'required|email',

    ];

    public function render()
    {
        return view('livewire.admin.operators.create')->extends('layouts.app')->section('content');
    }

    public function create()
    {

      
        $this->validate();
 
        Operator::create([
            'name' => $this->name,
            'regional' => $this->regional,
            'zonalCenter' => $this->zonalCenter,
            'municipality' => $this->municipality,
            'attentionModality' => $this->attentionModality,
            'population' => $this->population,
            'contractNumber' => $this->contractNumber,
            'institution' => $this->institution,
            'campus' => $this->campus,
            'phone' => $this->phone,
            'address' => $this->address,
            'responsable' => $this->responsable,
            'email' => $this->email,
        ]);

        $this->reset([
            'name',
            'regional',
            'zonalCenter',
            'municipality',
            'attentionModality',
            'population',
            'contractNumber',
            'institution',
            'campus',
            'phone',
            'address',
            'responsable',
            'email',
        ]);

        $this->emit('operatorCreated', 'El operador fue creado con exito');
    }
}
