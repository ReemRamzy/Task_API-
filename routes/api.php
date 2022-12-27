<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// return tasks index
Route::resource('tasks', TaskController::class);
// return posts index
Route::resource('posts', PostController::class);
// register
Route::post('register' , [RegisterationController::class ,'store']);
// login
Route::post('login' , [SessionController::class ,'store']);
// logout
Route::post('logout' , [SessionController::class ,'destroy']);
//change use role
Route::post('role' , [RoleController::class ,'addRole']);


