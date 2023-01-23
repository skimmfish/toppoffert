<?php

namespace App\Http\Controllers;

use \App\Models\RatingTestimonials;
use Illuminate\Http\Request;

class RatingTestimonialsController extends Controller
{
 
/**
 * @param Integer <$supplier_id>
 * @return StdObj
 */
public static function getTestimonials($supplier_id){

    return RatingTestimonials::where('supplier_id',$supplier_id)->orderBy('created_at','DESC')->get();

}




}
