<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use Illuminate\Http\Request;

class AbsentController extends Controller
{
    public function presence()
    {
        $user = Absent::where('id_user', session()->get('userId'))->first();
        $absent = Absent::find($user->id);

        if(!$user) {
            Absent::insert([
                'date' => now(),
                'id_user' => session()->get('userId'),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('user.home');
        }

        if(session()->get('presenceId')) {
            $absent->update([
                'status' => 'presence'
            ]);

            return redirect()->route('user.home')->withSuccess('You have successfully attended');
        }
        
        return redirect()->route('user.home');
    }

    public function absence()
    {
        $user = Absent::where('id_user', session()->get('userId'))->first();
        $absent = Absent::find($user->id);

        $absent->update([
            'status' => 'absence'
        ]);

        return redirect()->route('user.home')->withSuccess('Thank you for attending. Dont forget to get enough rest');
    }
}
