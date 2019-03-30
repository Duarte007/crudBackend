<?php

Route::get('/', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'products'], function() {
    Route::get('', 'ProductController@getProducts');
    Route::post('', 'ProductController@insertProduct');
    Route::put('/{cd_product}', 'ProductController@updateProduct');
    Route::delete('/{cd_product}', 'ProductController@deleteProduct');
});

Route::group(['prefix' => 'stores'], function() {
    Route::get('', 'StoreController@getStores');
    Route::post('', 'StoreController@insertStore');
    Route::put('/{cd_store}', 'StoreController@updateStore');
    Route::delete('/{cd_store}', 'StoreController@deleteStore');
});

Route::group(['prefix' => 'warehouses'], function() {
    Route::get('', 'WarehouseController@getWarehouses');
    Route::post('', 'WarehouseController@insertWarehouse');
    Route::put('/{id}', 'WarehouseController@updateWarehouse');
});
