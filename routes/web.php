<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Homecontroller;
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
    return view('inicio');
});

Route::get('/dashboard',[HomeController::class, 'index'] );

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/user',[HomeController::class, 'listar_usuarios'] );
Route::get('/eliminar-usuario/{id}',[HomeController::class, 'delete'] );

Route::get('/actualizar-usuario/{id}',[HomeController::class, 'update_user'] );
Route::post('/actualizarusuario/{id}',[HomeController::class, 'edit'] );

require __DIR__.'/auth.php';
