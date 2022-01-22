<?php

namespace App\Http\Livewire\Admin\Reports;

use Livewire\Component;

class Index extends Component
{

    

    public function render()
    {
        return view('livewire.admin.reports.index')->extends('layouts.app')->section('content');
    }

    public function confirmReport($id)
    {
        $this->emit('confirmReport', $id);
    }

}
