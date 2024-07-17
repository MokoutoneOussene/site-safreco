<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('nom_domaines', [PageController::class, 'domaine'])->name('domaines');

Route::get('notre_expertise', [PageController::class, 'expertise'])->name('expertise');

Route::get('nos_realisations', [PageController::class, 'realisation'])->name('realisation');

Route::get('nous_sommes_safreco', [PageController::class, 'safreco'])->name('safreco');

Route::get('contactez_nous', [PageController::class, 'contact'])->name('contact');

Route::get('se_connecter', [PageController::class, 'connexion'])->name('connexion');

Route::get('creer_compte', [PageController::class, 'register'])->name('register');

//--------------------------------------------------------------------------------

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('gestion_utilisateur', UserController::class);

Route::get('dashboard_administration', [PageController::class, 'dashboard'])->name('dashboard');
