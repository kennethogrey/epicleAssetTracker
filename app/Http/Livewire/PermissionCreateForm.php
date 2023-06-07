<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionCreateForm extends Component
{
    public $permission;
    public function createPermission(){
        $permission = $this->permission;
        $this->validate([
            'permission'=>'required|unique:permissions,name',
        ],[
            'permission.required'=>'The permission cannot be empty',
            'permission.unique'=>'This permission already exists',
        ]);
        Permission::create(['name' => $permission]);
        return redirect()->to('/permissions');
    }
    public function render()
    {
        return view('livewire.permission-create-form');
    }
}
