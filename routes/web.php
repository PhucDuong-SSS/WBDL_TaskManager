<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
Route::view('/', 'modules.master');
Route::view('/dashboard', 'modules.customer.dashboard');
Route::view('/create', 'modules.customer.create');



Route::get('login',[AuthController::class, 'showFormLogin'])->name('login');
Route::post('login',[AuthController::class, 'login'])->name('auth.login');

 Route::middleware(['auth','checkActiveAccount'])->prefix('customer')->group(function (){
    Route::get('/',[CustomerController::class, 'index'])->name('customer.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');

    Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');

    Route::get('{id}/show',[CustomerController::class, 'show'])->name('customer.show)');
    Route::get('{id}/edit',[CustomerController::class, 'edit'])->name('customer.edit');
    Route::patch('{id}/update',[CustomerController::class, 'update'])->name('customer.update');
    Route::delete('{id}', [CustomerController::class , 'delete'])->name('customer.delete');

});
