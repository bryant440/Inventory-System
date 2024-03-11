<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChickenController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Http\Controllers\CollectedEggsController;
use App\Http\Controllers\FeedOrderController;
// use App\Http\Controllers\ChickenController;
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
    return view('auth.login');
});

Route::get('/chickens/create', 'ChickenController@create')->name('chickens.create');
Route::post('/chickens/store',  'ChickenController@store')->name('chickens.store');
Route::get('/available-products', 'AvailableProductsController@index')->name('available.products');

Route::post('/update-poultry-info', 'PoultryController@updatePoultryInfo')->name('update.poultryinfo');
//product
Route::get('/add-product', function () {
    return view('Admin.add_product');
})->middleware(['auth'])->name('add.product');

Route::post('/insert-product',[ProductController::class,'store'])->middleware(['auth']);

Route::get('/all-product',[ProductController::class,'allProduct'])->middleware(['auth'])->name('all.product');

Route::get('/available-products',[ProductController::class,'availableProducts'])->middleware(['auth'])->name('available.products');

Route::get('/purchase-products/{id}', [ProductController::class,'purchaseData'])->middleware(['auth']);

Route::post('/insert-purchase-products',[ProductController::class,'storePurchase'])->middleware(['auth']);


//invoice
Route::get('/add-invoice/{id}', [InvoiceController::class,'formData'])->middleware(['auth']);

Route::get('/new-invoice', [InvoiceController::class,'newformData'])->middleware(['auth'])->name('new.invoice');

Route::post('/insert-invoice',[InvoiceController::class,'store'])->middleware(['auth']);

Route::get('/invoice-details', function () {
    return view('Admin.invoice_details');
})->middleware(['auth'])->name('invoice.details');

Route::get('/all-invoice', [InvoiceController::class,'allInvoices'])->middleware(['auth'])->name('all.invoices');

Route::get('/sold-products',[InvoiceController::class,'soldProducts'])->middleware(['auth'])->name('sold.products');
// Route::get('/delete', [InvoiceController::class,'delete']);

// Route::get('/add-collected-eggs', [CollectedEggsController::class ,'index'])->name('add.collected.eggs');
// Route::post('/add-collected-eggs', [CollectedEggsController::class ,'store'])->name('store.collected.eggs');

Route::post('/feed-orders/store', [FeedOrderController::class, 'store'])->name('feed_orders.store');
Route::get('/all-feed-orders', [FeedOrderController::class, 'index'])->name('all_feed_orders.index');
// Route::get('/feeds/{feedOrder}', [FeedOrderController::class, 'show'])->name('feed_orders.show');

Route::delete('/feed-orders/{feedOrder}', [FeedOrderController::class, 'destroy'])->name('feed_orders.destroy');


//order
// Route::get('/add-order/{name}', [ProductController::class,'formData'])->middleware(['auth'])->name('add.order');

Route::post('/chickens/store', [OrderController::class, 'store'])->name('chickens.store');

Route::delete('/orders/{order}',[OrderController::class ,'destroy'])->name('orders.destroy');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

Route::post('/insert-order',[OrderController::class,'store'])->middleware(['auth']);

Route::get('/all-orders',[OrderController::class,'ordersData'])->middleware(['auth'])->name('all.orders');

Route::get('/pending-orders',[OrderController::class,'pendingOrders'])->middleware(['auth'])->name('pending.orders');

Route::get('/delivered-orders',[OrderController::class,'deliveredOrders'])->middleware(['auth'])->name('delivered.orders');

Route::get('/new-order', [OrderController::class,'newformData'])->middleware(['auth'])->name('new.order');

Route::post('/insert-new-order',[OrderController::class,'newStore'])->middleware(['auth']);



//mine
Route::get('/all-products', function () {
    // Logic to show all products
})->name('all.product');
Route::get('/sold-products', function () {
    // Logic to show sold products
})->name('sold.products');
Route::get('/available-products', function () {
    // Logic to show available products
})->name('available.products');
Route::get('/pending-orders', function () {
    // Logic to show pending orders
})->name('pending.orders');
Route::get('/revenues', function () {
    // Logic to show revenues
})->name('revenues');

Route::post('/collectedeggs/store', [CollectedEggsController::class, 'store'])->name('collectedeggs.store');





//customer
Route::get('/add-customer', function () {
    return view('Admin.add_customer');
})->middleware(['auth'])->name('add.customer');

Route::post('/insert-customer',[CustomerController::class,'store'])->middleware(['auth']);

Route::get('/all-customers',[CustomerController::class,'customersData'])->middleware(['auth'])->name('all.customers');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/add-feeds', function () {
    // Add your logic here
    return view('Admin.add_feeds');
})->name('add.feeds');