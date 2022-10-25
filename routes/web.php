<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


        Route::get('/redirect',[homeController::class,'direct']);

        Route::get('/',[homeController::class,'index']);
       


// admin

Route::get('/user',[adminController::class,'user']);
Route::get('/user/{id}',[adminController::class,'user_delete']);
Route::get('/menu',[adminController::class,'menu']);
//Reservation insert db
Route::post('/reservation',[adminController::class,'reservation']);
//Reservation show in admin panel 
Route::get('/reservation_show',[adminController::class,'reservation_show']);
// add product
Route::get('/add_product',[adminController::class,'add_product']);
// add  database product
Route::post('/productAddDb',[adminController::class,'productAddDb']);
//chefs admin
Route::get('/chefs',[adminController::class,'chefs']);


















