<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', [HomeController::class,'index']);

Route::middleware(['auth'])->group(function(){
    
    Route::post('/post',[PostController::class,'create']);

    Route::get('/dashboard', [Dashboard::class,'show_post'])->name('dashboard');

    Route::get('/post',[PostController::class,'index'])->name('post_index');

    Route::post('/post/update/{id}',[PostController::class,'update']);

    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('edit_post');
    
    Route::get('/post/delete/{id}',[PostController::class,'delete']);
});

require __DIR__.'/auth.php';
