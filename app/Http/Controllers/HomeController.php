<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $user = User::find(session()->get('userId'));
        $absent = Absent::find(session()->get('userId'));
        $absents = Absent::all();
        $roles = Role::all();
        
        if(session()->get('role') == 'admin') {
            return view('pages/admin/home', [
                'absents' => $absents,
                'roles' => $roles
            ]);
        }

        return view('pages/home', [
            'user' => $user,
            'absent' => $absent
        ]);
    }
}
