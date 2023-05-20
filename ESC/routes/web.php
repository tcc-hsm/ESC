<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Administracao;
use App\Http\Livewire\GuestRegistration;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    //Rederizando tela de login
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Rederizando tela de administração
    Route::get('/administracao', Administracao::class)->name('administracao');

    //Rederizando tela de cadastro de hóspedes
    Route::get('/guest_registration', GuestRegistration::class)->name('guest_registration');
});
