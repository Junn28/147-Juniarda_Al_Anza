<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() 
    {
        $roles = Role::all();

        return view('auth.login', [
            'roles' => $roles
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        // dd(request()->all());

        if(!$user) {
            return redirect()->back()->with('error', 'Email is wrong! Please try again');
        }
        
        if(!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password is wrong! Please try again');
        }

        $request->session()->regenerate();
        $request->session()->put('userId', $user->id);
        $request->session()->put('isLogged', true);
        $request->session()->put('role', 'user');

        if($user->id_role == 1) {
            $request->session()->put('role', 'admin');
            
            return redirect()->route('admin.home');
        }

        return redirect()->route('presence');
    }

    public function logout(Request $request)
    {
        session()->flush();

        return redirect()->route('loginPage');
    }

    public function signUp(Request $request) 
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phoneNumber,
            'gender' => $request->gender,
            'id_role' => (int)$request->role,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->withSuccess('Account created successfully. Please login first!');
    }
}
