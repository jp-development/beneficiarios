<?php

namespace App\Http\Livewire\Admin\Regionals;

use App\Models\Regional;
use App\Models\ZonalCenter;
use Livewire\Component;

class Index extends Component
{

    public 
    $nameRegional,
    $nameZonalCenter,
    $regionalId,
    
    
    $getRegionals = [],
    $getZonalCenters = [];

    protected $listeners = [
        'deleteRegionals',
        'deleteZonalCenters',
    ];

    public function render()
    {
        $this->getZonalCenters = ZonalCenter::all();
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

    public function createZonalCenter ()
    {
        ZonalCenter::create([
            'name' => $this->nameZonalCenter,
            'regional_id' => $this->regionalId,
        ]);

        $this->reset([
            'nameZonalCenter',
            'regionalId',
        ]);

        $this->emit('zonalCenterCreated', 'El centro zonal fue creado con exito');
    }

    public function deleteRegionals ($id)
    {
        Regional::find($id)->delete();
    }

    public function deleteZonalCenters ($id)
    {
        ZonalCenter::find($id)->delete();
    }

    
}
