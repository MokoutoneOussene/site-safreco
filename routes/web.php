<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', function () {
    return view('admin.pages.home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('nom_domaines', [PageController::class, 'domaine'])->name('domaines');

Route::get('notre_expertise', [PageController::class, 'expertise'])->name('expertise');

Route::get('nos_realisations', [PageController::class, 'realisation'])->name('realisation');

Route::get('nous_sommes_safreco', [PageController::class, 'safreco'])->name('safreco');

Route::get('contactez_nous', [PageController::class, 'contact'])->name('contact');

Route::get('se_connecter', [PageController::class, 'login'])->name('login');

Route::get('creer_compte', [PageController::class, 'logout'])->name('logout');
