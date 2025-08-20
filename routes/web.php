<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\PricingController;

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

// Projects Routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.detail');


// Pricing Routes
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::post('/pricing/select', [PricingController::class, 'selectPlan'])->name('pricing.select');

// Blog Routes
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/search', [BlogController::class, 'search'])->name('blog.search');
    Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
    Route::get('/tag/{tag}', [BlogController::class, 'tag'])->name('blog.tag');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.detail');
    Route::post('/comment', [BlogController::class, 'comment'])->name('blog.comment');
});


// FAQ Routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::post('/faq/submit', [FaqController::class, 'submit'])->name('faq.submit');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

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