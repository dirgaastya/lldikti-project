<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\PublicInfo\Laws;
use App\Http\Livewire\Dashboard\NewsPostPage;
use App\Http\Livewire\Dashboard\PostInfoPage;
use App\Http\Livewire\Pages\Services\SubmissionPage;
use App\Http\Livewire\Pages\Services\OnlineServicesPage;

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
// Profile
Route::get('/profil', function () {
    return view('livewire.pages.profile',['pagetitle' => 'Profil']);
});
Route::get('/profil/lldikti-wilayah-iv', function () {
    return view('livewire.pages.profile.lldikti-profil',['pagetitle' => 'Profil']);
});
Route::get('/profil/kepala-lldikti-wilayah-iv', function () {
    return view('livewire.pages.profile.head-lldikti-profile',['pagetitle' => 'Profil Kepala']);
});

// Services
Route::get('/layanan', function () {
    return view('livewire.pages.services',['pagetitle' => 'Layanan']);
});
Route::get('/layanan-kami', function () {
    return view('livewire.pages.services.our-services-page',['pagetitle' => 'Layanan Kami']);
});
Route::get('/layanan-online', OnlineServicesPage::class)->name('layanan-online');

Route::get('/cara-pengajuan-layanan', SubmissionPage::class)->name('pengajuan-layanan');

// Info
Route::get('/info-lldikti-iv', function () {
    return view('livewire.pages.info-page',['pagetitle' => 'Info']);
});

// Accountability
Route::get('/akuntabilitas-lldikti-iv', function () {
    return view('livewire.pages.accountability-page',['pagetitle' => 'Akuntabilitas']);
});

// News
Route::get('/berita', function () {
    return view('livewire.pages.news-page',['pagetitle' => 'Berita']);
});

// Information
Route::get('/informasi-publik', function () {
    return view('livewire.pages.information-page',['pagetitle' => 'Informasi Publik']);
});
Route::get('/standar-publik-pelayanan', function () {
    return view('livewire.pages.public-info.spp-lldikti',['pagetitle' => 'Standar Pelayanan Publik']);
});
Route::get('/produk-hukum', Laws::class)->name('produk-hukum');

// 

// Dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/posts-info', PostInfoPage::class)->name('post-info');
    Route::get('/posts-news', NewsPostPage::class)->name('news-info');
    Route::get('/dashboard', function () {
        return view('dashboard',['pagetitle' => 'Dashboard']);
    })->name('dashboard');
});
