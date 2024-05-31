<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add(Request $request) 
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_role' => (int)$request->role,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->withSuccess('You have successfully added a user!');
    }
}
