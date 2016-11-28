<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $allowed = array("fr", "de", "es");
        if (in_array($request->lang, $allowed)) {
             App::setLocale($request->lang);
        }
        return $next($request);
    }
}
