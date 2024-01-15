<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\FactureController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::controller(FournisseurController::class)->prefix('fournisseur')->group(function(){
    Route::get('/fournisseurs' , 'list_fournisseurs');
    Route::post('/createfournisseur' , 'create_fournisserurs');
    Route::post('/dropfournisseurs' , 'drop_fournisseurs');
});



Route::controller(FactureController::class)->prefix('facture')->group(function(){
    Route::get('/typereglement' , 'get_types_reglement');
    Route::post('/createtypereglement' , 'create_types_reglement');
    Route::delete('/droptypereglement' , 'drop_types_reglement');

    Route::get('/listfactures' , 'get_list_factures') ;
    Route::post('/createfactures' , 'create_factures') ;
    Route::post('/dropfactures' , 'drop_factures') ;
});