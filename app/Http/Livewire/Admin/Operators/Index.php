<?php

namespace App\Http\Livewire\Admin\Operators;

use App\Models\Operator;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'delete',
    ];


    public function render()
    {
        $this->operators = Operator::all();

        return view('livewire.admin.operators.index')
        ->extends('layouts.app')
        ->section('content');
    }

    

    public function delete($id)
    {
        Operator::find($id)->delete();
    }
}
