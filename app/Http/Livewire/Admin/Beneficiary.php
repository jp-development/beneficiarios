<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Beneficiary extends Component
{
    public function render()
    {
        return view('livewire.admin.beneficiary')
        ->extends('layouts.app')
        ->section('content');
    }
}
