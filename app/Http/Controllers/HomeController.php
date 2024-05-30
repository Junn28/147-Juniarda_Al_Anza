<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $user = User::find(session()->get('userId'));
        $absent = Absent::find(session()->get('userId'))->first();
        
        if(session()->get('role') == 'admin') {
            return view('pages/admin/home');
        }

        return view('pages/home', [
            'user' => $user,
            'absent' => $absent
        ]);
    }
}
