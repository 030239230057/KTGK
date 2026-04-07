<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController3; 


Route::get('/', [App\Http\Controllers\MovieController::class, 'index']);
Route::get('/movie/create', [MovieController3::class, 'create'])->name('movie.create');
Route::post('/movie/store', [MovieController3::class, 'store'])->name('movie.store');

Route::get('/', [App\Http\Controllers\MovieController1::class, 'index']);
Route::get('/theloai/{id}', [App\Http\Controllers\MovieController1::class, 'getByGenre']);
Route::post('/timkiem', [App\Http\Controllers\MovieController1::class, 'search']);
Route::get('/chitiet/{id}', [App\Http\Controllers\MovieController1::class, 'detail']);
use App\Http\Controllers\MovieController;
Route::get('/', function () {
    return view('welcome'); 
});
Route::get('/admin/movies', [MovieController::class, 'trangQuanLy'])->name('admin.movies');

// 3. Chức năng Xóa phim
Route::get('/admin/movies/delete/{id}', [MovieController::class, 'xoaMemPhim'])->name('admin.movies.delete');


