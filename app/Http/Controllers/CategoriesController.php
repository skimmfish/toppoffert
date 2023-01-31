<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
/**
 * @param Integer <$cat_id>
 * @return $StdObj
 */
    public static function get_cat_data($cat_id){

        return \App\Models\Categories::find($cat_id);

    }

    /**
     * This function retrieves all the subcategories of services for each categories
     */
    public static function get_sub_cats($parent_cat_id){
        $subcats = [];

       $subCatobj = \App\Models\Subcats::where('service_cat_id','=',$parent_cat_id)->get();
       //\DB::select("SELECT subcat_name FROM servicesubcat WHERE service_cat_id=?",[$parent_cat_id]);
       

    return $subCatobj;
    }

    /**
     * this function updates suppliers' categorization
     */
    public function updatesuppliercategorizaton(Request $request,$id){

        $service_sub_category = [];
        $service_category = [];
        $assignment_size = [];

                    for($i=0;$i<sizeof($request->service_categories);$i++){
            $service_category[] = @($request->service_categories)[$i].',';
            
        }

    
        for($i=0;$i<sizeof($request->service_sub_categories);$i++){
            $service_sub_category[] = @($request->service_sub_categories)[$i].',';
        }
        

        for($i=0;$i<sizeof($request->assignment_size);$i++){
            $assignment_size[] = @($request->assignment_size)[$i].',';
    }


    $res = null;
    $res = \DB::update("UPDATE suppliers SET service_category=?,service_sub_categories=?, assignment_size=? WHERE supplier_id=?",[
    json_encode($service_category,true),
    json_encode($service_sub_category,true),
    json_encode($assignment_size,true),
    $request->supplier_id]);


    if($res){
        return redirect()->back()->with(['message'=>'Alla tjänstekategorier och attribut har sparats!']);
    }
    


    }

}