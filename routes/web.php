<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.layout.layout');
});
Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard');
});
Route::get('/admin/packages', function () {
    return view('admin.pages.packages');
});
Route::get('/admin/regional', function () {
    return view('admin.pages.regional');
});
Route::get('/admin/global', function () {
    return view('admin.pages.global');
});
Route::get('/admin/cart', function () {
    return view('admin.pages.cart');
});
