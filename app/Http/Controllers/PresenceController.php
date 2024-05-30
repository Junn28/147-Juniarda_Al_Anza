<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $presence = new Presence();

        $presence->task = $request->task;
        $presence->time_in = now();
        $presence->id_user = session()->get('userId');
        $presence->created_at = now();
        $presence->updated_at = now();

        $presence->save();

        $request->session()->put('presenceId', $presence->id);

        return redirect()->route('presence');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presence $presence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presence $presence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $presence = Presence::find(session()->get('presenceId'));

        $presence->update([
            'time_out' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('absence');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presence $presence)
    {
        //
    }
}
