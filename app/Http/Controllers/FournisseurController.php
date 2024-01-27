<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FournisseurService;
use App\Models\Fournisseur;

class FournisseurController extends Controller
{
    public function create_fournisserurs(Request $request , FournisseurService $fournisseurService) {

        $fournisseurService->create_fournisserurs($request);

        return response()->json([
            'status'=>true,
            'message'=>'fournisseur created ✅'
        ]);
    }


    public function list_fournisseurs(Request $request,FournisseurService $fournisseurService){
        $fournisseurs = $fournisseurService->list_fournisseurs($request);

        return view("pages.fournisseurs.showfournisseurs" ,["fournisseurs"=>$fournisseurs]);
    }

    public function pageneate(Request $request){
        $count = Fournisseur::count();
        (int)$limit = (int)$request->input("limit");
        (int)$offset = (int)$request->input("part") * ($limit - 1) ;
        $fournisseurs = Fournisseur::skip($offset)->take(10)->get();

        return response()->json([

        ]);
    }


    public function drop_fournisseurs(Request $request , FournisseurService $fournisseurService){
        $is_deleted = $fournisseurService->drop_fournisseurs($request);

        return response()->json([
            'status'=>true,
            'is_deleted'=>$is_deleted,
        ]);
    }
}


// insert into "reglement_factures" ("type_reglement_id", "date_reglement", "created_by", "facture_id", "updated_at", "created_at")
// values (1, '2024-01-16 00:00:00', 2, 4, '2024-01-19 14:25:40', '2024-01-19 14:25:40'))