<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GenericsAccountController;
use App\Http\Controllers\AssignedController;
use App\Http\Controllers\MembersAttentionController;
use App\Http\Controllers\MovementController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('members', MemberController::class);
Route::resource('generics-accounts', GenericsAccountController::class);
Route::resource('assigned', AssignedController::class);
Route::resource('members-attention', MembersAttentionController::class);
Route::resource('movement', MovementController::class);
