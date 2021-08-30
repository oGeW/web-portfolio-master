<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ProjectFormController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/store', [RegisterController::class, 'store']);

Route::get('/loginPage', [LoginController::class, 'loginPage'])->name('loginPage');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/mypage', [MyPageController::class, 'mypage'])->name('mypage');

Route::get('/projectForm', [ProjectFormController::class, 'projectForm']);

Route::post('/projectStore', [ProjectFormController::class, 'projectStore']);

Route::get('/dupleId', [RegisterController::class, 'duplicated']);

Route::get('/findForm', [LoginController::class, 'findForm']);

Route::post('/findId', [LoginController::class, 'findId'])->name('findId');

Route::post('/changeForm', [LoginController::class, 'changeForm'])->name('changeForm');

Route::post('/changePassword', [LoginController::class, 'changePwd']);