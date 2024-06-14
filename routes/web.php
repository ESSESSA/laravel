<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\Paniercontroller;
use App\Http\Controllers\Productscontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebsiteController::class,'Acceuil'])->name('website.Acceuil');

Route::get('/contact', [WebsiteController::class,'Contact'])->name('website.contact');
Route::post('/contact', [WebsiteController::class,'Contact'])->name('website.contact');


Route::get('/presentation', [WebsiteController::class,'Presentation'])->name('website.presentation');
Route::get('/produits', [WebsiteController::class,'Produits'])->name('website.produits');
Route::get('/checkout', [WebsiteController::class,'checkout'])->name('website.checkout');
Route::middleware (['auth'])->group(function(){
Route::resource('categories',categoriescontroller::class);
Route::resource('products',Productscontroller::class);
});
Route::post("panier/addtocart",[PanierController::class,"addToCart"])->name("panier.addtocart");
Route::get("panier",[PanierController::class,"panier"])->name("panier.panier");
Route::get("panier/delete/{indice}",[PanierController::class,"delprodpanier"])->name("panier.delprodpanier");
Route::get("panier/vide",[PanierController::class,"viderpanier"])->name("panier.viderpanier");







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
