<?php

use App\Http\Controllers\admin\adminAuthController;
use App\Http\Controllers\admin\adminDashBoardController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\myImageController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\userUploadController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomePageController::class,'index'])->name('home');



Route::get('/login',[userAuthController::class,'showLogin'])->name('user.login.show');
Route::post('/login',[userAuthController::class,'Login'])->name('user.login');
Route::get('/logout',[userAuthController::class,'logout'])->name('user.logout');

Route::get('/register',[userAuthController::class,'showRegister'])->name('user.register.show');
Route::post('/register',[userAuthController::class,'register'])->name('user.register');


Route::group(['prefix'=>'user','middleware'=>'userAuth'],function(){
    Route::get('upload',[userUploadController::class,'index'])->name('user.upload.show');
    Route::post('upload',[userUploadController::class,'upload'])->name('user.upload');
    Route::get('my-image',[myImageController::class,'index'])->name('user.myImages.show');
    Route::get('my-financial',[FinancialController::class,'index'])->name('user.myFinancial.show');
    Route::get('my-financial/cashOut',[FinancialController::class,'cashOut'])->name('user.myFinancial.cashOut');
});








Route::get('/admin/register',[adminAuthController::class,'showRegister'])->name('admin.dashboard.register.show');
Route::post('/admin/register',[adminAuthController::class,'Register'])->name('admin.dashboard.register');

Route::get('/admin/login',[adminAuthController::class,'showLogin'])->name('admin.dashboard.login.show');
Route::post('/admin/login',[adminAuthController::class,'login'])->name('admin.dashboard.login');
Route::get('/admin/logout',[adminAuthController::class,'logout'])->name('admin.logout');

Route::group(['prefix'=>'admin','middleware'=>'adminAuth'],function(){
    Route::get('dashboard',[adminDashBoardController::class,'dashboard'])->name('admin.dashboard');
});



