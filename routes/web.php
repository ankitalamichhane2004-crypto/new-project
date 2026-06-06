<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\HomeGalleryController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/home',[NewController::class, 'home'])->name('home');

Route::get('/demo',[NewController::class, 'product'])->name('product');

Route::get('/aboutProduct',[NewController::class, 'aboutProduct'])->name('aboutProduct');


Route::get('/blog',[NewController::class, 'blog'])->name('blog');


Route::get('/contactus',[NewController::class, 'contactus'])->name('contactus');


Route::get('/welcome',[NewController::class, 'welcome'])->name('welcome');


Route::get('/whychooseus',[NewController::class, 'whychooseus'])->name('whychooseus');
Route::get('/frontend-gallery',
[GalleryController::class,'frontendgallery'])
->name('frontend.gallery');

Route::middleware('auth')->group(function () {
    
Route::get('/dashboard', [NewController::class, 'dashboard'])->name('dashboard');
Route::get('Blog/blogtable',[BlogController::class,'index'])->name('blogtable');
Route::get('Blog/blogform',[BlogController::class,'create'])->name('blogform');
Route::POST('Blog/blogstore',[BlogController::class,'store'])->name('blogstore');
Route::get('Blog/blogshow/{blog}',[BlogController::class, 'show'])->name('blogshow');
Route::get('Blog/blogedit/{blog}',[BlogController::class, 'edit'])->name('blogedit');
Route::POST('Blog/blogupdate/{blog}',[BlogController::class,'update'])->name('blogupdate');
Route::POST('Blog/blogdelete/{blog}',[BlogController::class,'destroy'])->name('blogdelete');
Route::get('Blog/blogedit/{blog}',[BlogController::class, 'edit'])->name('blogedit');
Route::resource('product',ProductController::class);
Route::resource('review',ReviewController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('hero', HeroSectionController::class);
Route::resource('home-gallery', HomeGalleryController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


