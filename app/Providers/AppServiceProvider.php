<?php
  
namespace App\Providers;
  
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;
use App\Models\Navbar;
  
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
          
    }
  
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
        Paginator::defaultView('vendor.pagination.bootstrap-5');


 
        View::composer('*', function($view)
        {
            $navbars = Navbar::orderBy('ordering')->get();
            $view->with('navbars', $navbars);
        });
    }
}
