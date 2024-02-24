<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Feature\FeatureController;
use App\Http\Controllers\Permission\PermissionController;

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

Route::get('/login', [LoginController::class, 'show'])->name('login');

Route::post('/login', [LoginController::class , 'login'])->name('login.post');

Route::middleware('auth')->prefix('dashboard')->group(function (){

    Route::get('/' , function (){
       return view('pages.dashboard.index');
    })->name('dashboard.index');

    Route::resource('/users', UserController::class);

    Route::middleware('toLower')->group(function (){
        Route::resource('/roles', RoleController::class);
        Route::resource('/features', FeatureController::class);
        Route::resource('/permissions', PermissionController::class);
    });
});
