<?php

use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\CategoryCon;
use App\Http\Controllers\CustomerCon;
use App\Http\Controllers\PosCon;
use App\Http\Controllers\PaymentCon;
use App\Http\Controllers\SupplierCon;
use App\Http\Controllers\ProductCon;
use App\Http\Controllers\PurchaseCon;
use App\Http\Controllers\StockCon;
use App\Http\Controllers\UserCon;
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

// Route::get('/m', function () {
//     return view('backend.layout.addcategory');
// });

Route::get('/',[LoginCon::class,'log'])->name('log');
Route::post('/login',[LoginCon::class,'login_user'])->name('login');
Route::group(['prefix'=>'admin'],function(){



    // Login start

    // Login end

    //user start
    Route::get('/user',[UserCon::class,'user'])->name('user');
    Route::get('/user/manage',[UserCon::class,'usermanage'])->name('usermanage');
    Route::post('/useradd',[UserCon::class,'useradd'])->name('useradd');
    //user end

    //user pos
    Route::get('/pos',[PosCon::class,'pos'])->name('pos');
    // Route::get('/pos/manage',[UserCon::class,'usermanage'])->name('usermanage');
    // Route::post('/useradd',[UserCon::class,'useradd'])->name('useradd');
    //user pos

    //customer start
    Route::get('/customer',[CustomerCon::class,'customers'])->name('customer');
    Route::get('/customer/manage',[CustomerCon::class,'customermanage'])->name('customer_manage');
    Route::post('/customeradd',[CustomerCon::class,'customeradd'])->name('customer_add');
    //customer end

    //supplier start
    Route::get('/supplier',[SupplierCon::class,'supplier'])->name('supplier');
    Route::get('/supplier/manage',[SupplierCon::class,'suppliermanage'])->name('supplier_manage');
    Route::post('/supplieradd',[SupplierCon::class,'supplieradd'])->name('supplieradd');
    //supplier end

    //dashboard
    Route::get('/dashboard',[DashboardCon::class,'dashboard'])->name('dash');
    //dashboard


    //payment
    Route::get('/addpay',[PaymentCon::class,'addpay'])->name('addpay');
    Route::get('/payment/manage',[PaymentCon::class,'paymanage'])->name('paymanage');
    Route::post('/payments',[PaymentCon::class,'payments'])->name('payments');
    //payment


    // category start
    Route::get('/category',[CategoryCon::class,'categories'])->name('category');
    Route::get('/category/{id}details',[CategoryCon::class,'categories_details'])->name('categories_details');
    Route::post('/categories',[CategoryCon::class,'category_add'])->name('categoryadd');
    // category end

    // product
    Route::get('/product',[ProductCon::class,'productadd'])->name('product');
    Route::get('/products',[ProductCon::class,'product_add'])->name('products');
    Route::post('/product/add',[ProductCon::class,'products'])->name('productadded');
    // product

    // purchase
    Route::get('/purchases',[PurchaseCon::class,'purchase'])->name('purchases');
    Route::get('/purchase',[PurchaseCon::class,'purchaseadd'])->name('Purchase');
    Route::get('/purchaseadd',[PurchaseCon::class,'purchase_add'])->name('Purchaseadd');
    Route::post('/purchase/add',[PurchaseCon::class,'purchases'])->name('Purchase_add');
    Route::post('/purchase/manage',[PurchaseCon::class,'purchases_manage'])->name('Purchase_manage');
    // purchase

    // stock
    Route::get('/stock',[StockCon::class,'stock'])->name('stock');
    // Route::get('/purchaseadd',[StockCon::class,'purchase_add'])->name('Purchaseadd');
    // Route::post('/purchase/add',[StockCon::class,'purchases'])->name('Purchase_add');
    // stock

});
