<?php

use App\Exceptions\GeneralException;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\BoneLiversionController;
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


Route::controller(DashController::class)->group(function(){
    // 
    Route::get('' , "dashboard")->name("dashboard");
});

Route::controller(FournisseurController::class)->prefix("fournisseur")->group(function(){
    // 
    Route::get('/fournisseurs' , 'list_fournisseurs')->name("fournisseurs");

    Route::get("/ajoute" , function(){return view("pages.fournisseurs.fournisseurajoute");})->name("fourni_ajout");
    Route::post('/create-fournisseur' , 'create_fournisserurs');
    Route::delete('/drop-fournisseurs' , 'drop_fournisseurs');
});


Route::controller(BoneLiversionController::class)->prefix("bon")->group(function(){
    Route::get('/bons' , 'list_bons')->name("show_bons_url");
    Route::get("/bon-form" , 'get_bon_form')->name("BonForm");

    Route::get("/bon-search-product" , 'search_product');
    Route::get("/bon-product-detail" , 'detail_product');


});



// errors