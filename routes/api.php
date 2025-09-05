<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorrentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
Route::get('/torrents/type', [TorrentController::class, 'getByType']);
Route::get('/torrents/categorydata', [TorrentController::class, 'getCategory']);
Route::get('/torrent/{id}/{slug}', [TorrentController::class, 'getDetailData']);
Route::get('/user/{param1}/{param2?}', [UserController::class, 'index'])->name('torrents.user');
Route::get('/library/movies', [TorrentController::class, 'getMovieLibraryData']);
Route::post('/torrents/delete', [TorrentController::class, 'delete'])->name('upload.delete');
Route::get('/option/category', [TorrentController::class, 'getOptionCategory']);
Route::get('/option/torrent', [TorrentController::class, 'getOptionTorrent']);

Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->get('/uploads', [TorrentController::class, 'uploads']);

Route::get('/edit/{id}',[TorrentController::class,'edit']);

Route::post('/savetorrent', [TorrentController::class, 'savetorrent'])->name('torrents.savetorrent');
Route::middleware('auth:sanctum')->post('/torrents', [TorrentController::class, 'store'])->name('torrents.store');