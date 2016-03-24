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
// Route::get('test',function () {
// 	return view('admin.cat.add');
// 	//return view('admin.master');
// });


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
	});
});