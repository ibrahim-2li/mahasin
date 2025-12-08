<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $sections = ['hero', 'about', 'services', 'contact'];
    $contents = [];
    
    foreach ($sections as $section) {
        $contents[$section] = \App\Models\SiteContent::where('section', $section)->get()->pluck('value', 'key')->toArray();
    }
    
    return view('welcome', compact('contents'));
});

// Public Routes
Route::post('/send-message', [AdminController::class, 'sendMessage'])->name('send.message');
Route::get('/api/branches', [AdminController::class, 'getBranches'])->name('branches.index');
Route::get('/api/partners', [AdminController::class, 'getPartners'])->name('partners.index');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/content/update', [AdminController::class, 'update'])->name('admin.content.update');
    Route::post('/content/upload-image', [AdminController::class, 'uploadImage'])->name('admin.content.upload');

    // Message Routes (Admin)
    Route::get('/messages', [AdminController::class, 'getMessages'])->name('admin.messages.index');
    Route::post('/messages/{id}/read', [AdminController::class, 'markAsRead'])->name('admin.messages.read');
    Route::delete('/messages/{id}', [AdminController::class, 'deleteMessage'])->name('admin.messages.delete');

    // Branch Routes (Admin)
    Route::get('/branches', [AdminController::class, 'getBranches'])->name('admin.branches.index');
    Route::post('/branches', [AdminController::class, 'storeBranch'])->name('admin.branches.store');
    Route::post('/branches/{id}', [AdminController::class, 'updateBranch'])->name('admin.branches.update'); // Using POST for easier FormData handling
    Route::delete('/branches/{id}', [AdminController::class, 'deleteBranch'])->name('admin.branches.delete');

    // Partner Routes (Admin)
    Route::get('/partners', [AdminController::class, 'getPartners'])->name('admin.partners.index');
    Route::post('/partners', [AdminController::class, 'storePartner'])->name('admin.partners.store');
    Route::post('/partners/{id}', [AdminController::class, 'updatePartner'])->name('admin.partners.update'); // Using POST for easier FormData handling
    Route::delete('/partners/{id}', [AdminController::class, 'deletePartner'])->name('admin.partners.delete');
});

