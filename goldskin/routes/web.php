<?php

use App\Http\Controllers\CasApi;
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

//공공데이터 화학물질 정보 받아오는 라우터
Route::get('/casinfo',[CasApi::class, 'casNo_info'])->name('cas.info');

//