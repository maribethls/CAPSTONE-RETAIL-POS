<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

//HOMEPAGE
Route::get('/homepage', function () {
    return view('homepage');
});

//ITEM-MASTER
Route::get('item-master', function () {
    return view('item-master');
});

//SALES-MODULE
Route::get('sales-module', function () {
    return view('sales-module');
});
Route::get('/sales-module', [ItemController::class, 'showSalesModule']);

//REPORTING-MODULE
Route::get('reporting-module', function () {
    return view('reporting-module');
});

//ITEM-MASTER CRUD
Route::get('/item-master', 'App\Http\Controllers\ItemController@index')->name('item-master.index');


Route:: get ('/item-master/create', [ItemController:: class, 'create'])
    ->name ('products.create' );

Route::post('/item-master', 'App\Http\Controllers\ItemController@store')->name('item-master.store');
Route::put('/item-master/{id}', 'App\Http\Controllers\ItemController@update')->name('item-master.update');
Route::delete('/item-master/{id}', 'App\Http\Controllers\ItemController@destroy')->name('item-master.destroy');
