<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PagesController;
    use App\Http\Controllers\AdminController;

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

    Route::get('/', [PagesController::class, 'index'])->name('home');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('/faq', [PagesController::class, 'faq'])->name('faq');

    Route::middleware(['auth'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Oturum açma ve kayıt rotaları
    Auth::routes();
