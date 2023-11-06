<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::get('/',[Homecontroller::class,'homepage']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    Route::group(['middleware'=>['auth']],function(){
        Route::get('/home',[Homecontroller::class,'index'])->name('home');
        Route::get('users/index',[UserController::class,'index'])->name('users.home');
    });

// Route::get('/user/create',[Admincontroller::class,'create'])->middleware(['Admin'])->name('user.create');
 Route::get('/user/index',[Admincontroller::class,'index'])->middleware(['auth','Admin'])->name('user.index');
 Route::get('/user/create',[Admincontroller::class,'create'])->middleware(['auth','Admin'])->name('user.create');
 Route::post('/user/store',[Admincontroller::class,'store'])->middleware(['auth','Admin'])->name('user.store');
 Route::get('/edit/{user}',[Admincontroller::class,'edit'])->middleware(['auth','Admin'])->name('user.edit');
 Route::put('/user/{user}',[Admincontroller::class,'update'])->middleware(['auth','Admin'])->name('user.update');
 Route::delete('/{user}',[Admincontroller::class,'destroy'])->middleware(['auth','Admin'])->name('user.delete');
 Route::get('blogs/index',[BlogController::class,'index'])->middleware(['auth','Admin'])->name('blog.index');
 Route::get('/blogs/create',[BlogController::class,'create'])->middleware(['auth','Admin'])->name('blog.create');
 Route::post('/bolgs/store',[BlogController::class,'store'])->middleware(['auth','Admin'])->name('blog.store');
 Route::get('blogs/{posts}',[BlogController::class,'show'])->middleware(['auth','Admin'])->name('blog.show');
 require __DIR__.'/auth.php';
