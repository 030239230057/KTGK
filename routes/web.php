<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\MovieController3; 


Route::get('/', [App\Http\Controllers\MovieController::class, 'index']);
Route::get('/movie/create', [MovieController3::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController3::class, 'store'])->name('movie.store');
=======
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/admin/movies', [MovieController::class, 'trangQuanLy'])->name('admin.movies');

// 3. Chức năng Xóa phim
Route::get('/admin/movies/delete/{id}', [MovieController::class, 'xoaMemPhim'])->name('admin.movies.delete');
>>>>>>> origin/thuhoai
