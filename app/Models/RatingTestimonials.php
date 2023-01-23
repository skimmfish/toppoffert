<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RatingTestimonials extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'rating','buyer_id','supplier_id','testimonial'
    ];

    protected $dates = ['created_at','updated_at','deleted_at'];

    public function User(){

        return $this->belongsTo('\App\Models\User');

    }

    
}
