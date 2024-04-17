<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VendedorController;

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

Route::get('/home', [HomeController::class, 'home'])->name('home-principal');

Route::get('/cart', [HomeController::class, 'cart'])->name('home-cart');

Route::get('/pagar', [CartController::class, 'pagar'])->name('cart-pagar');

Route::get('/login', [CartController::class, 'loginPagar'])->name('login-cliente');

Route::get('/loginvendedor', [LoginController::class, 'loginVendedor'])->name('login-vendedor');

Route::get('/loginCiente', [LoginController::class, 'loginCliente'])->name('login-clie');

Route::get('/vendedor', [VendedorController::class, 'panelVendedor'])->name('vendedor-productos');

