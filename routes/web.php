<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/career', [HomeController::class, 'career']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);
Route::get('/packages', [HomeController::class, 'packages']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/book-publisher-in-india', [HomeController::class, 'book_publisher_in_india']);
Route::get('/ebook-publisher-in-india', [HomeController::class, 'ebook_publisher_in_india']);
Route::get('/book-editorial-services', [HomeController::class, 'book_editorial_services']);
Route::get('/book-designing-services', [HomeController::class, 'book_designing_services']);
Route::get('/book-marketing-services', [HomeController::class, 'book_marketing_services']);
Route::get('/author-support', [HomeController::class, 'author_support']);
Route::get('/terms-and-condition', [HomeController::class, 'terms_and_condition']);
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy']);
Route::get('/legal-disclaimer', [HomeController::class, 'legal_disclaimer']);
Route::get('/refund-and-cancellation-policy', [HomeController::class, 'refund_and_cancellation_policy']);
Route::get('/print-on-demand-book-publishing', [HomeController::class, 'print_on_demand_book_publishing']);
Route::get('/klf', [HomeController::class, 'klf']);
Route::get('/book-stall', [HomeController::class, 'book_stall']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/klf-sessions', [HomeController::class, 'klf_sessions']);
