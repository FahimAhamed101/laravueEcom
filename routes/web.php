<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guestOrVerified'])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('home');

});