<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DashboardController extends Controller
{
    public function index(){
        $roleName = Auth::user()->roles->first()->name;
        return view('dashboard',compact('roleName'));
    }

    public function roles(){
        $roles = Role::paginate(2);
        return view('roles.index',compact('roles'));
    }

    public function permissions(){
        $permissions = Permission::paginate(2);
        return view('permissions.index',compact('permissions'));
    }

    public function users(){
        return view('users.index');
    }
}
