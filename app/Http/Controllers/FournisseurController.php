<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use Exception;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class FournisseurController extends Controller
{
    public function create_fournisserurs(Request $request) {

        $validated = $request->validate([
            'name'=>'required|',
            'tel'=>'required|regex:/^[0-9]{10}$/',
            'fax'=>'required|',
            'address'=>'required|',
            'mail'=>'required|email',
            'ice'=>'required|',
            'i_f'=>'required|',
            'cnss'=>'required|',
            'rc'=>'required|',
            'patente'=>'required|',
            'delege_comercial'=>'required|',
            'tel_delege_comercial'=>'required|',
        ]);

        Fournisseur::create([       
            'name'=>$request->input('name'),
            'tel'=>$request->input('tel'),
            'fax'=>$request->input('fax'),
            'address'=>$request->input('address'),
            'mail'=>$request->input('mail'),
            'ice'=>$request->input('ice'),
            'i_f'=>$request->input('i_f'),
            'cnss'=>$request->input('cnss'),
            'rc'=>$request->input('rc'),
            'patente'=>$request->input('patente'),
            'delege_comercial'=>$request->input('delege_comercial'),
            'tel_delege_comercial'=>$request->input('tel_delege_comercial'),
            'created_by'=>$request->input('created_by'),
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'fournisseur created ✅'
        ]);
    }


    public function list_fournisseurs(){
        $fournisseurs = Fournisseur::all()
                                    ->take(6);

        return response()->json([
            'status'=>true,
            'data'=>$fournisseurs,
        ]);
    }


    public function drop_fournisseurs(Request $request){

        $list_fournisseurs = array_map(function ($item){
            return (int)$item;
        } , $request->input('list_fournisseurs'));

        Fournisseur::destroy($list_fournisseurs);

        return response()->json([
            'status'=>true,
            'message'=>'the record deleted'
        ]);
    }
}
