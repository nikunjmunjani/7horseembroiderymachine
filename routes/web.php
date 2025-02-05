<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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

Route::get('/', function () {
    return view('dashboard.index');
})->name('home');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

// Route::get('/services', function () {
//     return view('product_service.index');
// })->name('services');

Route::get('/product', function () {
    return view('product.index');
})->name('product');

Route::get('/shop-single', function () {
    return view('product.shop-single');
})->name('shop-single');

Route::get('/gallery', function () {
    return view('gallery.index');
})->name('gallery');

Route::get('/booking', function () {
    return view('booking.index');
})->name('booking');

Route::get('/team', function () {
    return view('team.index');
})->name('team');

Route::get('/testimonial', function () {
    return view('testimonial.index');
})->name('testimonial');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/404', function () {
    return view('404.index');
})->name('error');

Route::post('/send-contact-mail', [MailController::class, 'sendContactMail']);
Route::post('/send-service-mail', [MailController::class, 'sendServiceMail']);