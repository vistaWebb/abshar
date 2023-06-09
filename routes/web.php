<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\AuthController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\FitrahController;
use App\Http\Controllers\Home\PaymentController;
use App\Http\Controllers\Admin\CharityController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExpiationController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SearchUserController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\SearchDonationController;

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

//DASHBOARD
// Route::get('/admin_panel/dashboard', function () {
//     return view('admin.dashboard');
// })->name('dashboard');
Route::get('/admin_panel/dashboard' , [DashboardController::class , 'index'])->name('dashboard');

// ADMIN_PANEL
Route::prefix('admin_panel/management')->name('admin.')->group(function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('donations', DonationController::class);
    Route::resource('charities', CharityController::class);
    Route::resource('expiations', ExpiationController::class);
    Route::resource('fitrahs', FitrahController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('orders', OrderController::class);
    Route::get('/search-user' , [SearchUserController::class , 'searchUser'])->name('search.user');
    Route::get('/search-donation' , [SearchDonationController::class , 'searchDonation'])->name('search.donation');


});

Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');

Route::get('/checkout' , [CartController::class , 'index'])->name('checkout.index');
Route::post('/payment' , [PaymentController::class , 'payment'])->name('home.payment');
Route::get('/payment-verify' , [PaymentController::class , 'paymentVerify'])->name('home.payment_verify');

//home
Route::get('/' , [HomeController::class , 'index'])->name('home.index');

