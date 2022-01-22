<?php

namespace App\Http\Livewire\Admin\Roles;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{

    public $openModal = false,
    $name,
    $getPermissions,
    $permissions = [],
    $roles = [];

    protected $rules = [
        'name' => 'required',
    ];

    protected $listeners = [
        'delete',
    ];

    public function render()
    {
        $this->roles = Role::all();
        $this->getPermissions = Permission::get();
        return view('livewire.admin.roles.index')
        ->extends('layouts.app')->section('content');
    }


    public function create ()
    {
        $this->validate();

        $rol = Role::create(["name" => $this->name]);
        $rol->syncPermissions($this->permissions);

        $this->reset([
            'name',
            'openModal',
        ]);

        $this->emit('rolCreated', 'El rol fue creado correctamente');

    }

    public function delete($id)
    {
        DB::table('roles')->where("id",$id)->delete();
    }
}
