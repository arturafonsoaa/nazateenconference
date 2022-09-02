<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyDefaultPassword
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->default_password) {
            return to_route('admin.changePassword');
        }

        return $next($request);
    }
}
