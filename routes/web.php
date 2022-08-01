<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::get('customer',[CustomerController::class, 'list'])->name('customer');
    Route::get('customer/add',[CustomerController::class, 'add'])->name('add-customer');
    Route::post('customer/store',[CustomerController::class, 'store'])->name('store-customer');
    Route::get('customer/{id}/edit',[CustomerController::class, 'edit'])->name('edit-customer');
    Route::post('customer/{id}/update',[CustomerController::class, 'update'])->name('update-customer');
    Route::get('customer/{id}/delete',[CustomerController::class, 'delete'])->name('delete-customer');


    Route::get('room',[RoomController::class, 'list'])->name('room');
    Route::get('room/add',[RoomController::class, 'add'])->name('add-room');
    Route::post('room/store',[RoomController::class, 'store'])->name('room.store');
    Route::get('room/{id}/edit',[RoomController::class, 'edit'])->name('edit-room');
    Route::post('room/{id}/update',[RoomController::class, 'update'])->name('update-room');
    Route::get('room/{id}/delete',[RoomController::class, 'delete'])->name('delete-room');

    Route::get('salary',[SalaryController::class, 'list'])->name('list-salary');
    Route::get('add',[SalaryController::class, 'add'])->name('add-salary');
    Route::post('store',[SalaryController::class, 'store'])->name('store-salary');
    Route::get('edit/{id}',[SalaryController::class, 'edit'])->name('edit-salary');
    Route::post('update',[SalaryController::class, 'update'])->name('update-salary');
    Route::delete('delete/{id}',[SalaryController::class, 'update'])->name('delete-salary');

    Route::get('service',[ServiceController::class, 'list'])->name('list-service');
    Route::get('service/add',[ServiceController::class, 'add'])->name('add-service');
    Route::post('service/store',[ServiceController::class, 'store'])->name('service.store');
    Route::get('service/{id}/edit',[ServiceController::class, 'edit'])->name('edit-service');
    Route::post('service/{id}/update',[ServiceController::class, 'update'])->name('update-service');
    Route::get('service/{id}/delete',[ServiceController::class, 'delete'])->name('delete-service');
});

Route::get('login',[AuthController::class, 'login']);
Route::post('login',[AuthController::class, 'goHome'])->name('login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

