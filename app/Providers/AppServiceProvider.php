<?php

namespace App\Providers;

use App\Models\Admin\Comment;
use App\Models\Admin\Menu;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Auth::loginUsingId(1);
            view()->composer('livewire.admin.layout.header', function($view) {
                $view->with('unseenComments', Comment::where('seen', 0)->get());
                $view->with('notifications', Notification::where('notifiable_id', Auth::user()->id)->where('read_at', null)->
                    orderBy('created_at', 'desc')->get());
            });

            view()->composer('livewire.customer.layouts.header', function($view){
                    $menus = Menu::where('status', 1)->get();
                    $view->with('menus', $menus);
            });






    }
}
