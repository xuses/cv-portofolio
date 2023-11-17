<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\depanController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\pengaturanHalamanController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', [depanController::class, "index"]);

Route::get('/dashboard', function () {
    return view('dashboard.layout');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(
    function () {
        ##Route::get('/', function(){
            ##return view('dashboard.layout');

        ##});
        Route::get('/',[halamanController::class, 'index']);
        Route::resource('halaman', halamanController::class);
        Route::resource('experience', experienceController::class);
        Route::resource('education', educationController::class);
        Route::get('skill', [skillController::class,"index"])->name('skill.index');
        Route::post('skill', [skillController::class,"update"])->name('skill.update');
        Route::get('riwayat', [riwayatController::class,"index"])->name('riwayat.index');
        Route::post('riwayat', [riwayatController::class,"update"])->name('riwayat.update');
        Route::get('pengaturanHalaman', [pengaturanHalamanController::class,"index"])->name('pengaturanHalaman.index');
        Route::post('pengaturanHalaman', [pengaturanHalamanController::class,"update"])->name('pengaturanHalaman.update');
    }
    
);


require __DIR__.'/auth.php';
