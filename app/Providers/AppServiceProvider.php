<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // ✅ Asegúrate de tener esta línea

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191); // ✅ Esta línea arregla el error de migración
    }

    public function register()
    {
        //
    }
}

