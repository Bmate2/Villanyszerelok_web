<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;


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
    return view('home');
})->name('home');
Route::get('/aruk', function () {
    return view('aruk');
})->name('aruk');
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/login', function () {
    return view('auth/login');
});


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
});

Route::get('/login', [ProfileController::class, 'loginCheck'])->name('loginPage');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/productadd', [AdminController::class, 'create'])->name('admin.product.add');
    Route::post('/productadd', [AdminController::class, 'store'])->name('admin.product.store');
    Route::patch('/admindashboard/{id}', [AdminController::class, 'update'])->name('admin.product.update');
    Route::delete('/admindashboard/{id}', [AdminController::class, 'delete'])->name('admin.product.delete');
});

Route::post('/product/{productId}/reviews', [ProductController::class, 'addReview'])->name('reviews.add');

require __DIR__.'/auth.php';


Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart/update/{product_id}/{action}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{product_id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/cart/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/cart/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/order/success', [OrderController::class, 'success'])->name('order.success');
Route::middleware('auth')->group(function () {
    Route::post('order', [OrderController::class, 'store'])->name('order.store');
});

