<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FileManager extends Model
{
    use HasFactory,SoftDeletes;

//    protected $table = 'file_managers';
    
    protected $fillable = [
        'request_id','file_name','sent_by'
    ];

    protected $dates = [
        'created_at','deleted_at','updated_at'
    ];

    protected $casts = [

        'created_at','updated_at'

    ];

//creating an enttiy mapping relations
    public function User(){

        return $this->belongsTo('\App\Models\User');

    }

}
