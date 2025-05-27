<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CSVUploadController;
use App\Http\Controllers\MediaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/', [FrontendController::class, 'index']);
Route::get('/contact-us', [FrontendController::class, 'contactPage'])->name('contact.page');
Route::post('/contact-us-submit', [FrontendController::class, 'submitContact'])->name('contact.submit');
Route::post('/popup-submit', [FrontendController::class, 'submitPopup'])->name('popup.submit');
//Route::get('/blog/{slug}', [FrontendController::class, 'blogDetail']);
Route::get('/admission-in-cbse-school', [FrontendController::class, 'admissionEnquiry']);
Route::get('/thank-you', [FrontendController::class, 'thankYou']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/blog/page/{page?}', [FrontendController::class, 'blog'])
    ->name('blogs.index')
    ->where('page', '[0-9]+');
//Route::redirect('/blog', '/blog/page/1');    
Route::get('/{slug}', [FrontendController::class, 'pageDetail']);

/*==================Admin Section==============*/
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin/posts/', [PostController::class, 'index'])->middleware('auth');
Route::post('/admin/posts', [PostController::class, 'store'])->middleware('auth');
Route::get('/admin/posts/{id}', [PostController::class, 'show'])->middleware('auth');
Route::get('/admin/posts/{id}/edit', [PostController::class, 'edit'])->middleware('auth')->name('admin.posts.edit');
Route::put('/admin/posts/{id}', [PostController::class, 'update'])->middleware('auth')->name('admin.posts.update');
Route::get('/admin/allposts/', [PostController::class, 'allPosts'])->middleware('auth');
/*==============Blog Section==============*/

Route::get('/admin/blogs/', [BlogController::class, 'index'])->middleware('auth');
Route::post('/admin/blogs', [BlogController::class, 'store'])->middleware('auth');
Route::get('/admin/blogs/{id}', [PostCBlogControllerontroller::class, 'show'])->middleware('auth');
Route::get('/admin/blogs/{id}/edit', [BlogController::class, 'edit'])->middleware('auth')->name('admin.blogs.edit');
Route::put('/admin/blogs/{id}', [BlogController::class, 'update'])->middleware('auth')->name('admin.blogs.update');
Route::get('/admin/allblogs/', [BlogController::class, 'allBlogs'])->middleware('auth');

/*==============Gallery Section============*/
Route::get('/admin/gallery/create', [GalleryController::class, 'create'])->middleware('auth')->name('admin.gallery.create');
Route::post('/admin/gallery/store', [GalleryController::class, 'store'])->middleware('auth')->name('admin.gallery.store');

/*==================Upload CSV============*/
Route::get('/admin/upload-csv', [CSVUploadController::class, 'index'])->middleware('auth');
Route::post('/admin/upload-csv', [CSVUploadController::class, 'upload'])->name('csv.upload');

/*==============Media Section===================*/
Route::get('/admin/media', [MediaController::class, 'index'])->middleware('auth')->name('media.index');
Route::post('/media/upload', [MediaController::class, 'upload'])->middleware('auth')->name('media.upload');
Route::delete('/admin/media/{id}', [MediaController::class, 'delete'])->middleware('auth')->name('media.delete');


