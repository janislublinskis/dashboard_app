<?php

namespace App\Providers;

use App\Services\Html\Parsing\ParsedHtmlContract;
use App\Services\Html\Parsing\ParsedHtmlProvider;
use App\Services\Html\Scraping\ScrappedHtmlContract;
use App\Services\Html\Scraping\ScrappedHtmlProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ParsedHtmlContract::class, ParsedHtmlProvider::class);
        $this->app->bind(ScrappedHtmlContract::class, ScrappedHtmlProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
