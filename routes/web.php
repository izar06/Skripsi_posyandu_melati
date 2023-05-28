<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\BumilController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\DokumentController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\VaksinasiController;
use App\Http\Controllers\VitaminController;
use App\Models\Article;
use App\Models\Balita;
use App\Models\Bumil;
use App\Models\Checkup;
use App\Models\Dokument;
use App\Models\Imunisasi;
use App\Models\Kader;
use App\Models\Vaksinasi;
use App\Models\Vitamin;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'kader' => Kader::count(),
        'balita' => Balita::count(),
        'vitamin' => Vitamin::count(),
        'imunisasi' => Imunisasi::count(),
        'vaksinasi' => Vaksinasi::count(),
        'checkup' => Checkup::count(),
        'bumil' => Bumil::count(),
        'article' => Article::count(),
        'dokumen' => Dokument::count()
    ]);
})->middleware('auth')->name('dashboard');



Route::resource('/dashboard/kader', KaderController::class)->middleware('auth');
Route::resource('/dashboard/balita', BalitaController::class)->middleware('auth');
Route::resource('/dashboard/bumil', BumilController::class)->middleware('auth');
Route::resource('/dashboard/vitamin', VitaminController::class)->middleware('auth');
Route::resource('/dashboard/imunisasi', ImunisasiController::class)->middleware('auth');
Route::resource('/dashboard/vaksinasi', VaksinasiController::class)->middleware('auth');
Route::resource('/dashboard/article', ArticleController::class)->middleware('auth');
Route::resource('/dashboard/checkup', CheckupController::class)->middleware('auth');
Route::resource('/dashboard/dokumen', FileController::class)->middleware('auth');
Route::get('/dashboard/dokumen/download/{id}', [FileController::class, 'download'])->middleware('auth');
Route::get('/dashboard/dokumen/view/{id}',[FileController::class,'view'])->middleware('auth');

require __DIR__.'/auth.php';
