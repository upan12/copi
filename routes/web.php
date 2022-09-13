<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/posts', function () {
    return view('dashboard.posts.index');
});

Route::get('/dashboard/posts/create', function () {
    return view('dashboard.posts.create');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');

require __DIR__ . '/auth.php';
