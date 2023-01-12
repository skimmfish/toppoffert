<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Bookings extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'booking_title',
        'completion_status',
        'booking_owner_id'
    ];

    protected $casts = ['created_at','deleted_at','updated_at'];
}
