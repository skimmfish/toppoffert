<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Suppliers extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'supplier_corp_name',
        'supplier_address',
        'supplier_id',
        'supplier_email'
    ];

    protected $date = ['created_at','deleted_at','updated_at','date_registered'];


    /**
     * creating relationship between suppliers and the users' tbl
     * @param void
     * @return void
     */
    public function Users(){

        return $this->belongsTo('\App\Models\Users');
    }

    public function Services(){
        return $this->hasMany('\App\Models\Services');

    }

    public function RatingTestimonial(){
        return $this->hasMany('\App\Models\RatingTestimonial');
    }

    public function Ratings(){
        return $this->hasOne('\App\Models\Ratings');
    }


}
