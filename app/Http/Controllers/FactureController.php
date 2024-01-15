<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facture ;



class FactureController extends Controller
{

    public function get_types_reglement() {

        $types_regelements = DB::table('type_reglements')->get();
        return response()->json([
            'status'=>true,
            'data'=>$types_regelements,
        ]);
    }

    public function create_types_reglement(Request $request) {
        
        // try {
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'status'=>false,
        //         'errorMessage'=>$th->getMessage(),
        //         'errorClass'=>get_class($th)
        //     ]);
        // };
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

    public function drop_types_reglement(Request $request){
        $libell = strtolower($request->input('libelle_type'));
        $deleted = DB::table('type_reglements')->where('libelle_type' , '=' , $libell)->delete();

        return response()->json(
            [
                'status'=>true,
                'isDeleted'=>$deleted,
            ]);

    }


    public function get_list_factures() {

        $factures = Facture::take(10)->get();

        return response()->json([
            'status'=>true , 
            'data'=>$factures
        ]);
    }

    public function create_factures(Request $request){

        $validated = $request->validate([
            "num_facture"=>"required|",
            "date_facture"=>"required|date",
            "echeacnce"=>"required|date",
            "start_periode"=>"required|date",
            "fin_periode"=>"required|date",
            "montant_facture"=>"required|",
            "created_by"=>"required|"
        ]);

        $facture = Facture::create([
            "num_facture"=>strip_tags($request->input("num_facture")) , 
            "date_facture"=>$request->date("date_facture") , 
            "echeacnce"=>$request->date("echeacnce") , 
            "start_periode"=>$request->date("start_periode") , 
            "fin_periode"=>$request->date("fin_periode") , 
            "montant_facture"=>floatval(strip_tags($request->input("montant_facture"))) , 
            "created_by"=>intval($request->input("created_by")) , 
        ]);

        return response()->json([
            "status"=>true , 
            "message"=>"created succfully"
        ]);
    }


    public function drop_factures(Request $request) {
        $request->validate([
            "list_factures"=>"required|array"
        ]);

        $list_factures = array_map(function ($item){
            return intval($item);
        } , explode(",",$request->input('list_factures')[0]));

        Facture::destroy($list_factures);

        return response()->json([
            'status'=>true,
            'message'=>'deleted succfully ✅'
        ]);

    }




    
}
