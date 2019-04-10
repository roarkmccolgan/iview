<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('implodeLast', function ($value, $glue = null, $lastGlue = null) {
            /** @var Collection $collection */
            $collection = $this;
            $first      = $collection->first();

            if (\is_array($first) || \is_object($first)) {
                return $collection->pluck($value)->implodeLast($glue, $lastGlue);
            }

            if ($collection->count() >= 2) {
                return $collection->slice(0, -1)->implode($value) . $glue . $collection->last();
            }

            return implode($value, $collection->all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
    }
}
