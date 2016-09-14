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

        $domain = explode('.', $request->getHost());

        $url = URL::where('domain',$domain[1].'.'.$domain[2])->where('subdomain',$domain[0])->first();
        $language = $url->language->abbreviation;
    
        if ($url) {
            Config::set('app.product', ['type'=>$url->urlable_type, 'id'=>$url->urlable_id]);
            Config::set('app.locale', $language);
            Config::set('app.url','http://' . $domain[0].'.'.$domain[1].'.'.$domain[2]);
            Config::set('app.host',$request->getHost());
            Config::set('app.analytics',$url->urlable->gapropertyid);
            Config::set('app.template','default');
            return $next($request);
        }

        abort(400,'Not Found Man');
    }
}
