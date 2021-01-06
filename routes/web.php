<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\ApplicantController;

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

Route::get('/', [PagesController::class ,'index']);
Route::get('/jobs', [PagesController::class ,'showJobs'])-> name('jobs');
Route::get('/login',[PagesController::class ,'login'])-> name('login');

Route::get('/admin', [AdminPagesController::class ,'admin']);

Route::post('/admin', [AdminPagesController::class ,'adminpost']);

Route::get('/apply',[ApplicantController::class ,'apply']);
Route::get('/adminpage', [ApplicantController::class ,'showapplicants']);
// Route::view('/apply','apply');
Route::post('/apply', [App\Http\Controllers\ApplicantController::class ,'applystore']);

