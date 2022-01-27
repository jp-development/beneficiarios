<?php

namespace App\Http\Livewire\Admin\Regionals;

use App\Models\Regional;
use Livewire\Component;

class Index extends Component
{

    public $nameRegional,
    
    
    $getRegionals = [];

    protected $listeners = [
        'deleteRegionals'
    ];

    public function render()
    {
        $this->getRegionals = Regional::all();
        return view('livewire.admin.regionals.index')->extends('layouts.app')->section('content');
    }

    public function createRegional()
    {
        Regional::create([
            'name' => $this->nameRegional,
        ]);

        $this->reset([
            'nameRegional',
        ]);

        $this->emit('regionalCreated', 'El regional fue creado con exito');
    }

    public function deleteRegionals ($id)
    {
        Regional::find($id)->delete();
    }
}
