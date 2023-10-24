<?php

use Bitsoftsol\LaravelAdministration\Http\Controllers\LaravelAdmin\CrudSchemaController;
use Bitsoftsol\LaravelAdministration\Http\Controllers\LaravelAdmin\LaravelAdminController;

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





Route::middleware('auth')->group(function() {

    Route::prefix('crud')->group(function() {
        Route::get('', [LaravelAdminController::class, 'crud']);

        // dynamic routing for the CRUD operations
        Route::resource('{type}', LaravelAdminController::class)
            ->parameters(['{type}' => 'id'])
            ->names('type');
    });

    // Routes for CRUD Schema
    Route::prefix('crud-schema')->group(function() {
        Route::get('', [CrudSchemaController::class, 'list']);
        Route::get('create', [CrudSchemaController::class, 'create']);
        Route::post('create-model', [CrudSchemaController::class, 'createModel']);

        Route::prefix('')->group(function(){
            Route::get('{type}/edit', [CrudSchemaController::class, 'edit']);
            Route::get('{type}/editor', [CrudSchemaController::class, 'editor']);
            Route::post('{type}/editor/save', [CrudSchemaController::class, 'saveEditor']);
            Route::get('{type}/migrate', [CrudSchemaController::class, 'migrate']);
            Route::post('{type}/delete', [CrudSchemaController::class, 'delete']);
            Route::post('{type}/store', [CrudSchemaController::class, 'store']);
        });

    });

});



