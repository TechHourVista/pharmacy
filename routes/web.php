<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournisseurController;

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

Route::view('/' , 'pharmacy.home');


Route::controller(FournisseurController::class)->group(function(){
    Route::get('/fournisseurs' , 'all_fournisseurs');
    Route::post('/createfournisseur' , 'create_fournisserurs');
});
