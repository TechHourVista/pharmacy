<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function inventory_fun(){
        return view('Components/inventory/inventory');
    }

    public function medicines_fun(){
        return view('Components/inventory/medicines/medicines');
    }

    public function medicines_detail_fun(){
        return view('Components/inventory/medicines/detail');
    }

    public function medicines_groupe_fun(){
        return view('Components/inventory/medicines-groupes/groupes');
    }

    public function medicines_groupe_detail_fun(){
        return view('Components/inventory/medicines-groupes/groupes-detais');
    }
}
