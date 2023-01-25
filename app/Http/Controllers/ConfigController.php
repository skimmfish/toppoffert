<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $rules = [
            'config_option'=>'required | unique:config',
            'config_value'=>'required'
        ];

        $request->validate($rules);
        $config = new \App\Models\Config;
        $config->key_value = $request->key_value;
        $config->key_option = $request->key_option;
        $config->autoload = true;
        $config->curr_date = date('Y-m-d');
        $response = $config->save();

        if($response==true){
            return redirect()->back()->with(['message'=>'Settings saved successfully!']);
        }

    }

/**
 * @param \Illuminate\Http\Request
 * @param String <$formFieldHandler>
 * @param String location<$location>
 */
    public function saveFile(Request $request,$formFieldHandler,$location){
        
        $fileName = NULL;
        //validating if a file is uploaded
        if($request->file($formFieldHandler)->isValid()){
        $fileName = time().'.'.$request->$formFieldHandler->guessExtension();
        
        $request->$formFieldHandler->move(public_path($location),$fileName);   
    
    }else{
        flash('No file was uploaded')->fail();
        return redirect()->back()->with('message','No file was uploaded, kindly check and try again');
    }

    return $fileName;
 }


 /**
  * Selective_updates function to update selected config parameters from the config page
  * @param Integer <$id>
  * @return \Illuminate\Http\Response <$res>
  */
  public function updateField(Request $request,$id){
    $response = NULL;
    $optionName = $request->key_option_name;


    if($optionName=='registration_model'){

    $response =  \DB::update("update config SET config_value=? WHERE config_option=?",[$request->key_option,$optionName]);

    }elseif($request->key_option_name=='nowpayments_ps'){

     $response =  \DB::update("update crypto_a_p_i_managers SET config_value=? WHERE config_option=?",[\App\Models\CryptoAPIManager::encrypt($request->key_option),$optionName]);

   }elseif($request->key_option=='site_logo'){
   
    if($_FILES['site_logo']['size']>0){
        $logo_key = $request->key_option;
        $logo = $this->saveFile($request,'site_logo','img');
        if($logo!=NULL){
            $response = DB::UPDATE('UPDATE config SET config_value=? WHERE config_option=?',[$logo, 'site_logo']);
        }
    }


}elseif($request->key_option=='site_logo_light'){


    if($_FILES['site_logo_light']['size']>0){
        $logo_key = $request->key_option;
        $logo = $this->saveFile($request,'site_logo_light','img');
        if($logo!=NULL){
    $response =  DB::UPDATE('UPDATE config SET config_value=? WHERE config_option=?',[$logo, 'site_logo_light']);
    }
}
}else{

    $response =  \DB::update("update config SET config_value=? WHERE id=?",[$request->key_option,$id]);
   
}
    if($response==true){
    return redirect()->route('marketplace.sadmin.index')->with(['message'=>'Settings saved successfully!']);
}
}


/**
 * @param String <$key_value_name>
 */
public function ModifyField($key_option,$key_value_name,$key_option_id){

 $response = \DB::update("UPDATE config SET WHERE $key_option=? WHERE id=?",[$key_value_name,$key_option_id]);
   
}


/**
 * Modify image fields
 */
public function modifyImageFields($client_key_name,$key_value){

}

 /**
* @param fieldID int <$id>
* @return null
*/
public static function deleteSettings($id){

    //$settingField = \App\CryptoAPIManager::find($id);
//    $settingField->delete();
  $response = \DB::delete("DELETE FROM crypto_a_p_i_managers WHERE id=?",[$id]);  
    $msg = "Settings field deleted successfully!";
    flash($msg)->success();    
    return redirect()->route('admin.dashboard.core-admin.settings')->with('message',$msg);
}
}
