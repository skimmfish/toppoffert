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
}
