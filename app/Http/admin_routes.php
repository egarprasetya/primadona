<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');


	/* ================== Cabangs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/cabangs', 'LA\CabangsController');
	Route::get(config('laraadmin.adminRoute') . '/cabang_dt_ajax', 'LA\CabangsController@dtajax');

	/* ================== Hargas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/hargas', 'LA\HargasController');
	Route::get(config('laraadmin.adminRoute') . '/harga_dt_ajax', 'LA\HargasController@dtajax');



	/* ================== Produks ================== */
	Route::resource(config('laraadmin.adminRoute') . '/produks', 'LA\ProduksController');
	Route::get(config('laraadmin.adminRoute') . '/produk_dt_ajax', 'LA\ProduksController@dtajax');

	/* ================== TransaksiPenjualans ================== */
	Route::resource(config('laraadmin.adminRoute') . '/transaksipenjualans', 'LA\TransaksiPenjualansController');
	Route::get(config('laraadmin.adminRoute') . '/transaksipenjualan_dt_ajax', 'LA\TransaksiPenjualansController@dtajax');


	/* ================== Pembuatans ================== */
	Route::resource(config('laraadmin.adminRoute') . '/pembuatans', 'LA\PembuatansController');
	Route::get(config('laraadmin.adminRoute') . '/pembuatan_dt_ajax', 'LA\PembuatansController@dtajax');

	/* ================== PembelianBahans ================== */
	Route::resource(config('laraadmin.adminRoute') . '/pembelianbahans', 'LA\PembelianBahansController');
	Route::get(config('laraadmin.adminRoute') . '/pembelianbahan_dt_ajax', 'LA\PembelianBahansController@dtajax');

	/* ================== Pegawais ================== */
	Route::resource(config('laraadmin.adminRoute') . '/pegawais', 'LA\PegawaisController');
	Route::get(config('laraadmin.adminRoute') . '/pegawai_dt_ajax', 'LA\PegawaisController@dtajax');


	/* ================== Bahans ================== */
	Route::resource(config('laraadmin.adminRoute') . '/bahans', 'LA\BahansController');
	Route::get(config('laraadmin.adminRoute') . '/bahan_dt_ajax', 'LA\BahansController@dtajax');


	/* ================== Kebutuhans ================== */
	Route::resource(config('laraadmin.adminRoute') . '/kebutuhans', 'LA\KebutuhansController');
	Route::get(config('laraadmin.adminRoute') . '/kebutuhan_dt_ajax', 'LA\KebutuhansController@dtajax');

	/* ================== TransaksiKirims ================== */
	Route::resource(config('laraadmin.adminRoute') . '/transaksikirims', 'LA\TransaksiKirimsController');
	Route::get(config('laraadmin.adminRoute') . '/transaksikirim_dt_ajax', 'LA\TransaksiKirimsController@dtajax');


	/* ================== BiayaLains ================== */
	Route::resource(config('laraadmin.adminRoute') . '/biayalains', 'LA\BiayaLainsController');
	Route::get(config('laraadmin.adminRoute') . '/biayalain_dt_ajax', 'LA\BiayaLainsController@dtajax');
});
