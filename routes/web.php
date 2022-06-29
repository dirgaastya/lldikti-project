<?php

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

Route::get('/', function () {
    return view('livewire.pages.home',['pagetitle' => 'Beranda']);
});
Route::get('/profil', function () {
    return view('livewire.pages.profile',['pagetitle' => 'Profil']);
});
Route::get('/profil/lldikti-wilayah-iv', function () {
    return view('livewire.pages.profile.lldikti-profil',['pagetitle' => 'Profil']);
});
Route::get('/profil/kepala-lldikti-wilayah-iv', function () {
    return view('livewire.pages.profile.head-lldikti-profile',['pagetitle' => 'Profil Kepala']);
});
Route::get('/layanan', function () {
    return view('livewire.pages.services',['pagetitle' => 'Layanan']);
});
Route::get('/layanan-kami', function () {
    return view('livewire.pages.services.our-services-page',['pagetitle' => 'Layanan Kami']);
});
Route::get('/info-lldikti-iv', function () {
    return view('livewire.pages.info-page',['pagetitle' => 'Info']);
});
Route::get('/akuntabilitas-lldikti-iv', function () {
    return view('livewire.pages.accountability-page',['pagetitle' => 'Akuntabilitas']);
});
Route::get('/berita', function () {
    return view('livewire.pages.news-page',['pagetitle' => 'Berita']);
});
Route::get('/informasi', function () {
    return view('livewire.pages.information-page',['pagetitle' => 'Informasi Publik']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard',['pagetitle' => 'Dashboard']);
    })->name('dashboard');
});
