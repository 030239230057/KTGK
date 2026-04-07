<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieController1;
use App\Http\Controllers\MovieController3;

// --- PUBLIC ROUTES (Lauren & Thạch Thảo) ---
// Homepage - showing the 12 popular movies
Route::get('/', [MovieController1::class, 'index']);

// Movie Details, Genres, and Search
Route::get('/theloai/{id}', [MovieController1::class, 'getByGenre']);
Route::post('/timkiem', [MovieController1::class, 'search']);
Route::get('/chitiet/{id}', [MovieController1::class, 'detail']);


// --- ADMIN ROUTES (Thu Hoài) ---
// Movie Management (List)
Route::get('/admin/movies', [MovieController::class, 'trangQuanLy'])->name('admin.movies');

// Delete Movie (Soft Delete)
Route::get('/admin/movies/delete/{id}', [MovieController::class, 'xoaMemPhim'])->name('admin.movies.delete');


// --- MOVIE CREATION (Lauren/Controller3) ---
Route::get('/movie/create', [MovieController3::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController3::class, 'store'])->name('movie.store');