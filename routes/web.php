<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/dashboard', function () {
    $users = User::where('id', '!=', auth()->user()->id)->get();
    return view('dashboard', [
        'users' => $users
    ]);
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
