<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController; // Import the LoginController
use Illuminate\Support\Facades\Auth;

// Route for the home page
Route::get('/', function () {
    return view('welcome'); // Ensure this view exists
});

// Resource route for products
Route::resource('products', ProductController::class);

// Add a route for the login page (GET for form display)
Route::get('/login', function () {
    return view('Authentication.login'); // Ensure login.blade.php is in resources/views/Authentication/
})->name('login');

// Add a POST route for handling login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Add a route for the register page (GET for form display)
Route::get('/register', function () {
    return view('Authentication.register'); // Ensure register.blade.php is in resources/views/Authentication/
})->name('register');

// Add a POST route for handling registration form submission
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Add a POST route for logging out
Route::post('/logout', function () {
    Auth::logout(); // Log out the user
    return redirect()->route('login'); // Redirect to the login page
})->name('logout');