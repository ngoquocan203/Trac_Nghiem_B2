<?php

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

Route::get('/','HomeController@getHome');


Route::get('lienhe','HomeController@getLienHe');

//ly thuyet
Route::get('lythuyet','HomeController@getLyThuyet');
Route::get('cauhoi','HomeController@getCauHoi');
Route::get('cauhoiliet','HomeController@getCauHoiLiet');
Route::get('luyentap/{id}','HomeController@getLuyenTap');
Route::get('luyentapp/{id}','HomeController@getLuyenTapp');

//thi
Route::get('thithu','HomeController@getThiThu');
Route::get('thingaunhien','HomeController@getThiNgauNhien');
Route::get('random','HomeController@getThiRandom');

Route::get('baithi/{id}','HomeController@getBaiThi');
Route::get('thibt/{id}','HomeController@getThiBT');




Route::group(['prefix'=>'backend'], function(){
	Route::get('trangadmin','AdminController@getTrangAdmin');
	//Đề thi
	Route::get('dethi','DeThiController@getDeThi');

	Route::post('dethi','DeThiController@postThemDeThi');

	Route::get('suadethi/{id}','DeThiController@getSuaDeThi');
	Route::post('suadethi/{id}','DeThiController@postSuaDeThi');
	
	Route::get('xoadethi/{id}','DeThiController@getXoaDeThi');

	//Câu hỏi
	Route::get('cauhoi','CauHoiController@getCauHoi');

	Route::get('themcauhoi','CauHoiController@getThemCauHoi');
	Route::post('themcauhoi','CauHoiController@postThemCauHoi');

	Route::get('suacauhoi/{id}','CauHoiController@getSuaCauHoi');
	Route::post('suacauhoi/{id}','CauHoiController@postSuaCauHoi');

	Route::get('xoacauhoi/{id}','CauHoiController@getXoaCauHoi');

	Route::post('export-csv','CauHoiController@export_csv');
	Route::post('import-csv','CauHoiController@import_csv');


	//Loại câu hỏi
	Route::get('loaicauhoi','LoaiCauHoiController@getLoaiCauHoi');
	Route::post('loaicauhoi','LoaiCauHoiController@postThemLoaiCauHoi');

	Route::get('sualoaicauhoi/{id}','LoaiCauHoiController@getSuaLoaiCauHoi');
	Route::post('sualoaicauhoi/{id}','LoaiCauHoiController@postSuaLoaiCauHoi');

	Route::get('xoaloaicauhoi/{id}','LoaiCauHoiController@getXoaLoaiCauHoi');

	// Kết quả thi
	Route::get('ketquathi','KetQuaThiController@getKetQuaThi');
	
	// Người dùng
	Route::get('taikhoan','TaiKhoanController@getTaiKhoan');
	Route::get('suataikhoan/{id}','TaiKhoanController@getSuaTaiKhoan');
	Route::post('suataikhoan/{id}','TaiKhoanController@postSuaTaiKhoan');

	Route::get('xoataikhoan/{id}','TaiKhoanController@getXoaTaiKhoan');
});


// Tài khoản
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('editacc','RegisterController@getEditAcc');	
Route::post('editacc','RegisterController@postEditAcc');	

Route::get('register','RegisterController@getRegister');
Route::post('register','RegisterController@postRegister');

Route::get('logout','LogoutController@getlogout');


