<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class CheckPermission
{
    public function handle(Request $request, Closure $next)
    {
        $route = $request->route()->getName();

        if (!is_null(Permission::whereName($route)->first()) && !auth()->user()->hasPermissionTo($route)) {
            return to_route('admin.index');
        }

        return $next($request);
    }
}
