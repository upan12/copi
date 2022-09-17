<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardProductController;

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

Route::get('/', [HomepageController::class, 'index']);
Route::post('/pesan', [HomepageController::class, 'pesan']);
Route::post('/mesanMenu', [HomepageController::class, 'mesanMenu']);
Route::post('/mesanProduct', [HomepageController::class, 'mesanProduct']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
});



Route::get('/login', function () {
    return view('layouts.app');
});

Route::get('/dashboard/blog/checkSlug', [DashboardBlogController::class, 'checkSlug']);

Route::resource('/dashboard/menu', DashboardMenuController::class);
Route::resource('/dashboard/product', DashboardProductController::class);
Route::resource('/dashboard/blog', DashboardBlogController::class);


require __DIR__ . '/auth.php';
