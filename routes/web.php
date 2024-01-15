<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ConfigController;
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
    Route::get('','dash_fun');
});

Route::controller(InventoryController::class)->group(function(){
    Route::get('inventory','inventory_fun');
});

Route::controller(InventoryController::class)->group(function(){
    Route::get('medicines','medicines_fun');
});


Route::controller(InventoryController::class)->group(function(){
    Route::get('medicines/detail','medicines_detail_fun');
});

Route::controller(InventoryController::class)->group(function(){
    Route::get('medicines/groupe','medicines_groupe_fun');
});

Route::controller(InventoryController::class)->group(function(){
    Route::get('medicines/groupe/detail','medicines_groupe_detail_fun');
});

Route::controller(ReportsController::class)->group(function(){
    Route::get('report','report_fun');
});

Route::controller(ReportsController::class)->group(function(){
    Route::get('report/sales','report_sales_fun');
});
Route::controller(ReportsController::class)->group(function(){
    Route::get('report/payments','report_payments_fun');
});

Route::controller(ConfigController::class)->group(function(){
    Route::get('configuration','config_fun');
});