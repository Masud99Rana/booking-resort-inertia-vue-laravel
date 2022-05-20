<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),

    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'role_user', 'verified'])->name('dashboard');


Route::get('/admin', function () {
    return Inertia::render('Admin/Index');
})->middleware(['auth', 'role_admin', 'verified'])->name('admin.dashboard');



Route::group(['middleware' => ['auth', 'admin']], function () {
});

require __DIR__ . '/auth.php';
