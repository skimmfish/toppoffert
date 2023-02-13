<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcats;

class CategoriesController extends Controller
{
    
/**
 * @param Integer <$cat_id>
 * @return $StdObj
 */
    public static function get_cat_data($field,$cat_id){

     //$fld =  \App\Models\Categories::Where('id',$cat_id)->first()->$field;
     
     try{
        $fld =  \App\Models\Categories::findOrFail($cat_id)->$field;
       
     if($fld==NULL){
            return 'Service Unavailable';
        }else{
            return $fld;
        }
    }catch(\Exception $e){
        return 'Null';
    }
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
     * @param NULL
     * This function fetches all the categories service request could fall into
     */
    public static function getcatnames(){

    return $categories = Categories::all();

    }

    /**
     * This function fetches all subcat names for a select category
     */

    public static function getsubcatnames($cat_name){

        //get id of the category
        $catid = Categories::where('cat_name',$cat_name)->first()->id;

        $subcategories =  Subcats::where('service_cat_id',$catid)->get();
    
        echo "<select class='select' name='sub_category' class='sub_category' style='width: 90% !important;border-radius: 9px; padding: 10px 9px;'>
                <option value=''>Välj en underkategori</option>";
        foreach($subcategories as $x){
        
            echo "<option value='".$x->subcat_name.'_'.$catid.'_'.$x->id.'_'.$cat_name."'>".ucfirst($x->subcat_name)."</option>";

        }
        echo "</select>";

    //return view('pages.subcatlist',['subcategories'=>$subcategories]);
}
    /**
     * this function updates suppliers' categorization
     */
    public function updatesuppliercategorizaton(Request $request,$id){

        $service_sub_category = [];
        $service_category = [];
        $assignment_size = [];
        $buyer_type = [];

        for($i=0;$i<sizeof($request->service_categories);$i++){

        $service_category[] = @($request->service_categories)[$i];
            
        }

    
        for($i=0;$i<sizeof($request->service_sub_categories);$i++){
            $service_sub_category[] = @($request->service_sub_categories)[$i];
        }
        

        for($i=0;$i<sizeof($request->assignment_size);$i++){
            $assignment_size[] = @($request->assignment_size)[$i];
        }

if(!is_null($request->buyer_type)){
    for($i=0;$i<sizeof($request->buyer_type);$i++){
        $buyer_type[] = @($request->buyer_type)[$i];
    }

}else{
    $buyer_type = [];
}

    $res = null;
    $res = \DB::update("UPDATE suppliers SET service_category=?,service_sub_categories=?, 
    assignment_size=?, buyers_type=? WHERE supplier_id=?",[
    json_encode($service_category,true),
    json_encode($service_sub_category,true),
    json_encode($assignment_size,true),
    json_encode($buyer_type,true),
    $request->supplier_id]);


    if($res){
        return redirect()->back()->with(['message'=>'Alla tjänstekategorier och attribut har sparats!']);
    }
    }
}