<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\admin\GuiaEstilosController;
use App\Http\Controllers\customer\CustomerController as PrivateCustomerController;

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
//RUTAS PUBLICAS
Route::get('/', [WelcomeController::class, 'index'])->name("welcome");
Route::post('/eventImage',[EventController::class, 'eventImage']);
Route::get('/como-llegar', [WelcomeController::class, 'como_llegar']);
//RUTAS EXTERNAS EVENTOS
Route::get('/eventos', [WelcomeController::class, 'events']);
Route::post('/eventos',[WelcomeController::class, 'index_month']);
Route::get('/eventos/{event}',[WelcomeController::class, 'event']);
Route::get('like/{event}',[EventController::class,"like"])->name("like");
Route::get('like/eventImage/{event_image}',[EventController::class,"like_publication"]);
Route::post('eventImage/comment',[EventController::class,"comment"]);

//RUTAS DE LOCALES
Route::post('locales/SMS',[EstablishmentController::class, "SMS"]);
Route::get('/locales', [WelcomeController::class, 'establishments']);
Route::get('/locales/{local}', [WelcomeController::class, 'establishment_show']);
Route::post('/valorations', [EstablishmentController::class, 'valoration']);

//RUTAS DE USUARIO
Route::middleware(["auth"])->group(function(){
    Route::get('profile',[UserController::class, "profile"]);
    Route::get('profile/editar',[UserController::class, "edit"]);
    Route::post('profile/edit',[UserController::class, "update"]);
});

Route::post('/customer/request', [CustomerController::class, 'request']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(["auth","customer"])->prefix("/customer")->namespace("customer")->group(function(){
    Route::get('/misLocales/create', [PrivateCustomerController::class ,"establishment_create"]);
    Route::post('/misLocales/store', [PrivateCustomerController::class ,"establishment_store"]);

    Route::get('/misLocales/edit/{local}', [PrivateCustomerController::class ,"edit"]);
    Route::post('/misLocales/update/{local}', [PrivateCustomerController::class ,"establishment_update"]);

    Route::get('/misLocales', [PrivateCustomerController::class ,"index"]);
    Route::get('/misLocales/{local}', [PrivateCustomerController::class ,"show"]);

    Route::delete('/misLocales', [PrivateCustomerController::class ,"destroy"]);

    Route::post('/misLocales/publicacion/add', [PrivateCustomerController::class ,"publicacion_store"]);
});

Route::middleware(["auth","admin"])->prefix("/admin")->namespace("Admin")->group(function(){
    Route::get('/', [AdminController::class ,"index"]);

    //RUTAS ADMINISTRATIVAS DE LOS EVENTOS
    Route::get('eventos', [AdminController::class ,"events_index"]);
    Route::get('crear/eventos', [AdminController::class ,"event_create"]);
    Route::get('editar/eventos/{event}', [AdminController::class ,"event_edit"]);

    Route::post('crear/eventos', [AdminController::class ,"event_store"]);
    Route::post('editar/eventos', [AdminController::class ,"event_update"]);
    Route::delete('eliminar/eventos/', [AdminController::class ,"event_destroy"]);

    //RUTAS ADMINISTRATIVAS DE LOS CLIENTES
    Route::get('solicitudes', [AdminController::class ,"request"]);
    Route::post('solicitudes', [AdminController::class ,"status"]);
    Route::get('clientes', [AdminController::class ,"customers"]);
    Route::get('usuarios', [AdminController::class ,"banned"]);

    //RUTAS ADMINISTRATIVAS DE LAS CATEGORIAS DE LOS ESTABLECIMIENTOS
    Route::get('category', [AdminController::class ,"category_index"]);
    Route::get('crear/category', [AdminController::class ,"category_create"]);
    Route::get('editar/category/{event}', [AdminController::class ,"category_edit"]);

    Route::post('crear/category', [AdminController::class ,"category_store"]);
    Route::post('editar/category', [AdminController::class ,"category_update"]);
    Route::delete('eliminar/categoria/', [AdminController::class ,"category_destroy"]);

    //GUIA DE ESTILO zona publica
    Route::get('Zona-publica/pagina', [GuiaEstilosController::class ,"pagina_public"]);
    Route::get('Zona-publica/colores', [GuiaEstilosController::class ,"colores_public"]);
    Route::get('Zona-publica/fuentes', [GuiaEstilosController::class ,"fuentes_public"]);
    Route::get('Zona-publica/botones', [GuiaEstilosController::class ,"botones_public"]);
    Route::get('Zona-publica/multimedia', [GuiaEstilosController::class ,"multimedia_public"]);
    Route::get('Zona-publica/disposicion', [GuiaEstilosController::class ,"disposicion_public"]);
    Route::get('Zona-publica/iconos', [GuiaEstilosController::class ,"iconos_public"]);
    Route::get('Zona-publica/mapa', [GuiaEstilosController::class ,"mapa_public"]);

    //GUIA DE ESTILO zona privada
    Route::get('Zona-privada/pagina', [GuiaEstilosController::class ,"pagina_private"]);
    Route::get('Zona-privada/colores', [GuiaEstilosController::class ,"colores_private"]);
    Route::get('Zona-privada/fuentes', [GuiaEstilosController::class ,"fuentes_private"]);
    Route::get('Zona-privada/botones', [GuiaEstilosController::class ,"botones_private"]);
    Route::get('Zona-privada/multimedia', [GuiaEstilosController::class ,"multimedia_private"]);
    Route::get('Zona-privada/iconos', [GuiaEstilosController::class ,"iconos_private"]);
    Route::get('Zona-privada/mapa', [GuiaEstilosController::class ,"mapa_private"]);
});
