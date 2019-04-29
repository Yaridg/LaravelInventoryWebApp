<?php

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
Route::auth();
Route::get('/', ['uses' => 'HomeController@home']);
Route::get('qrLogin', ['uses' => 'QrLoginController@index']);
Route::get('qrLogin-option1', ['uses' => 'QrLoginController@indexoption2']);
Route::post('qrLogin', ['uses' => 'QrLoginController@checkUser']);


 Route::group(['middleware' => ['web', 'auth', 'permission'] ], function () {
        Route::get('dashboard', ['uses' => 'HomeController@dashboard', 'as' => 'home.dashboard']);
        //users
        Route::resource('user', 'UserController');
        Route::get('user/logout/now', ['uses' => 'Auth\LoginController@logout']);
        Route::get('user/{user}/permissions', ['uses' => 'UserController@permissions', 'as' => 'user.permissions']);
        Route::post('user/{user}/save', ['uses' => 'UserController@save', 'as' => 'user.save']);
        Route::get('user/{user}/activate', ['uses' => 'UserController@activate', 'as' => 'user.activate']);
        Route::get('user/{user}/deactivate', ['uses' => 'UserController@deactivate', 'as' => 'user.deactivate']);
          Route::post('user/ajax_all', ['uses' => 'UserController@ajax_all']);

        //roles
        Route::resource('role', 'RoleController');
        Route::get('role/{role}/permissions', ['uses' => 'RoleController@permissions', 'as' => 'role.permissions']);
        Route::post('role/{role}/save', ['uses' => 'RoleController@save', 'as' => 'role.save']);
        Route::post('role/check', ['uses' => 'RoleController@check']);
        //Update User Qr Code
        Route::get('my-qrcode', ['uses' => 'QrLoginController@ViewUserQrCode']);
        Route::post('qrLogin-autogenerate', ['uses' => 'QrLoginController@QrAutoGenerate']);

        //QR Code
        Route::get('generateQRCode', ['uses' => 'QRCode@generateQRCode']);
        Route::get('getQRCodeValue', ['uses' => 'QRCode@getQRCodeValue']);
        Route::get('scanQRCode', ['uses' => 'QRCode@scanQRCode']);

        //Inventory
        //route for add lumber form
        Route::post('addLumber', ['uses' => 'addToStockController@addLumber']);
        Route::get('addStockForm', ['uses' => 'addToStockController@displayEnterForm']);

        //route for remove from stock
        Route::post('removeLumber', ['uses' => 'RemoveFromStockController@remove']);
        Route::get('removeFromStock', ['uses' => 'RemoveFromStockController@index']);
        
        Route::get('removeStock', ['uses' => 'InventoryItems@remove']);

        Route::get('searchInventory', ['uses' => 'InventoryItems@search']);

        Route::post('getCategory', ['uses' => 'InventoryItems@getCategory']);
        //Transfer
        Route::resource('transfer', 'TransferController');
        Route::get('transfer', ['uses' => 'TransferController@index']);
        Route::post('transfer/store', ['uses' => 'TransferController@store']);

        //Report
        Route::get('report', ['uses' => 'ReportController@index']);
        Route::get('LumberDetails', ['uses' => 'addToStockController@viewLumber']);

        //Route::resource('inventory', 'InventoryItems');
 });

//        Route::get('addUser', ['uses' => 'TestController@AddUsers']);
//        Route::get('removeStock', ['uses' => 'TestController@RemoveStock']);
//        Route::get('addStock', ['uses' => 'TestController@AddStock']);
//        Route::get('removeUser', ['uses' => 'TestController@removeUser']);
//        Route::get('addScan', ['uses' => 'addToStockController@displayQRScanner']);
//        Route::get('addStockForm', ['uses' => 'addToStockController@updateStock']);
