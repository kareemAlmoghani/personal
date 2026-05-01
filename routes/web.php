<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EducationeController;
use App\Http\Controllers\Dashboard\ExperienceController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\SkillController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function(){

//     Route::get('/', function () {
//         return view('welcome');
// });

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::prefix('dashboard')->name('dashboard.')->group(function(){
Route::resource('experiences',ExperienceController::class);
Route::resource('educationes',EducationeController::class);
Route::resource('skills',SkillController::class);
Route::resource('languages',LanguageController::class);
Route::resource('projects',ProjectController::class);
Route::get('settings',[DashboardController::class,'settings'])->name('settings');
Route::put('settings',[DashboardController::class,'update_settings']);
Route::get('messages',[DashboardController::class,'messages'])->name('messages');
Route::delete('messages/{message}',[DashboardController::class,'delete_messages'])->name('delete_messages');
})->middleware(['auth', 'verified','admin']);

Route::name('front.')->group(function(){
Route::get('/',[MainController::class,'index'])->name('index');
Route::get('resume',[MainController::class,'resume'])->name('resume');
Route::get('/preview-resume', [MainController::class, 'preview'])->name('preview_resume');
Route::get('/download-resume', [MainController::class, 'download'])->name('download_resume');
Route::get('projects',[MainController::class,'projects'])->name('projects');
Route::get('contact',[MainController::class,'contact'])->name('contact');
Route::post('contact',[MainController::class,'contact_data']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
