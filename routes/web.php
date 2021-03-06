<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ArticleController;

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
    return view('main');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/contact',[ ContactController::class,'index']);
Route::get('/article',[ ArticleController::class,'index']); 
Route::post('/article',[ArticleController::class,'create']);
