<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $users = [];

    public function render()
    {
        $this->users = User::all();
        return view('livewire.admin.users.index')->extends('layouts.app')->section('content');
    }

    
}
