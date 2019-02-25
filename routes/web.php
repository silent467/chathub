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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

use Illuminate\Http\Request;

Route::get('/', 'MainController@index')->name('ChatHub');
Route::get('/', function (Request $request){
	//$input = $request->all();

	//return $input;


	$url = 'http://users.chathub.mooo.com/user/webapi/users/';
	$data = json_decode(file_get_contents($url), true);
	return view('welcome')->withData($data);
});
