<?php


use App\Http\Controllers\Backend\Settings\ProfileController;

use App\Http\Controllers\Auth\RoleSelectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Web\Frontend\HomeController;
Route::get('/', function () {
    return view('frontend.layouts.home.index');
});

Route::middleware(['auth', 'role.redirect'])->group(function () {
    Route::get('/dashboard', function (): Factory|View {
        return view('backend.layouts.dashboard.dashboard');
    })->name('dashboard');

    Route::get('/user-dashboard', function () {
        return view('frontend.layouts.dashboard.dashboard');
    })->name('user-dashboard');
});
// In web.php or routes file
Route::get('/select-role', [RoleSelectionController::class, 'showRoleSelection'])->name('selectRole');
Route::post('/set-role', [RoleSelectionController::class, 'setRole'])->name('setRole');

// Route::resource('products', HomeController::class)->middleware('auth');
Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.setting');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('products', ProductController::class)->middleware('auth');
Route::get('/select-role', [RoleSelectionController::class, 'showRoleSelection'])->name('selectRole');
Route::get('/product-management', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

require __DIR__ . '/auth.php';
require base_path('routes/backend.php');