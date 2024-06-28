<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        // Check if the authenticated user has a role (to prevent accessing role property of null)
        if (Auth::user()->role && Auth::user()->role == 'admin') {
            return $next($request); // User has the 'admin' role, proceed
        }

        // If user is authenticated but does not have the 'admin' role, abort with 403 Forbidden
        abort(403, 'Unauthorized action.');
    }
}
