<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('call-master', function (){
	return view('views.sub');
});
Route::get('hoclaravel',function () {
	return view('admin.cate.add');
});


Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix'=>'admin'],function () {
		Route::group(['prefix'=>'cate'], function () {
			Route::get('list',['as'=>'admin.cate.getList','uses'=>'CateController@getList']);
			Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
			Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		});
		Route::group(['prefix'=>'product'], function () {
			Route::get('list',['as'=>'admin.product.getList','uses'=>'ProductController@getList']);
			Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
			Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
			Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
		});
	});
});