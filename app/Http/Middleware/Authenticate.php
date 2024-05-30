<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $isLogged = session()->get('isLogged');
        $userId = session()->get('userId');
        $userRole = session()->get('role');

        if(!$isLogged && !$userId) {
            return redirect()->route('loginPage')->with('error', 'Please login first!');
        }

        if($userRole != $role) {
            if($userRole == 'admin') {
                return redirect()->route('admin.home')->with('warning', 'You dont have access!');
            }

            return redirect()->route('user.home')->with('warning', 'You dont have access!');
        }

        return $next($request);
    }
}
