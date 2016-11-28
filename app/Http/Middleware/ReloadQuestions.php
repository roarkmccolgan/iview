<?php

namespace App\Http\Middleware;

use App\Url;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class ReloadQuestions
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
        //App::setLocale(session('locale'));
        $currentLocal = App::getLocale();
        $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
        $questions = Config::get($localQuestions.'questions_'.session('product.id'));
        
        $request->session()->put('questions', $questions);
        reset($questions);
        $request->session()->put('startSection', key($questions));

        return $next($request);

    }
}
