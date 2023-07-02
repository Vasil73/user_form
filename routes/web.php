<?php

use App\Http\Controllers\FormProcessorController;
use App\Http\Controllers\HelloController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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

Route::get('/user_form', [ \App\Http\Controllers\FormProcessorController::class, 'index' ]);

Route::post('/user_form/data', [ \App\Http\Controllers\FormProcessorController::class, 'store' ]);

Route::get('/user', [\App\Http\Controllers\FormProcessorController::class, 'user'])->name('hello_user');

Route::get('/user_hello', [\App\Http\Controllers\HelloController::class, 'hello']);