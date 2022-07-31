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

Route::get('/', \App\Http\Livewire\Homepage::class)->name('index');

Route::prefix('account')->as('account.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', \App\Http\Livewire\Account\Home::class)->name('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::as('pages.')->group(function () {
    Route::get('how-to-refer', [\App\Http\Controllers\PageController::class, 'howToRefer'])->name('how-to-refer');
    Route::get('ninja-power-system', [\App\Http\Controllers\PageController::class, 'ninjaPower'])->name('ninja-power-system');

    Route::get('contact-us', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');
    Route::post('contact-us', [\App\Http\Controllers\PageController::class, 'storeContact'])->name('contact.store');
    Route::get('about-us', [\App\Http\Controllers\PageController::class, 'about'])->name('about-us');
    Route::get('terms-conditions', [\App\Http\Controllers\PageController::class, 'terms'])->name('terms');
    Route::get('privacy-policy', [\App\Http\Controllers\PageController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('cookie-policy', [\App\Http\Controllers\PageController::class, 'cookiePolicy'])->name('cookie-policy');
    Route::get('return-refund-policy', [\App\Http\Controllers\PageController::class, 'refundPolicy'])->name('refund-policy');
    Route::get('disclaimer', [\App\Http\Controllers\PageController::class, 'disclaimer'])->name('disclaimer');
    Route::get('company-policies', [\App\Http\Controllers\PageController::class, 'policyCompliance'])->name('company-policies');


    Route::get('website-design', [\App\Http\Controllers\PageController::class, 'webDesign'])->name('web-design');
    Route::get('graphic-design', [\App\Http\Controllers\PageController::class, 'graphicDesign'])->name('graphic-design');
    Route::get('content-creation', [\App\Http\Controllers\PageController::class, 'contentCreation'])->name('content-creation');
    Route::get('social-media-marketing', [\App\Http\Controllers\PageController::class, 'smm'])->name('social-media-marketing');

});
require __DIR__.'/auth.php';
