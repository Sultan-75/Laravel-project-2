<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SamplesController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/products', [FrontController::class, 'products']);
Route::get('/product/details/{id}', [FrontController::class, 'product_details']);
Route::get('/product/oriental', [FrontController::class, 'oriental']);
Route::get('/product/french', [FrontController::class, 'french']);

Route::get('admin', [AuthController::class, 'index']);
Route::post('admin/auth', [AuthController::class, 'login'])->name('admin.auth');

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/dashboard', [AuthController::class, 'dashboard']);

    Route::get('admin/product', [ProductController::class, 'index']);
    Route::get('admin/product/manage_product', [ProductController::class, 'manage_product']);
    Route::get('admin/product/manage_product/{id}', [ProductController::class, 'manage_product']);
    Route::post('admin/product/manage_product_process', [ProductController::class, 'manage_product_process'])->name('product.manage_product_process');
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete']);
    Route::get('admin/product/status/{status}/{id}', [ProductController::class, 'status']);

    Route::get('admin/sample', [SamplesController::class, 'index']);
    Route::get('admin/sample/manage_sample', [SamplesController::class, 'manage_sample']);
    Route::post('admin/sample/manage_sample_process', [SamplesController::class, 'manage_sample_process'])->name('sample.manage_sample_process');
    Route::get('admin/sample/delete/{id}', [SamplesController::class, 'delete']);
});

Route::get('admin/logout', function () {
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->forget('ADMIN_NAME');
    session()->flash('error', 'Logout Successfully');
    return redirect('admin');
});
