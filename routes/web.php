<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminClass;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\weigthController;
use App\Http\Controllers\DistanceController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\ShowBenchmarksController;
use App\Http\Controllers\Livewire\ListChat;



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/reserve', function () {
    return view('class.reserve');
})->middleware(['auth', 'verified'])->name('reserve');*/



//Route::get('/reserve/{date}', [ReserveController::class ,'show'])->middleware(['auth', 'verified'])->name('reserveDate');


Route::get('/chat',function () {
    return view('chat.chat');
})->middleware(['auth', 'verified'])->name('chat');


//Route::get('/chat', [ListChat::class,'load'])->middleware(['auth', 'verified'])->name('chat');




                    //Colaborations
Route::get('/collaborations', function () {
    return view('collaborations.collaborations');
})->middleware(['auth', 'verified'])->name('collaborations');

Route::get('/challenge', function () {
    return view('benchmarks.challenge');
})->middleware(['auth', 'verified'])->name('challenge');

/*Route::get('/distance', function () {
    return view('benchmarks.distance');
})->middleware(['auth', 'verified'])->name('distance');*/

Route::get('/games', function () {
    return view('benchmarks.games');
})->middleware(['auth', 'verified'])->name('games');

                    //Benchmarks

Route::get('/benchmarks', function () {
    return view('benchmarks.benchmarks');
})->middleware(['auth', 'verified'])->name('benchmarks');

    //Weigth
Route::get('/weigth', [WeigthController::class,'show'])->middleware(['auth', 'verified'])->name('weigth');
/*Route::get('/weigth', function () {
    return view('benchmarks.weigth');})->middleware(['auth', 'verified'])->name('weigth');
*/

    //Distance
Route::get('/distance', [DistanceController::class,'show'])->middleware(['auth', 'verified'])->name('distance');

    //Challenge
Route::get('/challenge', [ChallengeController::class,'show'])->middleware(['auth', 'verified'])->name('challenge');

    //Games
Route::get('/games', [GamesController::class,'show'])->middleware(['auth', 'verified'])->name('games');

    //ShowData Benchmarks
Route::get('/showBenchmarks/{id}', [ShowBenchmarksController::class,'show'])->middleware(['auth', 'verified'])->name('showBenchmarks');

Route::post('/benchmarks', [ShowBenchmarksController::class, 'newBenchmark'])->name('addBenchmark');

/*Route::post('/showBenchmarks', [ShowBenchmarksController::class, 'show'], function(){
    return view('benchmarks.benchmarksShow');
})->name('newBenchmark');*/


                // Admin

Route::get('/admin', function () {
    $classes = DB::table('bookings')->get();

    if(Auth::user()->privileges != 1)
        return redirect('/dashboard');
    else
        return view('admin.admin');
    
})->middleware(['auth', 'verified'])->name('admin');


Route::get('/admin/{date}', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('viewClass');

Route::post('/admin', [AdminClass::class, 'addClass'], function(){
    return view('admin.admin');
})->name('newClass');



                // Middleware


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Reserva de clases

//Route::get('/reserve', [ReserveController::class ,'show'])->middleware(['auth', 'verified'])->name('reserve');
Route::get('/reserve', function(){ return view('class.reserve'); })->middleware(['auth', 'verified'])->name('reserve');