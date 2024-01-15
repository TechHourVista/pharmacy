<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config_fun(){
        return view ('Components/configurations');
    }
}
