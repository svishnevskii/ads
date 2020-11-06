<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Helpes;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('key', );
    }

    protected function instance()
    {
        switch(Auth()->user()->getRoleName()){
            case 'publisher':
                $navigation = "Places";
                break;
            case 'advertiser':
                $navigation = "Ads";
                break;
            default:
                $navigation = "Ads";
        }

        $context = [
            'navigation' => $navigation,
        ];

        return $context;
    }
}
