<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facture ;

use App\Services\FactureService;
use App\Services\Bl_avoireService;



class FactureController extends Controller
{
    // $-----------------------------
    public function get_types_reglement() {

        $types_regelements = DB::table('type_reglements')->get();
        return response()->json([
            'status'=>true,
            'data'=>$types_regelements,
        ]);
    }

    // $-----------------------------
    public function create_types_reglement(Request $request) {

        $validated = $request->validate([
            'libelle_type'=>'required',
        ]);
        $libell = strtolower($request->input('libelle_type'));

        DB::table('type_reglements')->insert([
            "libelle_type"=>$libell,
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'created'
        ]);
    }

    // $-----------------------------
    public function drop_types_reglement(Request $request){
        $libell = strtolower($request->input('libelle_type'));
        $deleted = DB::table('type_reglements')->where('libelle_type' , '=' , $libell)->delete();

        return response()->json(
            [
                'status'=>true,
                'isDeleted'=>$deleted,
            ]);

    }

    // $-----------------------------
    public function get_list_factures() {

        $factures = Facture::take(10)->get();

        return response()->json([
            'status'=>true , 
            'data'=>$factures
        ]);
    }

    // $-----------------------------
    public function show_facture(Request $request , FactureService $factureService){
        
        $data = $factureService->show_facture($request);

        return response()->json([
            "status"=>true ,
            "data"=>$data,
        ]);
    }

    // $-----------------------------
    public function create_factures(Request $request , 
                                    FactureService $factureService , Bl_avoireService $bl_avoireService)
    {

        $facture_id = $factureService->create_factures($request);
        $bl_avoireService->create_bl_avoire($request , $facture_id);
        
        return response()->json([
            "status"=>true , 
            "message"=>"created succfully",
        ]);
    }

    // $-----------------------------
    public function drop_factures(Request $request , FactureService $factureService) {
        
        $deleted = $factureService->drop_factures($request);
        return response()->json([
            'status'=>true,
            'is_deleted'=>$deleted,
        ]);

    }

    // public function create_bl_avoire(Request $request , Bl_avoireService $bl_avoireService)
    // {
    //     $bl_avoireService->create_bl_avoire($request);

    //     return response()->json([
    //         "status"=>true,
    //         "message"=>"bl_avoire created succfully",
    //     ]);

    // }

    
}

