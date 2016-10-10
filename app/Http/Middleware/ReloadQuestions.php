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
        
        $url = Url::with('language')->where('domain',config('app.tooldomain'))->where('subdomain',$request->tool)->first();
        if ($url) {
            App::setLocale($url->language->abbreviation);
            $url->urlable->load('company');
            $request->session()->flush();
            //dd($url->urlable);

            $request->session()->put('product', ['type'=>$url->urlable_type, 'id'=>$url->urlable_id]);
            $request->session()->put('locale', $url->language->abbreviation);
            $request->session()->put('url', 'http://' . $request->tool.'.'.$url->domain);
            $request->session()->put('host', $url->urlable->domain);
            $request->session()->put('analytics', $url->urlable->gapropertyid);
            $request->session()->put('template', $url->urlable->template);
            $request->session()->put('company.name', $url->urlable->company->name);
            $request->session()->put('company.id', $url->urlable->company->id);
            $request->session()->put('company.alias', strtolower(str_replace(" ", "_", $url->urlable->company->name)));

            $currentLocal = App::getLocale();
            $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
            $questions = Config::get($localQuestions.'questions_'.$url->urlable_id);
            
            $request->session()->put('questions', $questions);
            reset($questions);
            $request->session()->put('startSection', key($questions));

            //add model to request
            $request->attributes->add(['product'=> $url->urlable]);
            
            return $next($request);

        }
        abort(400,'Not Found Man');

    }
}
