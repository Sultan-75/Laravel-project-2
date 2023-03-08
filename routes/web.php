<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});
Route::get('admin', [AuthController::class, 'index']);
Route::post('admin/auth', [AuthController::class, 'login'])->name('admin.auth');

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/dashboard', [AuthController::class, 'dashboard']);
    Route::get('admin/product', [ProductController::class, 'index']);
    Route::get('admin/product/manage_product', [ProductController::class, 'manage_product']);
});

Route::get('admin/logout', function () {
    session()->forget('ADMIN_LOGIN', true);
    session()->forget('ADMIN_ID');
    session()->forget('ADMIN_NAME');
    session()->flash('error', 'Logout Successfully');
    return redirect('admin');
});
