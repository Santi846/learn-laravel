<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/')->group(function(){

    /*GET REQUEST*/
        Route::get('/create', [PruebasController::class, 'create'])->name('create');
        Route::get('/', [PruebasController::class, 'index'])->name('index');
    //Route number regular expression
        Route::get('/{id}', [PruebasController::class, 'show'])->name('show');
    
        Route::get('/users', [PruebasController::class, 'users'])->name('users');
    
    // /*POST REQUEST*/
        
        Route::post('/', [PruebasController::class, 'store'])->name('store');
    
    // /*PUT OR PATCH REQUEST*/
        Route::get('/edit/{id}', [PruebasController::class, 'edit'])->name('edit');
        Route::patch('/{id}', [PruebasController::class, 'update'])->name('update');
    
    // /*DELETE REQUEST*/
        Route::delete('/{id}', [PruebasController::class, 'destroy'])->name('destroy');
    });