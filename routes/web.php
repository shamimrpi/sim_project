<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ShiftsController;
use App\http\Controllers\GroupsController;
use App\http\Controllers\YearsController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum'])->group(function(){
	
	//Student Class route list
	Route::resource('/classes',ClassesController::class);

	//Shift route list
	Route::resource('/shifts',ShiftsController::class);

	//Group route list
	Route::resource('/groups',GroupsController::class);

	//Year route list
	Route::resource('/years',YearsController::class);

});

