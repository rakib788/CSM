<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Frontend\FrontendController;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backent'], function () {
Route::group(['middleware' => 'guest'], function () {
    Route::get('/',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/',[LoginController::class,'loginProccess'])->name('login.proccess');
});
Route::group(['middleware' => 'auth'], function () {

    // logout
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    // UserProfile
    Route::get('/user/profile',[LoginController::class,'userProfile'])->name('userProfile');

    // Dashboard
    Route::get('dashboard',[DashboardController::class,'showDashboard'])->name('admin.dashboard');

    // Services
    Route::get('services',[ServicesController::class,'index'])->name('admin.index');
    Route::post('insert/service',[ServicesController::class,'store'])->name('insert.services');
    Route::get('show/service',[ServicesController::class,'show'])->name('show.service');
    Route::get('delete/service{id}',[ServicesController::class,'ServiceDelete'])->name('delete.service');
    Route::get('edit/service{id}',[ServicesController::class,'ServiceEdit'])->name('edit.service');
    Route::post('update/service{id}',[ServicesController::class,'ServiceUpdate'])->name('update.services');
    Route::get('assign/service{id}',[ServicesController::class,'AssignService'])->name('assign.services');
    Route::post('store.service',[ServicesController::class,'storeService'])->name('store.service');

    // Clients
    Route::get('client',[ClientController::class,'create'])->name('create.client');
    Route::post('add/client',[ClientController::class,'store'])->name('store.client');
    Route::get('show/client',[ClientController::class,'show'])->name('show.client');
    Route::get('edit/client{id}',[ClientController::class,'editClient'])->name('edit.client');
    Route::post('update/client{id}',[ClientController::class,'updateClient'])->name('update.client');

    // Invoice
    Route::get('add/invoice',[InvoiceController::class, 'create'])->name('create.store');
    Route::get('show/invoice{id}',[InvoiceController::class, 'show'])->name('show.store');

    // Report
    Route::get('date-reports',[ReportController::class, 'create'])->name('date/reports');
    Route::get('sales/reports',[ReportController::class, 'salesCreate'])->name('sale/reports');
});
});
Route::get('/',[FrontendController::class, 'frontend'])->name('client.dashboard');
Route::get('client/invoice',[InvoiceController::class, 'createInvoice'])->name('clientInvoicecreate');
Route::get('client/invoice-Show',[InvoiceController::class, 'showInvoice'])->name('clientInvoiceshow');
