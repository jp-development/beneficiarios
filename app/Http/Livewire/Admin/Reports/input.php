<?php

namespace App\Http\Livewire\Admin\Reports;

use App\Models\Operator;
use Livewire\Component;

class Input extends Component
{
    

    public $operators;

    public function render()
    {
        $this->operators = Operator::all();

        return view('livewire.admin.reports.input-beneficiaries');
    }
}
