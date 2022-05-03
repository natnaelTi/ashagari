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

Route::get('/show_event/{event_id}', [EventController::class, 'show'])->name('show_event');

Route::get('/register/{event_id}', [AttendeeController::class, 'create'])->middleware('guest')->name('cms_create_attendee');
Route::post('/store_attendee', [AttendeeController::class, 'store'])->middleware('guest')->name('cms_store_attendee');

Auth::routes();

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/cms_list_events', [EventController::class, 'index'])->middleware('auth')->name('cms_list_events');
Route::get('/cms_create_event', [EventController::class, 'create'])->middleware('auth')->name('cms_create_event');
Route::post('/cms_store_event', [EventController::class, 'store'])->middleware('auth')->name('cms_store_event');
Route::get('/cms_edit_event/{event_id}', [EventController::class, 'edit'])->middleware('auth')->name('cms_edit_event');
Route::post('/cms_update_event/{event_id}', [EventController::class, 'update'])->middleware('auth')->name('cms_update_event');
Route::get('/cms_delete_event/{event_id}', [EventController::class, 'destroy'])->middleware('auth')->name('cms_delete_event');

Route::get('/cms_list_attendees/{event_id}', [AttendeeController::class, 'index'])->middleware('auth')->name('cms_list_attendees');
Route::post('/cms_confirm_attendee/{attendee_id}/{event_id}', [AttendeeController::class, 'confirm'])->middleware('auth')->name('cms_confirm_attendee');
Route::post('/cms_delete_attendee/{attendee_id}', [AttendeeController::class, 'destroy'])->middleware('auth')->name('cms_delete_attendee');

Route::get('/cms_show_organisation/{org_id}', [OrganisationController::class, 'show'])->middleware('auth')->name('cms_show_organisation');
Route::get('/cms_edit_organisation/{org_id}', [OrganisationController::class, 'edit'])->middleware('auth')->name('cms_edit_organisation');
Route::post('/cms_update_organisation/{org_id}', [OrganisationController::class, 'update'])->middleware('auth')->name('cms_update_organisation');
Route::post('/cms_delete_organisation/{org_id}', [OrganisationController::class, 'destroy'])->middleware('auth')->name('cms_delete_organisation');
