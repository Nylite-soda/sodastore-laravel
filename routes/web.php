<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;


Auth::routes();

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
});

// // Admin-only route
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
// });


Route::get('/', function () {
    return view('index');
}) -> name('index');

Route::get('/home',function(){
    return view('home');
}) -> name('home');

Route::get('/contact',function()
{
    return view(('contact'));
}) -> name('contact');


Route::get('/checkout',[HomeController::class,'checkout']) -> name('checkout');

// Ro
Route::get('/payment',function()
{
    return view(('payments'));
}) -> name('payment');

Route::get('/orders',function()
{
    return view(('orders'));
}) -> name('orders');

Route::get('/product',function()
{
    return view(('product-view'));
}) -> name('productview');

Route::get('/shopreview',[HomeController::class,'shopHome']) -> name('shophome');

Route::get('/market',function(){
    return view('shop');
}) -> name('shop');

// Route::post('/register', [RegisterController::class, 'register'])->name('register');
// Route::get('/shop',[HomeController::class,'shop']) -> name('shop');

// Route::get('/contact',function()
// {
//     return view(('contact'));
// }) -> name('contact');

Route::get('/thank-you', function () {
    return view('thank-you');
}) -> name('thank-you');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');