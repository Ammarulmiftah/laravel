<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk_c;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Produk_c::class, 'dashboard'])->name('dashboard');

Route::get('/login', [Produk_c::class, 'login']);
Route::post('/cek', [Produk_c::class, 'cek']);

Route::get('/register', [Produk_c::class, 'show']);

Route::post('/reg', [Produk_c::class, 'create']);


Route::get('/produk', [Produk_c::class, 'tabel']);
Route::get('/tambah', [Produk_c::class, 'tambah']);
Route::post('/simpan', [Produk_c::class, 'simpan']);

Route::get('/edit/{id}', [Produk_c::class, 'edit']);
Route::Post('/update/{id}',[Produk_c::class,'update']);

Route::post('/delete/{id}',[Produk_c::class,'destroy']);


