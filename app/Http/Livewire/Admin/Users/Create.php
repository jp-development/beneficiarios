<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    public $roles = [],
        $name,
        $email,
        $password,
        $rol;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'rol' => 'required',
    ];

    public function render()
    {
        $this->roles = Role::pluck('name', 'name')->all();
        return view('livewire.admin.users.create')->extends('layouts.app')->section('content');
    }

    public function create()
    {


        $this->validate();

        $this->password  = Hash::make($this->password);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,

        ]);

        $user->assignRole($this->rol);

        $this->reset([
            'name',
            'password',
            'rol',
            'email',
        ]);
    }
}
