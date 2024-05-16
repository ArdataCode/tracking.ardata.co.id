<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Clear Cache
Route::get('/clear-cache', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";
    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";
    $clearconfig = Artisan::call('config:clear');
    echo "Config cleared<br>";
    $clearcompiled = Artisan::call('clear-compiled');
    echo "Compiled cleared<br>";
});

Route::get('/', [HomeController::class,'frontpage'])->name('frontpage');
Route::post('/track', [HomeController::class,'trackCheck'])->name('track');
Route::get('/track/{awb}', [HomeController::class,'trackGet'])->name('trackGet');
Route::get('/rate', [HomeController::class,'checkRate'])->name('check-rate');
Route::post('/rate', [HomeController::class,'checkRateSubmit'])->name('check-rate-submit');
Route::get('/rate/{from}/{to}', [HomeController::class,'checkRateGet'])->name('check-rate-result');

Route::get('/location', [HomeController::class,'checkLocation'])->name('check-location');
Route::post('/location', [HomeController::class,'checkLocationSubmit'])->name('check-location-submit');
Route::get('/location/{city}', [HomeController::class,'checkLocationGet'])->name('check-location-result');

Route::get('/about', [HomeController::class,'pageAbout'])->name('about');

Route::get('/admin/shipping-orders/print/{awb}', [HomeController::class,'ShippingOrdersPrint'])->name('admin.shipping-orders.print');