<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
  
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BillingController;
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
Route::get('/', [ArticleController::class, 'index']);

Route::get
('admin/insert',[ArticleController::class, 'storedata']);

Route::post('admin/insert',[ArticleController::class, 'insertdatatoDB']);




Route::get('admin/adminhome',[ArticleController::class, 'insertmenu']);




Route::get('articles/slide',[ArticleController::class,'slide']);





Route::get('admin/delmenu1/{id}',
[ArticleController::class,'deletem']);
Route::get('admin/delmenu2/{id}',
[ArticleController::class,'deletek']);

Route::get('admin/delmenu', [ArticleController::class, 'delmenus']);
Route::get('admin/adminhome', [ArticleController::class, 'adminhome']);
Route::get('admin/adminhome/{id}', [ArticleController::class, 'destroy']);

Route::get('articles/mmfood',[ArticleController::class,'mmfood']);
Route::get('articles/makeorder1/{id}',[ArticleController::class,'selectmmfood'])->middleware('auth');
Route::get('articles/makeorder2/{id}',[ArticleController::class,'selectkfood'])->middleware('auth');
Route::get('articles/makeorder3/{id}',[ArticleController::class,'pfood']);
Route::get('articles/makeorder',[ArticleController::class,'townships']);
//insert Billing
Route::get('articles/stripe', [BillingController::class, 'showbill'])->middleware('auth');
Route::post('articles/stripe',[BillingController::class, 'storebill'])->name('stripe.post');
Route::get('articles/allpay', [BillingController::class, 'allpay']);

Route::get('createpaypal', [BillingController::class, 'createpaypal'])->name('createpaypal');
Route::get('processpaypal', [BillingController::class, 'processpaypal'])->name('processpaypal');
Route::get('success', [BillingController::class, 'success'])->name('success');

Route::get('cancel', [BillingController::class, 'cancel'])->name('cancel');
Route::get
('admin/insertintomm',
[BillingController::class, 'myanmarfood']);
Route::post
('admin/insertintomm',
[BillingController::class, 'myanmarfood']);
Route::post
('admin/adminhome',
[BillingController::class, 'kfood']);

Route::post
('articles/makeorder',
[BillingController::class, 'ordermmfood']);

Route::get
('articles/ser',
[ArticleController::class, 'ser']);


Route::get
('articles/order',
[ArticleController::class, 'order']);
//reset password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get
('articles/bill',
[BillingController::class, 'react']);
Route::get
('articles/test',
[ArticleController::class, 'townships']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
