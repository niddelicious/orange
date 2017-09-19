<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    private $categories;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['orange.shared.nav', 'orange.shared.menu'],
            function (View $view) {
                if (!$this->categories) {
                    $this->categories = Category::getNavigation();
                }
                $view->with('categories', $this->categories);
            }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
