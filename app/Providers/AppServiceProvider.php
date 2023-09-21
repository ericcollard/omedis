<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\DataType;
use App\Models\Attribute;
use App\Models\AttributeList;
use App\Models\AttributeListValue;
use App\Models\Unit;

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
        Route::model('datatype', DataType::class);
        Route::model('attribute', Attribute::class);
        Route::model('attributelist', AttributeList::class);
        Route::model('attributelistvalue', AttributeListValue::class);
        Route::model('attributeunit', Unit::class);
    }
}
