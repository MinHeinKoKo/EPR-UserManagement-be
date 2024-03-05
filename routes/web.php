<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Role\RoleController;
use Illuminate\Support\Facades\Storage;

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
    $categories = json_decode(Storage::disk('public')->get('categories.json'));
    $products = json_decode(Storage::disk('public')->get('products.json'));
    return view('pages.e-commerce.home', compact(['categories','products']));
})->name('home');

Route::get('/shops', function () {
    return "Welcome from shops page";
})->name('shops');

Route::get('/about-us', function () {
    return "Welcome from about-us page";
})->name('about-us');

Route::get('/login', [LoginController::class, 'show'])->name('login');

Route::post('/login', [LoginController::class , 'login'])->name('login.post');

Route::middleware('auth')->prefix('dashboard')->group(function (){

    Route::get('/' , function (){
       return view('pages.dashboard.index');
    })->name('dashboard.index');

    Route::resource('/users', UserController::class);

    Route::resource('/roles', RoleController::class);
});
