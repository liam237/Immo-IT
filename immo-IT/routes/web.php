<?php

use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('welcome');
});

// Liste des biens
Route::get('/properties', [PropertiesController::class, 'index']);

// Formulaire de contact
Route::get('/contact', [ContactRequestController::class, 'create']);
Route::post('/contact', [ContactRequestController::class, 'store']);

// Tableau de bord administrateur
Route::get('/admin/requests', [ContactRequestController::class, 'index']);
Route::resource('/admin/properties', PropertiesController::class);


Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::prefix('admin')->group(function () {
    Route::resource('properties', PropertiesController::class);
});


// Routes pour la gestion des biens immobiliers
Route::get('/admin/properties/create', [PropertiesController::class, 'create'])->name('properties.create');
Route::post('/admin/properties', [PropertiesController::class, 'store'])->name('properties.store');


Route::get('/properties/{id}/edit', [PropertiesController::class, 'edit'])->name('properties.edit');
