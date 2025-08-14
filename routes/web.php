<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AboutController;

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

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Routes
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/team', [AboutController::class, 'team'])->name('team');

// Services Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.detail');

// Temporary routes (will be replaced with controllers later)
Route::get('/projects', function() {
    return view('frontend.pages.projects');
})->name('projects');

Route::get('/project/{slug}', function($slug) {
    return view('frontend.pages.project-detail', ['slug' => $slug]);
})->name('project.detail');

Route::get('/pricing', function() {
    return view('frontend.pages.pricing');
})->name('pricing');

Route::get('/blog', function() {
    return view('frontend.pages.blog');
})->name('blog');

Route::get('/blog/{slug}', function($slug) {
    return view('frontend.pages.blog-detail', ['slug' => $slug]);
})->name('blog.detail');

Route::get('/faq', function() {
    return view('frontend.pages.faq');
})->name('faq');

Route::get('/contact', function() {
    return view('frontend.pages.contact');
})->name('contact');

// Form Submissions
Route::post('/contact', function() {
    // Handle contact form submission
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
})->name('contact.store');

Route::post('/newsletter/subscribe', function() {
    // Handle newsletter subscription
    return redirect()->back()->with('success', 'You have been subscribed to our newsletter!');
})->name('newsletter.subscribe');

// Search
Route::get('/search', function() {
    $query = request('search-input');
    // Handle search logic here
    return view('frontend.pages.search-results', ['query' => $query]);
})->name('search');

// Footer Links
Route::get('/terms', function() {
    return view('frontend.pages.terms');
})->name('terms');

Route::get('/privacy', function() {
    return view('frontend.pages.privacy');
})->name('privacy');

Route::get('/sitemap', function() {
    return view('frontend.pages.sitemap');
})->name('sitemap');

Route::get('/investor-policy', function() {
    return view('frontend.pages.investor-policy');
})->name('investor-policy');