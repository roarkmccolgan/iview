<?php

namespace App\Http\Middleware;

use App\Tracker;
use App\Url;
use Closure;
use Illuminate\Support\Facades\App;
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
        $host_names = explode('.', $request->server('HTTP_HOST'));
        $url = Url::with('language')->whereIn('domain', config('app.tooldomain'))->where('subdomain', $request->subdomain)->first();

        if ($url) {
            $url->urlable->load('company');
            $request->session()->put('product', ['type'=>$url->urlable_type, 'id'=>$url->urlable_id, 'alias'=>$url->urlable->alias, 'title'=>$url->urlable->title, 'sub_title'=>$url->urlable->sub_title, 'template'=>$url->urlable->template]);
            $request->session()->put('productObject', $url->urlable);
            $request->session()->put('locale', App::getLocale() == 'en' ? '' : App::getLocale());
            $request->session()->put('localeUrl', App::getLocale() == 'en' ? '' : App::getLocale().'/');
            $request->session()->put('url', env('APP_PROTOCOL', 'https://').$request->subdomain.'.'.$host_names[1].'.'.$host_names[2]);
            $request->session()->put('host', $url->urlable->domain);
            if (! $request->session()->has('referer')) {
                $request->session()->put('referer', $request->server('HTTP_REFERER'));
            }
            $request->session()->put('analytics', $url->urlable->gapropertyid);
            $request->session()->put('template', $url->urlable->template);
            $request->session()->put('company.name', $url->urlable->company->name);
            $request->session()->put('company.id', $url->urlable->company->id);
            $request->session()->put('company.alias', strtolower(str_replace(' ', '_', $url->urlable->company->name)));
            if ($request->has('utm')) {
                $tracker = Tracker::where([
                    ['tool_id', '=', $url->urlable_id],
                    ['code', '=', $request->input('utm')],
                ])->first();
                if ($tracker && $tracker->language->abbreviation == App::getLocale()) {
                    //$tracker->increment('views');
                    $request->session()->put('utm', $request->input('utm'));
                    /*$trackerHit = $tracker->trackerHits()->create([
                        'type' => 'view',
                        'ip' => $request->ip(),
                    ]);*/
                }
            } else {
            }
            // foreach ($request->all() as $key => $value) {
            //     if ($key!=='utm') {
            //         $request->session()->put('queryparam.'.$key, $value);
            //     }
            // }

            //add model to request
            //$request->attributes->add(['product'=> $url->urlable]);

            return $next($request);
        }

        abort(400, 'URL does not exist');
    }
}
