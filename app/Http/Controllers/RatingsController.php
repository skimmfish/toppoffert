<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public static function throw_stars($rating,$wh,$half){

    }


public function getRatings($uid){
$res = [];

try{ 
    
$reviews = \App\Models\Ratings::where('provider_id',$uid)->get(); 
$rating=0;$review_count=0;

foreach($reviews as $x){
    $rating =$x->rating;
    $review_count = $x->review_count;
}

return $res = [
    'rating'=>$rating,
    'review_count'=>$review_count
];

}catch(\Exception $e){
}
}




}
