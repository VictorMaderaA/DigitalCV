<?php

namespace App\Providers;
use App\User;
use App\Models\Template;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['files.fields', 'resumes.fields'], function ($view) {
            $userItems = User::pluck('email','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['resumes.fields', 'template_view_histories.fields'], function ($view) {
            $templateItems = Template::pluck('name','id')->toArray();
            $view->with('templateItems', $templateItems);
        });

        View::composer(['cv-templates.*'], function ($view) {
            $defaultView = "cv-templates.def".str_replace(".blade", "",pathinfo($view->getPath())['filename']);
            $view->with('defaultView', $defaultView);
        });
        //
    }
}
