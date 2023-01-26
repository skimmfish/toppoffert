<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Logger extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'logged_by','log_info'
    ];

    protected $table='logger';
    
    protected $date = ['created_at','deleted_at','updated_at'];

    /**
     * @param String <$msg>
     * @param String <$user>
     * @return NULL
     */
    public static function createlog($msg,$user,$severity){

        $log = new \App\Models\Logger([

            'log_info' => $msg,
            'logged_by' => $user,
            'severity_level'=>$severity
        ]);

         $log->save();
}
}
