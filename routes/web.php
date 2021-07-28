<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

// Route::get('/tickets', 'TicketController@index')->name('tickets.index');
Route::get('/tickets',[TicketController::class , 'index'])->name('tickets.index');
Route::get('/tickets/{tickets}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('/tickets/create', [TicketController::class , 'create'])->name('tickets.create');
