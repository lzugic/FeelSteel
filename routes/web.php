<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ResetPasswordController;



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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route::view("register", 'register');

Route::post('register', [UserController::class, 'Register'])->name('register');

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get("details/{id}", [ProductController::class, 'details'])->name('details');

Route::get('/search', [ProductController::class, 'search']);

Route::post("add_to_cart", [ProductController::class, 'addToCart']);

Route::get("cartlist", [ProductController::class, 'cartList'])->name('cartlist');

Route::get("removecart/{id}", [ProductController::class, 'removeCart']);

Route::get("removeorder/{id}", [ProductController::class, 'removeOrder']);

Route::get("ordernow", [ProductController::class, 'orderNow'])->name('ordernow');

Route::post("orderplace", [ProductController::class, 'orderPlace'])->name('orderplace');

Route::get("myorder", [ProductController::class, 'myOrder'])->name('myorder');

Route::get("orderlist", [ProductController::class, 'orderList'])->name('orderlist');

Route::get("thankyou", [ProductController::class, 'thankYou'])->name('thankyou');

Route::get("shop", [ProductController::class, 'Shop'])->name('shop');



Auth::routes();

Route::get('/home', [ProductController::class, 'Home'])->name('home');

Route::get("admin/dashboard", [AdminController::class, 'Admin'])->name('dashboard');

Route::get("admin/data", [AdminController::class, 'Data'])->name('data');

Route::get("admin/role-edit/{id}", [AdminController::class, 'roleEdit'])->name('role-edit');

Route::put("admin/role-update/{id}", [AdminController::class, 'roleUpdate'])->name('role-update');

Route::delete("role-delete/{id}", [AdminController::class, 'roleDelete'])->name('role-delete');

Route::get("admin/product-table", [AdminController::class, 'productTable'])->name('product-table');

Route::get("admin/product-edit/{id}", [AdminController::class, 'productEdit'])->name('product-edit');

Route::put("admin/product-update/{id}", [AdminController::class, 'productUpdate'])->name('product-update');

Route::delete("product-delete/{id}", [AdminController::class, 'productDelete'])->name('product-delete');

Route::get("admin/order-table", [AdminController::class, 'orderTable'])->name('order-table');

Route::delete("order-delete/{id}", [AdminController::class, 'orderDelete'])->name('order-delete');

Route::get("admin/add-product", [AdminController::class, 'addProduct'])->name('add-product');

Route::post("admin/save-product", [AdminController::class, 'saveProduct'])->name('save-product');

Route::get("admin/add-user", [AdminController::class, 'addUser'])->name('add-user');

Route::post("admin/save-user", [AdminController::class, 'saveUser'])->name('save-user');

Route::get("admin/calendar", [AdminController::class, 'Calendar'])->name('calendar');

Route::get("admin/category-table", [AdminController::class, 'categoryTable'])->name('category-table');

Route::get("admin/category-edit/{id}", [AdminController::class, 'categoryEdit'])->name('category-edit');

Route::put("admin/category-update/{id}", [AdminController::class, 'categoryUpdate'])->name('category-update');

Route::delete("category-delete/{id}", [AdminController::class, 'categoryDelete'])->name('category-delete');

Route::get("admin/add-category", [AdminController::class, 'addCategory'])->name('add-category');

Route::post("admin/save-category", [AdminController::class, 'saveCategory'])->name('save-category');