<?php

namespace App\Http\Livewire\Admin\Documents;

use App\Models\Document;
use Livewire\Component;

class Index extends Component
{

    public $openModal = false,
    $documents = [],
    $name;

    protected $rules = [
        'name' => 'required',
    ];

    protected $listeners = [
        'delete'
    ];

    public function render()
    {
        $this->documents = Document::all();
        return view('livewire.admin.documents.index');
    }

    public function create ()
    {
        $this->validate();

        Document::create([
            'name' => $this->name,
        ]);

        $this->reset([
            'name',
            'openModal',
        ]);

        $this->emit('documentCreated', 'El documento fue creado exitosamente'); 
    }

    public function closeModal()
    {
        $this->reset([
            'name',
            'openModal',
        ]);
    }

    public function delete($id)
    {
        Document::find($id)->delete();
    }
}
