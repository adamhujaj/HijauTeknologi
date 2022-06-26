<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_Owner;
use App\Http\Controllers\controller_Staff;
use App\Http\Controllers\controller_Crud;
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

Route::get('/info', function () {
    return view('');
});

Route::get('/owner',[App\Http\Controllers\controller_Owner::class,'index'])->middleware('cekstatus');
Route::get('/staff',[App\Http\Controllers\controller_Staff::class,'index']);

Route::get('/crud',[App\Http\Controllers\controller_Crud::class,'index']);
Route::get('/crud/tambah',[App\Http\Controllers\controller_Crud::class,'tambah']);
Route::post('/crud/store',[App\Http\Controllers\controller_Crud::class,'store']);
Route::post('/crud/edit/{id}',[App\Http\Controllers\controller_Crud::class,'edit']);
Route::get('/crud/edit/{id}', [App\Http\Controllers\controller_Crud::class, 'edit']);
Route::post('/crud/edit/{id}', [App\Http\Controllers\controller_Crud::class, 'update']);
Route::get('/crud/hapus/{id}', [App\Http\Controllers\controller_Crud::class, 'hapus']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
