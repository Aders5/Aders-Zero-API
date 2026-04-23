<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HeartbeatMonitor;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/monitor', HeartbeatMonitor::class)->name('monitor'); // <--- AQUÍ
});

require __DIR__.'/settings.php';
