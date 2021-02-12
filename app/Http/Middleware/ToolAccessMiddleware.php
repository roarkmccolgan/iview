<?php

namespace App\Http\Middleware;

use Closure;

class ToolAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $super, ...$requiredRoles)
    {
        //dd('fok');
        $user = $request->user();
        $tool = $request->session()->get('productObject');
        if (! $user->hasRole($super)) {
            $abort = true;
            if ($user->tools->contains($tool->id)) {
                foreach ($requiredRoles as $role) {
                    if ($user->hasRole($role)) {
                        $abort = false;
                    }
                }
            }
            if ($abort) {
                abort(403);
            }
        }

        return $next($request);
    }
}
