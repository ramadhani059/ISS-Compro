<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CompanyAboutController;
use App\Http\Controllers\CompanyStatisticController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\OurPrincipleController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectClientController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/team', [FrontController::class, 'team'])->name('front.team');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
// Route::get('/product', [FrontController::class, 'product'])->name('front.product');
// Route::get('/appointment', [FrontController::class, 'appointment'])->name('front.appointment');
// Route::post('/appointment/store', [FrontController::class, 'appointment_store'])->name('front.appointment_store');

Route::get('/dashboard', function () {
    $pageTitle = 'Dashboard Admin';
    return view ('admin/dashboard', [
        'pageTitle' => $pageTitle,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('myprofile', [App\Http\Controllers\ProfileController::class, 'myadminprofile'])->name('myprofile');
    Route::get('editmyprofile', [App\Http\Controllers\ProfileController::class, 'editmyadminprofile'])->name('editmyprofile');
    // Route::match(['put', 'patch'], 'deleteaccount/{id}', [App\Http\Controllers\ProfileController::class, 'nonactiveadminaccount'])->name('nonactiveaccount');
    Route::match(['put', 'patch'], 'editmyprofile/{id}', [App\Http\Controllers\ProfileController::class, 'updatemyadminprofile'])->name('updatemyprofile');

    Route::match(['put', 'patch'], 'editcompanycontact/{id}', [App\Http\Controllers\CompanyContactController::class, 'updatecompanycontact'])->name('updatecompanycontact');

    Route::prefix('admin')->name('admin.')->group(function () {
        // Landing Page
        Route::middleware('can:manage hero sections')->group(function () {
            Route::resource('landing-page/hero_sections', HeroSectionController::class);
        });

        Route::middleware('can:manage principles')->group(function () {
            Route::resource('landing-page/principles', OurPrincipleController::class);
        });

        Route::middleware('can:manage statistics')->group(function() {
            Route::resource('landing-page/statistics', CompanyStatisticController::class);
        });

        // Our Team
        Route::middleware('can:manage teams')->group(function () {
            Route::resource('teams', OurTeamController::class);
        });

        // Our Product
        Route::middleware('can:manage products')->group(function () {
            Route::resource('products', ProductController::class);
        });

        Route::middleware('can:manage clients')->group(function () {
            Route::resource('clients', ProjectClientController::class);
        });

        // Testimoni
        Route::middleware('can:manage testimonials')->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });

        // Route::middleware('can:manage abouts')->group(function () {
        //     Route::resource('abouts', CompanyAboutController::class);
        // });

        // Route::middleware('can:manage appointments')->group(function () {
        //     Route::resource('appointments', AppointmentController::class);
        // });
    });

});

require __DIR__.'/auth.php';
