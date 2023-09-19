<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/api/tasks',[TaskController::class,'index']);
Route::get('/api/tasks/{id}',[TaskController::class,'show']);
//view útvonalak
Route::get('/task/list',[TaskController::class,'listView']);
Route::get('/task/edit/{id}',[TaskController::class,'editView']);
Route::get('/task/new',[TaskController::class,'newView']);
Route::get('/api/users',[UserController::class,'index']);
Route::get('/api/users/{id}',[UserController::class,'show']);
//view útvonalak
Route::get('/user/list',[UserController::class,'listView']);

//require __DIR__ . '/auth.php';
