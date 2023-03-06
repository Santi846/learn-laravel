<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebasController;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use Ramsey\Uuid\Builder\FallbackBuilder;

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

/*
    GET -> Request a Resource
    POST -> Create a new Resource
    PUT -> Update a Resource -> Update every single value in a single route
    PATCH -> Modify a Resource -> Modify values that have been changed in a single reoute
    DELETE -> Delete a Resource
    OPTIONS -> Ask the server which verbs are allowed
*/ 

// Route::get('/', function () {
//     return view('welcome');

// });

/**Resource method */
// Route::resource('blog', PostsController::class);

/*ROUTE FOR __INVOKE()*/
Route::get('/', HomeController::class);



////////////////////////////////////////////////////////////
//Route string regular expression, no numbers
// Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name');

//Multiple regex
// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
//     ->whereNumber('id')
//     ->whereAlpha('name');



Route::prefix('/')->group(function(){

/*GET REQUEST*/
    Route::get('/create', [PruebasController::class, 'create'])->name('create');
    Route::get('/', [PruebasController::class, 'index'])->name('index');
//Route number regular expression
    Route::get('/{id}', [PruebasController::class, 'show'])->name('show');

// /*POST REQUEST*/
    
    Route::post('/', [PruebasController::class, 'store'])->name('blog.store');

// /*PUT OR PATCH REQUEST*/
    Route::get('/edit/1', [PruebasController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PruebasController::class, 'update'])->name('blog.update');

// /*DELETE REQUEST*/
    Route::delete('/{id}', [PruebasController::class, 'destroy'])->name('blog.detroy');
});

/*MULTIPLE HTTP VERBS */

/**Routing setting HTTP communication protocol */
// Route::match(['GET','POST'], '/blog', [PostsController::class, 'index']);

/**Routing obviating communication protocol */
// Route::any('/blog', [PostsController::class, 'index']);

/**Return a View */
// Route::view('/blog', 'blog.index', ['name' => 'Code with Santi']);

/**FALLBACK ROUTE */

Route::fallback(FallbackController::class);