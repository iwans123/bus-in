<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$role)
    {
        // if(auth()->guest() || auth()->user()->role !== 'admin') {
        //     abort(403);
        // }
        // $roles = Role::all();

        if (in_array($request->user()->role_id,$role)) {
            return $next($request);
        }
        // foreach ($roles as $roleFromdb) {
        //     if ($role == $roleFromdb->name && auth()->user()->role_id == $roleFromdb->id) {
        //         return $next($request);
        //     }
        // }
        // return $next($request);
        return abort(403);
    }
}
