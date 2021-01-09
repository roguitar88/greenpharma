<?php

//use App\Mail\NewMail;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Auth;
//use Laravel\Fortify\Fortify;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\SpreadsheetController;

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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/feed', [FeedController::class, 'feed'])->name('feed');
Route::middleware(['auth:sanctum', 'verified'])->post('/feed', [FeedController::class, 'store'])->name('store');
Route::middleware(['auth:sanctum', 'verified'])->get('/view', [SpreadsheetController::class, 'index'])->name('view');
//Route::post('/feed_parse', [FeedController::class, 'parseImport'])->name('feed_parse');
//Route::post('/feed_process', [FeedController::class, 'processImport'])->name('feed_process');

/*
Route::get('/feed', function () {
    return view('feed');
});
*/

/*
Fortify::loginView(function () {
    return view('auth.login');
});
*/

/*
//Route with parameter(s)
Route::get('/user/{id}', function ($id)) {
    return "Your ID is " . $id;
}
*/

Route::get('/terms', [TermsController::class, 'terms'])->name('terms');

Route::get('/privacy', [TermsController::class, 'privacy'])->name('privacy');

//Route::get('/feed', [FeedController::class, 'feed'])->name('feed');

Route::middleware(['auth:sanctum', 'verified'])->get('/manage-users', [ManageUsersController::class, 'manageUsers'])->name('manage-users');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [SalesController::class, 'index'])->name('index');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard', [SalesController::class, 'filter'])->name('filter');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/{industry}/{branch}', [SalesController::class, 'filter({industry},{branch})'])->name('filter');

/*
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/cancel', function () {
    return view('cancel');
});
*/

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

/*

Route::get('/test-email', function () {

    $user = [
        'name' => 'Mahedi Hasan',
        'info' => 'Laravel Developer'
    ];

    Mail::to('rogeriobsoares5@gmail.com')->send(new NewMail($user));

    dd("success");

    //return 'Uma mensagem acabou de ser enviada para rogeriobsoares5@gmail.com';

});
*/
