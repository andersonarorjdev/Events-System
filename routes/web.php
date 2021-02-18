<?php

use App\Http\Controllers\{
    EventsController
};

use Illuminate\Support\Facades\Route;

use App\Models\Event;


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

    $events = Event::all();
    return view('index', ['events' => $events]);
});

Route::get('/events/list', [EventsController::class,'index']);
Route::get('/events/list/{id}', [EventsController::class, 'show']);
Route::get('/events/create', [EventsController::class, 'create']);

Route::post('/events',[EventsController::class, 'store']);


