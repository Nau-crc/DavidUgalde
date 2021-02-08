<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DavidController;

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


// IMAGENES
Route::get('store_image', 'StoreImageController@index');

Route::post('store_image/insert_image', 'StoreImageController@insert_image');

Route::get('store_image/fetch_image/{id}', 'StoreImageController@fetch_image');



Route::get('/courses', function () {
    return view('courses.courses');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/createCourse', [CourseController::class, 'create'])->name('createCourse');
Route::post('/Course/{id}', [CourseController::class, 'store'])->name('storeCourse');
Route::patch('/edit/{id}', [CourseController::class, 'edit'])->name('editCourse');
Route::post('/Course/{id}', [CourseController::class, 'update'])->name('updateCourse');


