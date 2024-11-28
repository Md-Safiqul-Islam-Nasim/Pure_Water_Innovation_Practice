<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Auth\RoleSelectionController;
use App\Http\Controllers\Backend\Settings\ProfileController;

Route::get('/', function () {
    return view('frontend.layouts.home.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('backend.layouts.dashboard.dashboard');
        }

        return redirect()->route('user-dashboard');
    })->name('dashboard');

    Route::get('/user-dashboard', function () {
        $user = Auth::user();

        if ($user->role === 'user') {
            return view('frontend.layouts.dashboard.dashboard');
        }

        return redirect()->route('dashboard');
    })->name('user-dashboard');
});

// forgot password and reset link 
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');



// In web.php or routes file
Route::get('/select-role', [RoleSelectionController::class, 'showRoleSelection'])->name('selectRole');
Route::post('/set-role', [RoleSelectionController::class, 'setRole'])->middleware('auth')->name('set.role');

// Route::resource('products', HomeController::class)->middleware('auth');
// Route::middleware('auth')->group(function () {
//     //Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.setting');
//     // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::resource('products', ProductController::class)->middleware('auth');
Route::get('/select-role', [RoleSelectionController::class, 'showRoleSelection'])->name('selectRole');
Route::get('/product-management', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

require __DIR__ . '/auth.php';
require base_path('routes/backend.php');
