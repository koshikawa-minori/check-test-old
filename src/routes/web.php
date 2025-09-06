<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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

Route::get('/hello', [TestController::class, 'index']);

//復習用
Route::get('/redo', function () {
  return view('redo.test');
});

Route::post('/redo/confirm', function () {
  return 'redo confirm ok';
});

Route::post('/redo', function () {
  return 'redo store ok';
});