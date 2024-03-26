<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\UserController;

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

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/simpanuser', [AuthController::class, 'simpanuser']);
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);
Route::get('/home', [NavController::class, 'home'])-> middleware('auth');
Route::get('/user', [NavController::class, 'user'])->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/pencarianuser', [NavController::class, 'pencarianuser'])->middleware('auth');

Route::get('/contact', [NavController::class, 'contact'])->middleware('auth');
Route::get('/contact/form', [NavController::class, 'formcontact'])->middleware('auth');
Route::post('/contact/save', [NavController::class, 'save'])->middleware('auth');
Route::get('/pencariancontact', [NavController::class, 'pencariancontact'])->middleware('auth');
Route::get('/contact/form-edit/{id}', [NavController::class, 'formeditcontact'])->middleware('auth');
Route::put('/contact/update/{id}', [NavController::class, 'update'])->middleware('auth');
Route::get('/contact/delete/{id}', [NavController::class, 'delete'])->middleware('auth');


Route::get('/address', [NavController::class, 'address'])->middleware('auth');
Route::get('/address/form', [NavController::class, 'formaddress'])->middleware('auth');
Route::post('/address/save', [NavController::class, 'saveaddress'])->middleware('auth');
Route::get('/address/form-edit/{id}', [NavController::class, 'formeditaddress'])->middleware('auth');
Route::put('/address/update/{id}', [NavController::class, 'updateaddress'])->middleware('auth');
Route::get('/address/delete/{id}', [NavController::class, 'deleteaddress'])->middleware('auth');




