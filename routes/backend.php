<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\Settings\DynamicPageController;
use App\Http\Controllers\Web\Backend\Settings\SystemSettingController;


    //! Route for DashboardController
    // Route::get('/dashboard', function () {
    //         return view('backend.layouts.dashboard.dashboard');
    //     })->middleware(['auth', 'verified'])->name('dashboard');

    //! Route for ProfileController
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.setting');
Route::post('/update-profile', [ProfileController::class, 'UpdateProfile'])->name('update.profile');
Route::post('/update-profile-picture', [ProfileController::class, 'UpdateProfilePicture'])->name('update.profile.picture');
Route::post('/update-profile-password', [ProfileController::class, 'UpdatePassword'])->name('update.Password');



Route::get('/system', [SystemSettingController::class, 'index'])->name('system.setting');
Route::post('/update-system', [SystemSettingController::class, 'index'])->name('system.update');

Route::get('/dynamic-page', [DynamicPageController::class, 'index'])->name('dynamic_page.index');