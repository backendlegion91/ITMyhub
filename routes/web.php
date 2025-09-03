<?php

use Illuminate\Support\Facades\Route;

// Frontend Controllers
use App\Http\Controllers\ContactController;

// Admin Controllers
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\TestimonialController;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');


/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('dashboard', [HeroController::class, 'dashboard'])->name('dashboard');

    // Hero Section
    Route::get('hero-section', [HeroController::class, 'index'])->name('hero.index');
    Route::get('hero-section/create', [HeroController::class, 'create'])->name('hero.create');
    Route::post('hero-section/store', [HeroController::class, 'store'])->name('hero.store');
    Route::get('hero-section/{hero}/edit', [HeroController::class, 'edit'])->name('hero.edit');
    Route::put('hero-section/{hero}/update', [HeroController::class, 'update'])->name('hero.update');
    Route::delete('hero-section/{hero}/delete', [HeroController::class, 'destroy'])->name('hero.destroy');

    // About Section
    Route::get('about', [AboutSectionController::class, 'index'])->name('about.index');
    Route::get('about/create', [AboutSectionController::class, 'create'])->name('about.create');
    Route::post('about/store', [AboutSectionController::class, 'store'])->name('about.store');
    Route::get('about/{about}/edit', [AboutSectionController::class, 'edit'])->name('about.edit');
    Route::put('about/{about}', [AboutSectionController::class, 'update'])->name('about.update');
    Route::delete('about/{about}', [AboutSectionController::class, 'destroy'])->name('about.destroy');

    // Education
    Route::get('education', [EducationController::class, 'index'])->name('education.index');
    Route::get('education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('education', [EducationController::class, 'store'])->name('education.store');
    Route::get('education/{education}', [EducationController::class, 'show'])->name('education.show');
    Route::get('education/{education}/edit', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('education/{education}', [EducationController::class, 'update'])->name('education.update');
    Route::delete('education/{education}', [EducationController::class, 'destroy'])->name('education.destroy');

    // Skills
    Route::get('skills', [SkillController::class, 'index'])->name('skills.index');
    Route::get('skills/create', [SkillController::class, 'create'])->name('skills.create');
    Route::post('skills', [SkillController::class, 'store'])->name('skills.store');
    Route::get('skills/{skill}/edit', [SkillController::class, 'edit'])->name('skills.edit');
    Route::put('skills/{skill}', [SkillController::class, 'update'])->name('skills.update');
    Route::delete('skills/{skill}', [SkillController::class, 'destroy'])->name('skills.destroy');

    // Projects
    Route::get('project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('project/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

    // Experience
    Route::get('experience', [ExperienceController::class, 'index'])->name('experience.index');
    Route::get('experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('experience', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('experience/{experience}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::put('experience/{experience}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::delete('experience/{experience}', [ExperienceController::class, 'destroy'])->name('experience.destroy');

    // Messages
    Route::get('messages', [ContactMessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{id}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
    Route::post('messages/{id}/reply', [ContactMessageController::class, 'reply'])->name('messages.reply');
    Route::patch('messages/{id}/toggle-read', [ContactMessageController::class, 'toggleRead'])->name('messages.toggleRead');

    // Testimonials
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

});
