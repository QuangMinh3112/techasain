<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', App\Livewire\Auth\Login::class)->name('auth.login');
Route::prefix('admin')->group(function () {
    Route::get('', App\Livewire\Admin\Index::class)->name('admin.home');
    Route::get('user', App\Livewire\User\Index::class)->name('admin.user.list');
    Route::get('user/create', App\Livewire\User\Create::class)->name('admin.user.create');
    Route::get('user/edit/{id}', App\Livewire\User\Edit::class)->name('admin.user.edit');
});
