<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DestinationImageController;
use App\Http\Controllers\Admin\LikeController;
use App\Http\Controllers\Admin\TripController;
use App\Http\Controllers\Adminpanel as ControllersAdminpanel;
use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

// use the trips controller to send to the welcome view the trips

use App\Http\Controllers\Trips;

Route::get('/', [Trips::class, 'index'])->name('welcome');
Route::get('/filter', [Trips::class, 'filter'])->name('filter');
Route::get('/trip/{id}', [Trips::class, 'show'])->name('trip');

Route::post('/stripe/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('booking.success');
Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('booking.cancel');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('dashboard/admin', [ControllersAdminpanel::class, 'index'])->name('admin.dashboard')->middleware('check.user.role:admin');


Route::prefix('dashboard/admin/trips')->name('admin.trips.')->middleware(['auth', 'check.user.role:admin'])->group(function () {
    Route::get('/', [TripController::class, 'index'])->name('index');
    Route::post('/', [TripController::class, 'store'])->name('store');
    Route::get('/{trip}', [TripController::class, 'show'])->name('show');
    Route::get('/{trip}/edit', [TripController::class, 'edit'])->name('edit');
    Route::put('/{trip}', [TripController::class, 'update'])->name('update');
    Route::delete('/{trip}', [TripController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/admin/bookings')->name('admin.bookings.')->middleware(['auth', 'check.user.role:admin'])->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::post('/bookings', [BookingController::class, 'store'])->name('store');
    Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/admin/comments')->name('admin.comments.')->middleware(['auth', 'check.user.role:admin'])->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('index');
    Route::delete('/{comment}', [CommentController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/admin/likes')->name('admin.likes.')->middleware(['auth', 'check.user.role:admin'])->group(function () {
    Route::get('/', [LikeController::class, 'index'])->name('index');
    Route::delete('/{like}', [LikeController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/admin/destination-images')->name('admin.destination-images.')->middleware(['auth', 'check.user.role:admin'])->group(function () {
    Route::get('/', [DestinationImageController::class, 'index'])->name('index');
    Route::get('/create', [DestinationImageController::class, 'create'])->name('create');
    Route::post('/', [DestinationImageController::class, 'store'])->name('store');
    Route::get('/{destinationImage}/edit', [DestinationImageController::class, 'edit'])->name('edit');
    Route::put('/{destinationImage}', [DestinationImageController::class, 'update'])->name('update');
    Route::delete('/{destinationImage}', [DestinationImageController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/admin/users')->name('admin.users.')->middleware(['auth', 'check.user.role:admin'])->group(function () {
    Route::get('/', [AllUsersController::class, 'index'])->name('index');

});
