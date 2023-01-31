<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentModel extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'document_name','document_uri'
    ];

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $cast = ['created_at','updated_at'];
}
