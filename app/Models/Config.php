<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Config extends Model

{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'config_option','config_value','autoload'
    ];

    protected $dates = ['created_at','updated_at'];

    protected $table = 'config_table';
        /**
         * @param String <$strToEncrypt>
         * @return String <$encryptedString>
         */
        protected static function encrypt($strToEncrypt)
        {
           return $encrypted = Crypt::encryptString($strToEncrypt);
        }
    
        /**
         * @param String <$strToDecrypt>
         * @return String <$decryptedString>
         */
        protected static function decrypt($encryptedString){
            return $decrypted = Crypt::decryptString($encryptedString);
        }
    
    
}
