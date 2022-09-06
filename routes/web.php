<?php

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
    return view('home');
});

Route::get('/trang-chu', function(){
    return view('home');
});

Route::get('/gio-hang', function(){
    return view('giohang');
});

Route::get('/product-info', function(){
    return view('product_info');
});

Route::get('/gioi-thieu', function(){
    return view('gioithieu');
});

Route::get('/tintuc-sukien', function(){
    return view('tintuc_sukien');
});

Route::get('/sach-da-xem', function(){
    return view('sachdaxem');
});

Route::get('/cach-dat-hang', function(){
    return view('cachdathang');
});

Route::get('/lien-he', function(){
    return view('lienhe');
});

Route::get('/dang-ky', function(){
    return view('register');
});

Route::get('/dang-nhap', function(){
    return view('login');
});


