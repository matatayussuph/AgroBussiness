<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('SchoolAdmin.dashboard');
    }
    private function create_start_roles(Request $request)
    {
        Roles::whereNotNull('name')->delete();
        $this->create_start_permission($request);
        $this->status($request);

        $super_admin = Role::create([
            'name' => 'Super Admin', 'guard_name' => 'web',
        ]);
        $super_admin->syncPermissions([
            'Access all',
        ]);
      
    }

}
