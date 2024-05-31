<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(session()->get('userId'));
        $absent = Absent::find(session()->get('userId'));
        $permissions = Permission::all();
        
        if(session()->get('role') == 'admin') {
            return view('pages/admin/permission', [
                'permissions' => $permissions
            ]);
        }

        return view('pages/permission', [
            'user' => $user,
            'absent' => $absent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Permission::insert([
            'date' => $request->date,
            'reason' => $request->reason,
            'id_user' => session()->get('userId'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('permit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
