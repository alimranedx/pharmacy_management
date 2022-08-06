<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'login']);
Route::get('/editor/dashboard', [EditorController::class, 'index'])->name('/editor_dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('/admin_dashboard');


Route::group(['middleware' => 'admin'], function(){
    Route::get('/create/editor', [EditorController::class, 'create_editor'])->name('/create_editor');
});





