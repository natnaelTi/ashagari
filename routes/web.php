<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MailingListController;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/event', [PageController::class, 'event'])->name('event');

Route::get('/youth', [PageController::class, 'youth'])->name('strategy_youth');
Route::get('/women', [PageController::class, 'women'])->name('strategy_women');
Route::get('/leader', [PageController::class, 'leaders'])->name('strategy_leader');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');

Route::post('/subscribe', [MailingListController::class, 'store'])->name('subscribe');

Route::get('/login', [AuthController::class, 'prompt'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/show_event/{event_id}', [EventController::class, 'show'])->name('show_event');

Route::get('/rsvp/{event_id}', [PageController::class, 'rsvp'])->middleware('guest')->name('rsvp');
Route::post('/store_attendee', [PageController::class, 'register'])->middleware('guest')->name('store_rsvp');

Route::get('/gsc', [PageController::class, 'gsc'])->middleware('guest')->name('gsc');

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
Route::get('/cms_export_attendees/{event_id}', [AttendeeController::class, 'export_verified'])->middleware('auth')->name('cms_export_attendees');

Route::get('/cms_show_organisation/{org_id}', [OrganisationController::class, 'show'])->middleware('auth')->name('cms_show_organisation');
Route::get('/cms_edit_organisation/{org_id}', [OrganisationController::class, 'edit'])->middleware('auth')->name('cms_edit_organisation');
Route::post('/cms_update_organisation/{org_id}', [OrganisationController::class, 'update'])->middleware('auth')->name('cms_update_organisation');
Route::post('/cms_delete_organisation/{org_id}', [OrganisationController::class, 'destroy'])->middleware('auth')->name('cms_delete_organisation');

Route::get('/cms_show_feedback', [FeedbackController::class, 'index'])->middleware('auth')->name('cms_show_feedback');
Route::get('/cms_change_feedback_status/{id}', [FeedbackController::class, 'change_status'])->middleware('auth')->name('cms_change_feedback_status');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
