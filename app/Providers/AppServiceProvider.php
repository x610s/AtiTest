<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Impl_UserRepository;
use App\Repository\I_UserRepository;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        $this->app->bind(I_UserRepository::class,Impl_UserRepository::class);
    }
}
