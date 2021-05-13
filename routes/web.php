<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController; //使うコントローラーを呼ぶ

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

/**
 * ルーティング
 * laravel8から書き方変わった
 * [BlogController::class, 'メソッド名']
 */
Route::get('/',[BlogController::class, 'showList'])->name('blogs');
