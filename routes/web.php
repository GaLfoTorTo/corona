<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\site;

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

Route::get('/', [site::class, 'home'])->name('home');

Route::get('/contato', [site::class, 'contato'])->name('contato');

Route::get('/cidades', [site::class, 'cidades'])->name('cidades');

Route::get('/links', [site::class, 'links'])->name('links');

Route::get('/sobre', [site::class, 'sobre'])->name('sobre');
