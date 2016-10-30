<?php

namespace App\Http\Middleware;

use App\Url;
use Closure;
use Illuminate\Support\Facades\Config;

class RouteByURL
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
            $url->urlable->load('company');

            $request->session()->put('product', ['type'=>$url->urlable_type, 'id'=>$url->urlable_id, 'alias'=>$url->urlable->alias]);
            $request->session()->put('locale', $url->language->abbreviation);
            $request->session()->put('url', 'http://' . $request->tool.'.'.$url->domain);
            $request->session()->put('host', $url->urlable->domain);
            $request->session()->put('referer', $request->server('HTTP_REFERER'));
            $request->session()->put('analytics', $url->urlable->gapropertyid);
            $request->session()->put('template', $url->urlable->template);
            $request->session()->put('company.name', $url->urlable->company->name);
            $request->session()->put('company.id', $url->urlable->company->id);
            $request->session()->put('company.alias', strtolower(str_replace(" ", "_", $url->urlable->company->name)));

            //add model to request
            $request->attributes->add(['product'=> $url->urlable]);
            
            return $next($request);

        }

        abort(400,'Not Found Man');
    }
}
