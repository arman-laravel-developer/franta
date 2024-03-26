<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use App\Models\Ticket;
use Cart;
use Illuminate\Support\ServiceProvider;
use View;
use Session;

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
        View::composer(['*'], function ($view) {
            $view->with('cartContests', Cart::getContent());
            $view->with('ticketCount', Ticket::where('draw_status', 'Pending')->where('userAuth_id', Session::get('userAuth_id'))->count());
        });
    }
}
