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

/*Route::get('/', function () {
    return view('welcome');*/
        Route::get("/",[
            "as"   => "web.index",
            "uses" => "WebController@index"
        ]);
        Route::get("/merch",[
            "as"   => "web.merch",
            "uses" => "WebController@merch"
        ]);
        Route::get("/contacto",[
            "as"   => "web.contacto",
            "uses" => "WebController@contacto"
        ]);
        /*Route::get("/registro",[
            "as"   => "web.registro",
            "uses" => "WebController@registro"
        ]);
        Route::get("/login",[
            "as"   => "web.login",
            "uses" => "WebController@login"
        ]);*/

        /*Route::group(["prefix" => "/panel"],function(){
            Route::get('/','PanelController@admin')
                ->middleware('isAdmin')
                ->name('panel');
            Route::resource("/merch","MerchController")
                ->middleware('isAdmin');

        //)};
});*/
        //Auth::routes();




