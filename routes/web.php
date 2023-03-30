<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//grupo de rutas para UserController
Route::controller(UserController::class)->group(function(){
    //Vista pag principal o Dashboard de usuarios administradores
    Route::get('/admin', 'show')->middleware('auth');
    
    // Mostrar vista de registro de usuario administrador
    Route::get('/admin/register', 'create')->middleware('auth');
    
    // Crea o Registra usuario administrador
    Route::post('/admin/user', 'store')->middleware('auth');
    
    // Cerrar session de usuario admin
    Route::post('/admin/logout', 'logout')->middleware('auth');
    
    // Logear un usuario
    Route::get('/admin/login', 'login')->middleware('guest')->name('login');
    // Logear un usuario
    Route::post('/admin/authenticate', 'authenticate' );
});
