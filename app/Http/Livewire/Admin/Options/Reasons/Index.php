<?php

namespace App\Http\Livewire\Admin\Options\Reasons;

use App\Models\Reason;
use Livewire\Component;

class Index extends Component
{
    public $openModal = false,
    $reason,
    $reasons = [];

    protected $rules = [
        'reason' => 'required',
    ];

    protected $listeners = [
        'delete',
    ];

    public function render()
    {

        $this->reasons = Reason::all();
        return view('livewire.admin.options.reasons.index');
    }

    public function create (){

        $this->validate();

        Reason::create([
            'reason' => $this->reason,
        ]);

        $this->reset([
            'reason',
            'openModal',
        ]);

        $this->emit('reasonCreated', 'El motivo de ingreso fue creado correctamente');


    }

    public function closeModal()
    {
        $this->reset([
            'openModal',
            'reason',
        ]);
    }

    public function delete($id)
    {
        Reason::find($id)->delete();
    }
}
