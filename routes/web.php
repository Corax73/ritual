<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function () {
    return view('home.index');
}) -> name('dev');*/

Auth::routes();

Route::controller(HomeController::class)
->group(function() {
    Route::get('/', 'index') -> name('home.index');
    Route::get('/product/{id}', 'show') -> name('product.show');
    Route::post('/', 'store') -> name('home.store');
    Route::delete('destroy/{id}', 'destroy') -> name('product.destroy');
    Route::get('/product/{id}/edit', 'edit') -> name('product.edit');
    //Route::patch('/news/{id}', 'update') -> name('news.update');
});
