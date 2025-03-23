<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PaketEdukasiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TestimoniController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/post/tag/{tag}', [FrontendController::class, 'post'])->name('post');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index'); // Menampilkan semua gallery
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create'); // Menampilkan form tambah
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store'); // Menyimpan data
    Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show'); // Menampilkan detail
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit'); // Menampilkan form edit
    Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update'); // Mengupdate data
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy'); // Menghapus data

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{slug}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{slug}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/admin/programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/admin/programs/create', [ProgramController::class, 'create'])->name('programs.create');
    Route::post('/admin/programs', [ProgramController::class, 'store'])->name('programs.store');
    Route::get('/admin/programs/{id}', [ProgramController::class, 'show'])->name('programs.show');
    Route::get('/admin/programs/{id}/edit', [ProgramController::class, 'edit'])->name('programs.edit');
    Route::put('/admin/programs/{id}', [ProgramController::class, 'update'])->name('programs.update');
    Route::delete('/admin/programs/{id}', [ProgramController::class, 'destroy'])->name('programs.destroy');

    Route::get('/admin/paket-edukasi', [PaketEdukasiController::class, 'index'])->name('paket-edukasi.index');
    Route::get('/admin/paket-edukasi/create', [PaketEdukasiController::class, 'create'])->name('paket-edukasi.create');
    Route::post('/admin/paket-edukasi', [PaketEdukasiController::class, 'store'])->name('paket-edukasi.store');
    Route::get('/admin/paket-edukasi/{id}', [PaketEdukasiController::class, 'show'])->name('paket-edukasi.show');
    Route::get('/admin/paket-edukasi/{id}/edit', [PaketEdukasiController::class, 'edit'])->name('paket-edukasi.edit');
    Route::put('/admin/paket-edukasi/{id}', [PaketEdukasiController::class, 'update'])->name('paket-edukasi.update');
    Route::delete('/admin/paket-edukasi/{id}', [PaketEdukasiController::class, 'destroy'])->name('paket-edukasi.destroy');

    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::get('/testimoni/{id}', [TestimoniController::class, 'show'])->name('testimoni.show');
    Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::put('/testimoni/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
});

require __DIR__.'/auth.php';
