<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TableCategoryController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\ReservationCartController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationHistoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WaitlistController;

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
    return view('welcome');
});



Route::get('/sign-up', [UserController::class, 'signUp'])->name('sign-up');

Route::get('/contact-us', [UserController::class, 'contactUs'])->name('contact-us');

Route::get('/about-us', [UserController::class, 'aboutUs'])->name('about-us');

Route::get('/menu-one', [UserController::class, 'menuOne'])->name('menu-one');

Route::get('/menu-two', [UserController::class, 'menuTwo'])->name('menu-two');

Route::get('/menu-three', [UserController::class, 'menuThree'])->name('menu-three');

Route::get('/menu-four', [UserController::class, 'menuFour'])->name('menu-four');

//submit registration form route
Route::post('/create-user', [UserController::class, 'createUser'])->name('create-user');

Route::get('/verify-otp/{email}', [UserController::class, 'showOtpForm'])->name('verify.otp');

Route::post('/verify-otp/{email}/submit', [UserController::class, 'submitOtp'])->name('verify.otp.submit');

Route::get('/resend-otp/{email}',[UserController::class, 'resendOtp'])->name('resend.otp');

//Forgot Password View
Route::get('forget-password', [ForgotPasswordController::class, 'forgetPassword'])->name('forgetPassword');

Route::post('forgotPassword', [ForgotPasswordController::class, 'forgotPassword'])->name('forgotPassword.email');

Route::get('confirm-code', [ForgotPasswordController::class, 'confirmCode'])->name('confirmCode.email');

Route::post('submit-password-reset-code', [ForgotPasswordController::class, 'submitPasswordResetCode'])->name('submitPasswordResetCode');

Route::get('/password-reset', [ForgotPasswordController::class, 'passwordReset'])->name('password-reset');

Route::post('/create-new-password', [ForgotPasswordController::class, 'createNewPassword'])->name('create.new-password');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');

    Route::get('user-list', [AdminController::class, 'userList'])->name('user.list');

    Route::patch('user/{user}/ban', [AdminController::class, 'ban'])->name('user.ban');
    Route::patch('user/{user}/unban', [AdminController::class, 'unban'])->name('user.unban');

Route::resource('/table-categories', TableCategoryController::class);
Route::resource('/tables', TableController::class);

Route::get('reservations', [AdminReservationController::class, 'index'])->name('admin.reservations.index');
    Route::patch('reservations/{reservation}/update-status', [AdminReservationController::class, 'updateStatus'])->name('admin.reservations.updateStatus');

    Route::patch('/tables/{table}/release', [AdminReservationController::class, 'resetRelease'])->name('admin.tables.release');

    Route::delete('reservations/{reservation}', [AdminReservationController::class, 'destroy'])->name('admin.reservations.destroy');


    Route::resource('coupons', CouponController::class);
Route::get('/reviews', [ReviewController::class, 'index'])->name('admin.reviews.index');
    Route::patch('/reviews/{review}/status', [ReviewController::class, 'updateStatus'])->name('admin.reviews.updateStatus');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

    Route::get('/event-bookings', [EventBookingController::class, 'index'])->name('admin.event_bookings.index');
    Route::patch('/event-bookings/{eventBooking}/status', [EventBookingController::class, 'updateStatus'])->name('admin.event_bookings.updateStatus');
    Route::delete('/event-bookings/{eventBooking}', [EventBookingController::class, 'destroy'])->name('admin.event_bookings.destroy');
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/{blogPost}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/blog/{blogPost}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blog/{blogPost}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    // Route::get('/blog/{blogPost}', [BlogController::class, 'showSingle'])->name('blog.showSingle');




});

Route::get('reservations/browse', [ReservationController::class, 'browse'])->name('reservations.browse');
Route::get('reservations/create/{table}', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('reservations/store', [ReservationController::class, 'store'])->name('reservations.store');



Route::post('/cart/add', [ReservationCartController::class, 'add'])->name('cart.add');
Route::get('/cart', [ReservationCartController::class, 'view'])->name('cart.view');
Route::post('/cart/remove', [ReservationCartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/checkout', [ReservationCartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart/update', [ReservationCartController::class, 'update'])->name('cart.update');

Route::post('/pay', [PaystackController::class, 'redirectToGateway'])->name('paystack.pay');
Route::get('/pay/callback', [PaystackController::class, 'handleGatewayCallback'])->name('paystack.callback');

Route::get('/my-reservations', [ReservationHistoryController::class, 'index'])->name('reservations.history');

Route::patch('/reservations/{id}/cancel', [ReservationHistoryController::class, 'cancel'])->name('reservations.cancel');

Route::get('/reservations/{id}/edit', [ReservationHistoryController::class, 'edit'])->name('reservations.edit');
Route::patch('/reservations/{id}/update', [ReservationHistoryController::class, 'update'])->name('reservations.update');

Route::post('/waitlist', [WaitlistController::class, 'store'])->name('waitlist.store');

Route::post('/favourites', [FavouriteController::class, 'store'])->name('favourites.store');
Route::get('/favourites', [FavouriteController::class, 'index'])->name('favourites.index');
Route::delete('/favourites/{favourite}', [FavouriteController::class, 'destroy'])->name('favourites.destroy');
Route::post('/reviews/{reservation}', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/reviews', [ReviewController::class, 'publicIndex'])->name('reviews.public');

Route::get('/event-booking', [EventBookingController::class, 'create'])->name('event_bookings.create');
Route::post('/event-booking', [EventBookingController::class, 'store'])->name('event_bookings.store');

Route::get('/event-paystack/callback', [EventBookingController::class, 'handlePaystackCallback'])->name('event_paystack.callback');

Route::get('/blog', [BlogController::class, 'show'])->name('blog.show');

Route::get('/blog/{post}', [BlogController::class, 'showSingle'])->name('blog.showSingle');
