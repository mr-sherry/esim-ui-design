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
})->name('admin.home');

Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard');
})->name('admin.dashboard');

Route::get('/admin/packages', function () {
    return view('admin.pages.packages');
})->name('admin.packages');

Route::get('/admin/regional', function () {
    return view('admin.pages.regional');
})->name('admin.regional');

Route::get('/admin/global', function () {
    return view('admin.pages.global');
})->name('admin.global');

Route::get('/admin/cart', function () {
    return view('admin.pages.cart');
})->name('admin.cart');
Route::get('/admin/dealers', function () {
    return view('admin.pages.dealers');
})->name('admin.dealers');
Route::get('/admin/dealers/single', function () {
    return view('admin.pages.singleDealer');
})->name('admin.singleDealer');
Route::get('/admin/credits', function () {
    return view('admin.pages.credits');
})->name('admin.credits');
Route::get('/admin/my-esim', function () {
    return view('admin.pages.my-esim');
})->name('admin.my-esim');
Route::get('/admin/single-esim', function () {
    return view('admin.pages.single-esim');
})->name('admin.single-esim');
