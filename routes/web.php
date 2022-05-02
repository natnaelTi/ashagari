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

Route::get('/login', [AuthController::class, 'prompt'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Auth::routes();

// Route::get('/dashboard', function () {
//     return view('cms.dashboard');
// })->name('dashboard');

// Route::get('/view_org', function () {
//     return view('cms.org.profile');
// })->name('view_org');

// Route::get('/list_events', function () {
//     return view('cms.event.list');
// })->name('list_events');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/list_events', [EventController::class, 'index'])->middleware('auth')->name('list_events');
Route::get('/create_event', [EventController::class, 'create'])->middleware('auth')->name('create_event');
Route::post('/store_event', [EventController::class, 'store'])->middleware('auth')->name('store_event');
Route::get('/edit_event/{id}', [EventController::class, 'edit'])->middleware('auth')->name('edit_event');
Route::post('/update_event/{id}', [EventController::class, 'update'])->middleware('auth')->name('update_event');
Route::get('/delete_event/{id}', [EventController::class, 'destroy'])->middleware('auth')->name('delete_event');