<?php

namespace App\Providers;

use App\Models\Plan;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('web.layout.master', function ($view) {
            $setting = Settings::where('id',1)->first();
            $plans = Plan::get();
            $projects = Project::get();
            $project_categories = ProjectCategory::get();
            $view->with('setting',$setting)->with('plans',$plans)->with('projects',$projects)->with('project_categories', $project_categories);
        });
    }
}
