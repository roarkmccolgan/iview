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
        $tool = session('product');
        $controller = $method = 'closure';
        $currentAction = \Route::getCurrentRoute()->getActionName();
        if($currentAction !== "Closure"){
            list($controller, $method) = explode('@', $currentAction);
            $controller = preg_replace('/.*\\\/', '', $controller);
        }

        if (!$request->session()->has('questions') || $method == 'closure' ) {
            $currentLocal = App::getLocale();
            $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
            $questions = Config::get($localQuestions.'questions_'.session('product.id'));
            if (is_null($questions)) {
                abort(404, 'Language or URL Does not exist');
            }
            
            $request->session()->put('questions', $questions);
            reset($questions);
            $request->session()->put('startSection', key($questions));
        }

        return $next($request);
    }
}
