<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

// use App\Http\Controllers\AdminController as ControllersAdminController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\AdminController;
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
//Route::get('/inicio', function ()
//{return view('inicio');
//});
//Route::get('/nuevo', function ()
//{return view('nuevo');
//});
//Route::get('/certificado', function ()
//{return view('certificado');
//});
//Route::get('/solicitud', function ()
//{return view('solicitud');
//});

Auth::routes();

// Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/user', [App\Http\Controllers\HomeController::class, 'User'])->name('user');

Route::prefix('admin')->group(function () {
	Route::group(['middleware' => ['role:super-admin']], function () {
		//rutas para registros
		Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
		Route::get('/users', [App\Http\Controllers\AdminController::class, 'usuarios'])->name('users.index');
		Route::get('create', [App\Http\Controllers\RegistroController::class, 'create'])->name('registro.create');
		Route::post('create', [App\Http\Controllers\RegistroController::class, 'store'])->name('registro.store');
		Route::get('index',[App\Http\Controllers\RegistroController::class, 'index'])->name('registro.index');
		Route::get('{registro}/edit',[App\Http\Controllers\RegistroController::class, 'edit'])->name('registro.edit');
		Route::put('{registro}/edit',[App\Http\Controllers\RegistroController::class, 'update'])->name('registro.update');
		Route::delete('{registro}/edit',[App\Http\Controllers\RegistroController::class, 'destroy'])->name('registro.delete');
		//rutas para libros
		Route::get('libros/create', [App\Http\Controllers\LibroController::class, 'create'])->name('libro.create');
		Route::post('libros/create', [App\Http\Controllers\LibroController::class, 'store'])->name('libro.store');
		Route::get('libros/index',[App\Http\Controllers\LibroController::class, 'index'])->name('libro.index');
		Route::get('home/libros/show/{libro}',[App\Http\Controllers\LibroController::class, 'show'])->name('libros.show');
		Route::get('edit/{libro}',[App\Http\Controllers\LibroController::class, 'edit'])->name('libros.edit');
		Route::put('edit/{libro}',[App\Http\Controllers\LibroController::class, 'update'])->name('libros.update');
		Route::delete('edit/{libro}',[App\Http\Controllers\LibroController::class, 'destroy'])->name('libros.delete');

		//rutas para solicitudess
		Route::get('solicitudes',[App\Http\Controllers\SolicitudController::class, 'index'])->name('solicitudes.index');
		Route::get('solicitudes/{solicitud}',[App\Http\Controllers\SolicitudController::class, 'edit'])->name('solicitudes.edit');
		Route::post('{solicitud}/edit',[App\Http\Controllers\SolicitudController::class, 'update'])->name('solicitudes.update');

		//rutas para controlar usuarios
		Route::get('home/users/{user}/edit',[App\Http\Controllers\AdminController::class, 'edit'])->name('users.edit');
		Route::put('home/users/{user}',[App\Http\Controllers\AdminController::class, 'update'])->name('users.update');
	});
});

Route::prefix('user')->group(function () {
	Route::group(['middleware' => ['role:user']], function () {
		//rutas certificados usuarios normales
		Route::get('/solicitudes', [App\Http\Controllers\HomeController::class, 'solicitudes'])->name('solicitudes');
		Route::get('/certificados', [App\Http\Controllers\HomeController::class, 'inicio'])->name('certificados.index');
		Route::get('/certificados/consulta', [App\Http\Controllers\HomeController::class, 'consulta'])->name('certificados.consulta');
		Route::get('/certificados/consultaRegistros',[App\Http\Controllers\HomeController::class, 'registro'])->name('certificados.consultaRegistros');
		Route::get('/certificados/nuevo', [App\Http\Controllers\HomeController::class, 'create'])->name('certificado.solicitud');
		Route::post('/certificados/nuevo', [App\Http\Controllers\HomeController::class, 'store'])->name('certificado.solicitar');
		Route::get('/certificados/certificado', [App\Http\Controllers\HomeController::class, 'certificado'])->name('certificados.certificado');
		Route::get('/certificados/solicitud', [App\Http\Controllers\HomeController::class, 'solicitud'])->name('certificados.solicitud');
		Route::name('print')->get('/imprimir/{id}', [App\Http\Controllers\HomeController::class, 'obtenerPDF']);
	});
});

