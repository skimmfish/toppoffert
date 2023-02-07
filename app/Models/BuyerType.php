<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BuyerType extends Model
{
    use HasFactory, softdeletes;

    protected $table = 'buyers_type';
    protected $fillable = [
        'buyers_type_name'
    ];

    protected $dates = ['created_at','updated_at','deleted_at'];
}
