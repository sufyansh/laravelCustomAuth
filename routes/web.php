<?php

use App\Http\Controllers\SampleController;
use App\Http\Controllers\Test_Controller;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [SampleController::class, 'index'])->name('login');
    Route::get('registration', [SampleController::class, 'registration'])->name('registration');

    Route::post('validate_registration', [SampleController::class, 'validate_registration'])->name('sample.validate_registration');
    Route::post('validate_login', [SampleController::class, 'validate_login'])->name('sample.validate_login');
});
Route::group(['middleware' => ['auth']], function () {

    Route::get('logout', [SampleController::class, 'logout'])->name('logout');
    Route::get('user', [Test_Controller::class, 'show']);
    Route::get('/create', [Test_Controller::class, 'create']);
    Route::get('/edit/{id}', [Test_Controller::class, 'edit']);
    Route::post('/update', [Test_Controller::class, 'update']);
    Route::post('/user', [Test_Controller::class, 'store']);
    Route::get('delete/{id}', [Test_Controller::class, 'destroy']);

    Route::get('dashboard', [SampleController::class, 'dashboard'])->name('dashboard');
});
