<?php

use Bitsoftsol\LaravelAdministration\Http\Controllers\Api\LaravelAdmin\LaravelAdminApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth:sanctum'])->group(function() {

    Route::prefix('crud')->group(function() {
        Route::get('models', [LaravelAdminApiController::class, 'models']);

        Route::resource('{crud}', LaravelAdminApiController::class)
            ->parameters(['{crud}' => 'id'])
            ->names('crud');
    });

});



