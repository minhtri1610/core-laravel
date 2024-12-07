<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::guard('admin')->check()) {
            return redirect(route('admin.login'));
        }

        if (Auth::guard('admin')->user()->role !== config('constants.ROLE_ADMIN')) {
            abort(403);
        }

        return $next($request);
    
    }
}
