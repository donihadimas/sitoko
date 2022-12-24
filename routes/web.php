<?php

use App\Http\Controllers\ClientMasterDataCategoryProduct;
use App\Http\Controllers\ClientMasterDataProduct;
use App\Http\Controllers\ClientMasterDataProductBrand;
use App\Http\Controllers\ClientMasterDataProductCategory;
use App\Http\Controllers\DashboardControlller;
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

Route::redirect('/', '/dashboard');

// Home Page
Route::get('/dashboard', [DashboardControlller::class, 'index']);
Route::prefix('master-data')->group(function () {
    Route::get('/product', [ClientMasterDataProduct::class, 'index']);
    Route::get('/product-category', [ClientMasterDataProductCategory::class, 'index']);
    Route::get('/product-brand', [ClientMasterDataProductBrand::class, 'index']);
});
