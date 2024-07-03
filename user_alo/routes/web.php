<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\LoginRegistration;
use Illuminate\Http\Request;
use App\Http\Controllers\userdashboard;

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

Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});


Route::get('/create-account',[LoginRegistration::class,'loginandregistration'])->name('loginandregistration');

Route::post('/insert',[LoginRegistration::class,'createRegistration'])->name('createRegistration');

Route::post('/login',[LoginRegistration::class,'login'])->name('login');


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    $userId = $request->user()->id;
    event(new \Illuminate\Auth\Events\Verified($request->user()));
    return redirect()->route('welcome', ['id' => $userId]); // Pass the user's ID as a parameter
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth'])->name('verification.send');


Route::get('/forgot-password',[LoginRegistration::class,'forget'])->middleware('guest')->name('password.request');

Route::post('/forget-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = \Illuminate\Support\Facades\Password::sendResetLink(
        $request->only('email')
    );

    return $status === \Illuminate\Support\Facades\Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)])->withInput();
})->name('password.email');

Route::get('/reset-password/{token}',[LoginRegistration::class,'showResetForm'])->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = \Illuminate\Support\Facades\Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (\App\Models\User $user, string $password) {
            $user->forceFill([
                'password' => $password,
            ])->setRememberToken(\Illuminate\Support\Str::random(5));

            $user->save();

            event(new \Illuminate\Auth\Events\PasswordReset($user));
        }
    );

    return $status === \Illuminate\Support\Facades\Password::PASSWORD_RESET
        ? redirect()->route('loginandregistration')->with('status', __('Password reset successfully.'))
        : back()->withErrors(['email' => [__($status)]])->withInput();
})->name('password.update');

Route::get('logout',[LoginRegistration::class,'logout'])->name('logout');


    Route::get('/',[Homepage::class,'welcome'])->name('home');

    Route::get('/products/category',[Homepage::class,'blog'])->name('category');

    Route::get('/contact',[Homepage::class,'contact'])->name('contact');

    Route::get('/products/sub-category',[Homepage::class,'checkout'])->name('subcategory');

    Route::get('/products/search',[Homepage::class,'blog_details'])->name('blog_details');

    Route::get('/shop-details',[Homepage::class,'shop_details'])->name('shop-details');

    Route::get('/products',[Homepage::class,'shop_grid'])->name('shop-grid');

    Route::get('/shopping-cart',[Homepage::class,'shopping_cart'])->name('shopping-cart');

    Route::post('/send-mail',[Homepage::class,'sendMail'])->name('sendMail');




Route::middleware(['auth'])->group(function (){
        Route::get('/welcome/{id}',[LoginRegistration::class,'welcome'])->name('welcome');

        Route::get('/product-details/{id}/{prod}',[userdashboard::class,'product_details'])->name('product_details');

        Route::post('/insertCart',[userdashboard::class,'cart_insert'])->name('cart_insert');

        Route::get('/cart/{id}',[userdashboard::class,'cart_details'])->name('cart_details');

        Route::get('/deleteFromCart', [userdashboard::class, 'deleteFromCart'])->name('deleteFromCart');

        Route::post('/updateCart',[userdashboard::class,'updateCart'])->name('updateCart');

        Route::get('/checkout/{id}',[userdashboard::class,'checkout'])->name('checkout');

        Route::post('/makePay',[userdashboard::class,'makePayment'])->name('makePya');

        Route::post('/favorite',[userdashboard::class,'favorite'])->name('favo');

        Route::get('/favorites/{id}',[userdashboard::class,'favroitePages'])->name('fav');

        Route::get('/deleteFav',[userdashboard::class,'deleteFavs'])->name('deleteFav');

        Route::get('/products/{id}',[userdashboard::class,'productsall'])->name('productsall');

        Route::get('/search',[userdashboard::class,'searchFunction'])->name('search');

        Route::get('/invoice/{id}',[userdashboard::class,'invoice'])->name('invoice');

        Route::get('/contact/{id}',[userdashboard::class,'contract'])->name('contract');

        Route::get('/products/{id}/category',[userdashboard::class,'category'])->name('categoryies');

        Route::get('/products/{id}/sub-category',[userdashboard::class,'sub_category'])->name('subcategoryies');

        Route::get('/products/{id}/search-data',[userdashboard::class,'search_data'])->name('search_data');

        Route::get('/purchase-history/{id}',[userdashboard::class,'purchase'])->name('purchase');
});

