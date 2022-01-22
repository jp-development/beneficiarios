<?php

namespace App\Http\Livewire\Admin\Options;

use App\Models\Document;
use Livewire\Component;

class Index extends Component
{


    public function render()
    {
        

        return view('livewire.admin.options.index')
        ->extends('layouts.app')->section('content');
    }
}
