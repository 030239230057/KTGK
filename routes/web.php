<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieController1;

Route::get('/trangchu', [MovieController1::class, 'index']); 

Route::get('/theloai/{id}', [MovieController1::class, 'getByGenre']);
Route::post('/timkiem', [MovieController1::class, 'search']);
Route::get('/chitiet/{id}', [MovieController1::class, 'detail']);

Route::get('/admin/movies', [MovieController::class, 'trangQuanLy'])->name('admin.movies');
Route::get('/admin/movies/delete/{id}', [MovieController::class, 'xoaMemPhim'])->name('admin.movies.delete');