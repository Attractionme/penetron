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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/notFound', function () {
    return view('notFound');
})->name('notFound');

Route::get('/', [\App\Http\Controllers\BlogController::class,'showFourthBlogs']);

Route::get('/editPhoto/{id}', [\App\Http\Controllers\photos\PhotoController::class,'edit'])->name('editPhoto')->middleware('auth');
Route::post('/updatePhoto/{id}', [\App\Http\Controllers\photos\PhotoController::class,'upd_photo'])->name('updPhoto')->middleware('auth');

Route::get('/editCertificate/{id}', [\App\Http\Controllers\certificates\CertificatesController::class,'edit'])->name('editCertificate')->middleware('auth');
Route::post('/updateCertificate/{id}', [\App\Http\Controllers\certificates\CertificatesController::class,'upd_certificate'])->name('updCertificate')->middleware('auth');

Route::get('/editBlog/{id}', [\App\Http\Controllers\BlogController::class,'edit'])->name('editBlog')->middleware('auth');
Route::post('/updateBlog/{id}', [\App\Http\Controllers\BlogController::class,'upd_blog'])->name('updblog')->middleware('auth');

Route::get('/works',[\App\Http\Controllers\photos\PhotoController::class,'getArticles'])->name('works');
Route::get('/certificates',[\App\Http\Controllers\certificates\CertificatesController::class,'selectCertificates']);

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/blogsAdmin',[\App\Http\Controllers\BlogController::class,'showBlogsAdmin'])->name('blogsAdmin')->middleware('auth');

Route::post('/createBlog',[\App\Http\Controllers\BlogController::class,'store'])->name('createblog')->middleware('auth');

Route::get('delete-blogs/{id}',[\App\Http\Controllers\BlogController::class, 'delete_blogs'])->name('delete-blogs')->middleware('auth');
Route::get('/commentsAdmin',[\App\Http\Controllers\CommentController::class,'show'])->name('commentsAdmin')->middleware('auth');
Route::get('delete-comment/{id}',[\App\Http\Controllers\CommentController::class, 'delete_comment'])->name('delete-comment')->middleware('auth');
    // Users
Route::get('users',[\App\Http\Controllers\admins\Users\UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('users/create',[\App\Http\Controllers\admins\Users\UserController::class,'create'])->name('users.create')->middleware('auth');
Route::post('users/store',[\App\Http\Controllers\admins\Users\UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::get('users/edit/{id}',[\App\Http\Controllers\admins\Users\UserController::class, 'edit'])->name('users.edit')->middleware('auth');
Route::post('users/update/{id}',[\App\Http\Controllers\admins\Users\UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('users/delete/{id}',[\App\Http\Controllers\admins\Users\UserController::class, 'destroy'])->name('users.delete')->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contactAdmin',[\App\Http\Controllers\MassagesController::class,'show'])->name('contactAdmin')->middleware('auth');

Route::get('delete-messege/{id}',[\App\Http\Controllers\MassagesController::class, 'delete_messege'])->name('delete-messege')->middleware('auth');

Route::get('/blog',[\App\Http\Controllers\BlogController::class,'show'])->name('blog');
Route::get('single-blog/{id}',[\App\Http\Controllers\BlogController::class,'getdata'])->name('single-blog');
Route::post('/storeComment',[\App\Http\Controllers\CommentController::class,'store'])->name('storeComment');
Route::post('/storeMassage',[\App\Http\Controllers\MassagesController::class,'store'])->name('storeMassage');

Route::get('/createBlog', function () {
    return view('createBlogs');
})->name('createBlog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('/login/submit',[\App\Http\Controllers\admins\LoginController::class,'login'])->name('submit');

//PHOTOS

Route::get('/photos',[\App\Http\Controllers\photos\PhotoController::class,'show'])->name('photo')->middleware('auth');
Route::get('/createPhoto',[\App\Http\Controllers\photos\PhotoController::class,'selectCategories'])->name('createPhoto')->middleware('auth');
Route::post('/storePhoto',[\App\Http\Controllers\photos\PhotoController::class,'store'])->name('storePhoto')->middleware('auth');
Route::get('delete-photos/{id}',[\App\Http\Controllers\photos\PhotoController::class, 'delete_photos'])->middleware('auth');

Route::get('/certificatesAdmin',[\App\Http\Controllers\certificates\CertificatesController::class,'show'])->name('certificatesAdmin')->middleware('auth');
Route::get('/createCertificate',[\App\Http\Controllers\certificates\CertificatesController::class,'newCertificate'])->name('createCertificate')->middleware('auth');
Route::post('/storeCertificate',[\App\Http\Controllers\certificates\CertificatesController::class,'store'])->name('storeCertificate')->middleware('auth');
Route::get('delete_Certificate/{id}',[\App\Http\Controllers\certificates\CertificatesController::class, 'delete_Certificate'])->middleware('auth');

Route::get('/editPhoto', function () {
    return view('editPhotos');
})->name('editPhoto')->middleware('auth');

//CATEGORIES
Route::get('/categories',[\App\Http\Controllers\categories\CategoryController::class,'show'])->name('category')->middleware('auth');
Route::get('/createCategory', function () {
    return view('createCategories');
})->name('createCategory')->middleware('auth');
Route::post('/storeCategory',[\App\Http\Controllers\categories\CategoryController::class,'store'])->name('storeCategory')->middleware('auth');

Route::get('delete-category/{id}',[\App\Http\Controllers\categories\CategoryController::class, 'delete_category'])->name('delete-category')->middleware('auth');

Route::get('/editCategory', function () {
    return view('editCategories');
})->name('editCategory')->middleware('auth');
