<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    private $loginPage = '/login';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles/*, $permission*/)
    {
        if (Auth::guest()) {
            return redirect($loginPage);
        }
        $abort = true;
        
        foreach ($roles as $role) {
            if ($request->user()->hasRole($role)) {
               $abort = false;
            }
        }
        if($abort) abort(403);

        /*if (! $request->user()->can($permission)) {
           abort(403);
        }*/

        return $next($request);
    }
}
