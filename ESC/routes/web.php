<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Administracao;
use App\Http\Livewire\Guest\Registration;
use App\Http\Livewire\Erro\Postman;
use App\Http\Livewire\User\Create;

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

#region Postman
Route::get('/postman', Postman::class)->name('postman');
Route::post('/api/create_user', Create::class)->name('create_user');
#endregion

#region Administration
Route::get('/register', function(){
    return view('livewire.user.create');
});

Route::post('/register', Create::class)->name('register');
#endregion

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
    Route::get('/guest_registration', Registration::class)->name('guest_registration');
    Route::post('/guest_registration', [Registration::class, 'create'])->name('guest_registration');

});
