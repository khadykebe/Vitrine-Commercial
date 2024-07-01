<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InfoController;


Route::get('/',[ClientController::class,'index']);
Route::get('dashdoard',[DashboardController::class,'index'])->name('dashboard');
Route::post('login',[DashboardController::class,'login'])->name('login');
//produit
Route::get('produit',[ProduitController::class,'index'])->name('produit');
Route::post('/addProduit',[ProduitController::class,'store'])->name('addProduit');
Route::post('/editProduit/{id}',[ProduitController::class,'update'])->name('editProduit');
Route::delete('/deleteProduit/{id}',[ProduitController::class,'destroy'])->name('deleteProduit');

//presentation
Route::get('presentation',[PresentationController::class,'index'])->name('presentation');
Route::post('/addPresent',[PresentationController::class,'store'])->name('addPresent');
Route::post('/editPresnt/{id}',[PresentationController::class,'update'])->name('editPresnt');
Route::delete('/deletePresent/{id}',[PresentationController::class,'destroy'])->name('deletePresent');


//partenaire
Route::get('partenaire',[PartenaireController::class,'index'])->name('partenaire');
Route::post('/addpartenaire',[PartenaireController::class,'store'])->name('addpartenaire');
Route::delete('/deletePartenair/{id}',[PartenaireController::class,'destroy'])->name('deletePartenair');


//slide
Route::get('slide',[SlideController::class,'index'])->name('slide');
Route::post('/addSlide',[SlideController::class,'store'])->name('addSlide');
Route::post('/editSlide/{id}',[SlideController::class,'update'])->name('editSlide');


//galery
Route::get('gallery',[GalleryController::class,'index'])->name('gallery');
Route::post('/addgal',[GalleryController::class,'store'])->name('addgal');
Route::delete('/deletegat/{id}',[GalleryController::class,'destroy'])->name('deletegat');

// categorie

Route::get('categorie',[CategorieController::class,'index'])->name('categorie');
Route::post('/addcategorie',[CategorieController::class,'store'])->name('addcategorie');
Route::post('/aditCategorie/{id}',[CategorieController::class,'update'])->name('aditCategorie');
Route::delete('/deleteCategorie/{id}',[CategorieController::class,'destroy'])->name('deleteCategorie');

// infos
Route::get('/info',[InfoController::class,'index'])->name('info');
Route::post('/editInfo/{id}',[InfoController::class,'update'])->name('editInfo');
