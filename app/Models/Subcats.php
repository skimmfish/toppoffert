<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Subcats extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'servicesubcat';
    
    protected $fillable = ['service_cat_id','subcat_name'];

    protected $dates = ['created_at','updated_at','deleted_at'];

    public function Categories(){

        return $this->belongsTo('\App\Models\Categories');
    }

}
