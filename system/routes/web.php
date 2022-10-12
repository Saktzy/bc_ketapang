<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\YoutubeController;

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
    return view('admin.master');
});
// dash
Route::get('dashboard', [AdminController::class,'show.Dashboard']);
Route::get('inbox', [AdminController::class,'showInbox']);
// iklan
Route::get('iklan', [IklanController::class, 'index']);
Route::get('iklan/create', [IklanController::class, 'create']);
Route::post('iklan', [IklanController::class, 'store']);
Route::get('iklan/{iklan}', [IklanController::class, 'show']);
Route::get('iklan/{iklan}/edit', [IklanController::class, 'edit']);
Route::put('iklan/{iklan}', [IklanController::class, 'update']);
Route::delete('iklan/{iklan}', [IklanController::class, 'destroy']);
// berita
Route::get('berita', [BeritaController::class, 'index']);
Route::get('berita/create', [BeritaController::class, 'create']);
Route::post('berita', [BeritaController::class, 'store']);
Route::get('berita/{berita}', [BeritaController::class, 'show']);
Route::get('berita/{berita}/edit', [BeritaController::class, 'edit']);
Route::put('berita/{berita}', [BeritaController::class, 'update']);
Route::delete('berita/{berita}', [BeritaController::class, 'destroy']);
// youtube
Route::get('youtube', [YoutubeController::class, 'index']);
Route::get('youtube/create', [YoutubeController::class, 'create']);
Route::post('youtube', [YoutubeController::class, 'store']);
Route::get('youtube/{youtube}', [YoutubeController::class, 'show']);
Route::get('youtube/{youtube}/edit', [YoutubeController::class, 'edit']);
Route::put('youtube/{youtube}', [YoutubeController::class, 'update']);
Route::delete('youtube/{youtube}', [YoutubeController::class, 'destroy']);

