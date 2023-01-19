<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credits extends Model
{
    use HasFactory, SoftDeletes;

protected $table='credits';
protected $fillable = ['supplier_id','credits'];
protected $dates = ['created_at','deleted_at','updated_at'];
protected $casts = ['created_at','deleted_at','updated_at'];



public function User(){
return $this->hasOne('\App\Models\User');
}

}
