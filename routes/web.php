<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::get('/admin/adduser', function () {
    return view('admin.addUser');
})->middleware(['auth:admin', 'verified'])->name('admin.adduser');


require __DIR__.'/adminauth.php';


Route::get('/mitra/dashboard', function () {
    return view('dashboardMitra');
})->middleware(['roles', 'verified'])->name('dashboardMitra');

Route::get('/user/dashboard', function () {
    return view('dashboardUser');
})->middleware(['isUser', 'verified'])->name('dashboard');


Route::get('/mitra/dashboard', [VideoController::class, 'kategoriMitra'])->middleware(['roles', 'verified'])->name('dashboardMitra');
Route::get('/user/dashboard', [VideoController::class, 'kategoriUser'])->middleware(['auth', 'verified'])->name('dashboardUser');
