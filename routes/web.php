<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class);
});

      
Route::group(['namespace'=>'App\Http\Controllers\Admin\Main','prefix'=>'admin'], function () {
 Route::get('/', IndexController::class);
 
});

Route::group(['namespace'=>'App\Http\Controllers\Admin\Category','prefix'=>'admin/categories'], function () {
    Route::get('/', IndexController::class)->name('admin.category.index');
    Route::get('/create', CreateController::class)->name('admin.category.create');
    Route::post('/', StoreController::class)->name('admin.category.store');
    Route::get('/{category}', ShowController::class)->name('admin.category.show');
    Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
    Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
});    


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
