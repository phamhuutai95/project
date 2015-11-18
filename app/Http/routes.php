<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('', function () {
    return view('index');
});

Route::get('/1', function () {
    return view('1');
});

Route::get('/2', function () {
    return view('2');
});

Route::get('/Aonam', function () {
    return view('Aonam');
});

Route::get('/Aonam2', function () {
    return view('Aonam2');
});

Route::get('/Aonam3', function () {
    return view('Aonam3');
});
Route::get('/Aonu', function () {
    return view('Aonu');
});
Route::get('/Aonu2', function () {
    return view('Aonu2');
});

Route::get('/Aonu3', function () {
    return view('Aonu3');
});

Route::get('/Benplay', function () {
    return view('Benplay');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/Cindydrella', function () {
    return view('Cindydrella');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/D&N FASHION', function () {
    return view('D&N FASHION');
});

Route::get('/JULIUS', function () {
    return view('JULIUS');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/Phukiennam', function () {
    return view('Phukiennam');
});

Route::get('/Phukiennam2', function () {
    return view('Phukiennam2');
});

Route::get('/Phukiennu', function () {
    return view('Phukiennu');
});

Route::get('/Phukiennu1', function () {
    return view('Phukiennu1');
});

Route::get('/pk1', function () {
    return view('pk1');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/Quannam', function () {
    return view('Quannam');
});

Route::get('/Quannam2', function () {
    return view('Quannam2');
});

Route::get('/Quannam3', function () {
    return view('Quannam3');
});

Route::get('/Quannu', function () {
    return view('Quannu');
});

Route::get('/Quannu2', function () {
    return view('Quannu2');
});

Route::get('/Quannu3', function () {
    return view('Quannu3');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop1', function () {
    return view('shop1');
});

Route::get('/shop2', function () {
    return view('shop2');
});

Route::get('/Tatca', function () {
    return view('Tatca');
});

Route::get('/Tatca1', function () {
    return view('Tatca1');
});

Route::get('/Tatca2', function () {
    return view('Tatca2');
});

Route::get('/Tatca3', function () {
    return view('Tatca3');
});

Route::get('/Thoitrangtreem', function () {
    return view('Thoitrangtreem');
});

Route::get('/Thoitrangtreem2', function () {
    return view('Thoitrangtreem2');
});

Route::get('/Thoitrangtreem3', function () {
    return view('Thoitrangtreem3');
});

Route::get('/Thongtincanhan', function () {
    return view('Thongtincanhan');
});



Route::get('hello', function () {
    return 'hello again!';
});