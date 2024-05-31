<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use Illuminate\Http\Request;

class AbsentController extends Controller
{
    public function presence()
    {
        $user = Absent::where('id_user', session()->get('userId'))->first();
        $absent = Absent::find(session()->get('userId'));

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
                'date' => now(),
                'status' => 'presence',
                'updated_at' => now()
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

    public function permission()
    {
        $user = Absent::where('id_user', session()->get('userId'))->first();
        $absent = Absent::find($user->id);

        $absent->update([
            'status' => 'permission'
        ]);

        return redirect()->route('user.permission')->withSuccess('Your permission request has been sent');
    }

    public function destroy($id)
    {
        $absent = Absent::find($id);
        
        $absent->delete();

        return redirect()->back();
    }
}
