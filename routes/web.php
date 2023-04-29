<?php

use App\Http\Controllers\CollaboratesController;
use App\Http\Controllers\PublicViewsController;
use Illuminate\Support\Facades\Route;

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

//Public Routes
Route::get('/',[PublicViewsController::class,'index'])->name('index');
Route::get('/about',[PublicViewsController::class,'about'])->name('about');
Route::get('/studio',[PublicViewsController::class,'studio'])->name('studio');
Route::get('/collaborators',[PublicViewsController::class,'collaborators'])->name('collaborators');
Route::get('/contact',[PublicViewsController::class,'contact'])->name('contact');

//Admin Login
Route::get('/admin/login',[PublicViewsController::class,'adminLogin'])->name('login');
Route::post('/admin/loggedIn',[PublicViewsController::class,'adminLoggedIn'])->name('adminLoggedIn');

//Admin Routes
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/dashboard',[CollaboratesController::class,'adminDashboard'])->name('adminDashboard');
    Route::get('/create-collaborator',[CollaboratesController::class,'createCollaborator'])->name('createCollaborator');
    Route::post('/collaborator-created',[CollaboratesController::class,'collaboratorCreated'])->name('collaboratorCreated');
    Route::get('/collaborators-list',[CollaboratesController::class,'collaboratorsList'])->name('collaboratorsList');
    Route::get('/update-collaborator/{id}',[CollaboratesController::class,'updateCollaborator'])->name('updateCollaborator');
    Route::post('/collaborator-updated',[CollaboratesController::class,'collaboratorUpdated'])->name('collaboratorUpdated');
    Route::get('/collaborator-deleted/{id}',[CollaboratesController::class,'collaboratorDeleted'])->name('collaboratorDeleted');
    Route::get('/logout',[CollaboratesController::class,'adminLogout'])->name('adminLogout');
});