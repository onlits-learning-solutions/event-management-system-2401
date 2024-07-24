<?php

use App\Http\Controllers\Guest_ListController;
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