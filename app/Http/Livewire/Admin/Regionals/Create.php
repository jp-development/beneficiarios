<?php

namespace App\Http\Livewire\Admin\Regionals;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.regionals.create')->extends('layouts.app')->section('content');
    }
}
