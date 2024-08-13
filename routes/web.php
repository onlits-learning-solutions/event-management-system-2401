<?php


use App\Http\Controllers\Guest_ListController;
use App\Http\Controllers\EventController;

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


Route::get('/guest_list',[Guest_ListController::class,'guest_list'])->name('guest_list.all');
Route::get('/create_guest',[Guest_ListController::class,'create'])->name('create.guest');
Route::post('/store',[Guest_ListController::class,'store'])->name('store.guest');
Route::get('/guest_details/{id}',[Guest_ListController::class,'show'])->name('guest_details');
Route::get('/guest_edit/{id}',[Guest_ListController::class,'edit'])->name('guest_edit');
Route::post('/guest_update',[Guest_ListController::class,'update'])->name('guest_update');
Route::get('/guest_delete/{id}',[Guest_ListController::class,'delete'])->name('guest_delete');


Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

