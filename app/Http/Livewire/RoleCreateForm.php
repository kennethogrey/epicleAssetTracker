<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleCreateForm extends Component
{
    public $role;
    public function createRole(){
        $role = $this->role;
        $this->validate([
            'role'=>'required|unique:roles,name',
        ],[
            'role.required'=>'The role cannot be empty',
            'role.unique'=>'This role already exists',
        ]);
        Role::create(['name' => $role]);
        return redirect()->to('/roles');
    }
    public function render()
    {
        return view('livewire.role-create-form');
    }
}
