<?php

use App\Models\Video;
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
    return view('pages.index');
})->name('index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/event', function () {
    return view('pages.event');
})->name('event');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/courses', function () {
    $videos = Video::all();

    return view('pages.courses', compact('videos'));
})->name('courses');

Route::get('/single-course', function () {
    return view('pages.single-course');
})->name('single-course');

Route::post('/email',[\App\Http\Controllers\Video::class, 'sendMessage'])->name('email');

Route::post('/video', [\App\Http\Controllers\Video::class, 'store'])->name('video');

//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
