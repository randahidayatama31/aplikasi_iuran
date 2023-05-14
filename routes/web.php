<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'index']);

Route::get('/m_user', [AdminController::class, 'm_user'])->name('m_user');
Route::get('/m_user/add_users', [AdminController::class, 'add_users']);
Route::post('/m_user/insert_users', [AdminController::class, 'insert_users']);
Route::get('/m_user/edit_users/{id_user}', [AdminController::class, 'edit_users']);
Route::post('/m_user/update_users/{id_user}', [AdminController::class, 'update_users']);
Route::get('/m_user/delete_users/{id_user}', [AdminController::class, 'delete_users']);

//awal route admin ->untuk menu master jenis tagihan 
Route::get('/m_tagihan', [AdminController::class, 'm_tagihan'])->name('m_tagihan');
Route::get('/m_tagihan/detail_Mtagihan/{id_tagihan}', [AdminController::class, 'detail_Mtagihan']);
Route::get('/m_tagihan/add_Mtagihan', [AdminController::class, 'add_Mtagihan']);
Route::post('/m_tagihan/insert', [AdminController::class, 'insert']);
Route::get('/m_tagihan/edit_Mtagihan/{id_tagihan}', [AdminController::class, 'edit_Mtagihan']);
Route::post('/m_tagihan/update/{id_tagihan}', [AdminController::class, 'update']);
Route::get('/m_tagihan/delete_Mtagihan/{id_tagihan}', [AdminController::class, 'delete_Mtagihan']);
//akhir route admin ->untuk menu master jenis tagihan 


//awal route admin ->untuk menu tagihan 

Route::get('/tagihan', [AdminController::class, 'tagihan'])->name('tagihan');
Route::post('/tagihan/insert_tagihan', [AdminController::class, 'insert_tagihan']);
Route::post('/tagihan/getDataTagihan', [AdminController::class, 'getDataTagihan']);



//akhir model admin ->untuk menu master jenis tagihan 






Route::get('/pembayaran', function () {
    return view('admin_pembayaran');
});

Route::get('/list_tagihan', function () {
    return view('admin_list_tagihan');
});

Route::get('/user', function () {
    return view('user_dashboard');
});

Route::get('/user_tagihan', function () {
    return view('user_tagihan');
});

Route::get('/m_user_iuran', [AdminController::class, 'm_user_iuran']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
