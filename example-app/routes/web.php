<?php

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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// [To DO me!] group route in middle ware

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkuserstatus');

    Route::get('/add', [App\Http\Controllers\AddUserController::class, 'add']);

     Route::post('/create', [App\Http\Controllers\AddUserController::class, 'create'])->name('user.create');

     Route::get('/edit/{id}', [App\Http\Controllers\EditUserController::class, 'edit'])->name('user.edit');

     Route::get('/update/{id}', [App\Http\Controllers\EditUserController::class, 'update'])->name('user.update');

     Route::get('/delete', [App\Http\Controllers\AddUserController::class, 'delete'])->name('user.delete'); // [To Do ME!] why no take {id} ??

    Route::get('/create', function(){
        return view('create');
    });

    Route::get('/notFound',function(){
        return view('notfound');
    })->name('notfound');


// Route::post('/create',function(){
//     $article = new Article();
//     $article->title = request('title');
//     $article->body = request('body');
//     $article->save();
// });
