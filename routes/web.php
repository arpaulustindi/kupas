<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\RegisterKunjungan;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/register-kunjungan', RegisterKunjungan::class)->name('register-kunjungan');
Route::get('/', function(){
    return view('beranda');
});
Route::get('/faq', function(){
    return view('faq');
});
Route::get('/tentang', function(){
    return view('tentang');
});
Route::get('/kontak', function(){
    return view('kontak');
});
Route::get('/antrian', function(){
    return view('antrian');
});
