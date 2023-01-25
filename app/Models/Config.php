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

    	/*
	*@param column whose value to get
	*@return String 
	*/
public static function	get_value($column_to_fetch){

    $val = null;
    
    try{
    $response = Config::where(['config_option'=>$column_to_fetch, 'autoload'=>1])->get();
    foreach($response as $x){
    
    $val = $x->config_value;
    
    }
    return $val;
    }catch(\Exception $e){
    
        return 0;
    
    }
    }
    
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
