<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public Homepage Route
Route::get('/', function () {
    $sections = ['hero', 'about', 'services', 'contact'];
    $contents = [];
    
    foreach ($sections as $section) {
        $contents[$section] = \App\Models\SiteContent::where('section', $section)->get()->pluck('value', 'key')->toArray();
    }
    
    return view('welcome', compact('contents'));
});

// Public API Routes
Route::post('/send-message', [AdminController::class, 'sendMessage'])->name('send.message');
Route::get('/api/branches', [AdminController::class, 'getBranches'])->name('branches.index');
Route::get('/api/partners', [AdminController::class, 'getPartners'])->name('partners.index');

// Default Dashboard (redirect to admin dashboard)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes - Protected by Authentication
Route::prefix('admin')->middleware(['auth'])->group(function () {
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
    Route::post('/branches/{id}', [AdminController::class, 'updateBranch'])->name('admin.branches.update');
    Route::delete('/branches/{id}', [AdminController::class, 'deleteBranch'])->name('admin.branches.delete');

    // Partner Routes (Admin)
    Route::get('/partners', [AdminController::class, 'getPartners'])->name('admin.partners.index');
    Route::post('/partners', [AdminController::class, 'storePartner'])->name('admin.partners.store');
    Route::post('/partners/{id}', [AdminController::class, 'updatePartner'])->name('admin.partners.update');
    Route::delete('/partners/{id}', [AdminController::class, 'deletePartner'])->name('admin.partners.delete');
});

// Authentication Routes (Login, Register, Password Reset, etc.)
require __DIR__.'/auth.php';
