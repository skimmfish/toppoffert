<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggerController extends Controller
{

public function setasread($id){

    \DB::update("UPDATE logger SET read_status=? WHERE id=?",[1,$id]);
    return redirect()->back()->with(['message'=>'Log set as red successfully!']);
}

    /**
     * @param Integer <$id>
     */
    
    public function delete($id){

        try{
        $findlog = \App\Models\Logger::find($id);
        \DB::delete("DELETE from logger WHERE id=?",[$id]);
        }catch(\Exception $e){

            return redirect()->back()->with(['error'=>'Error! Please try again later.']);

        }

        return redirect()->back()->with(['message'=>'Loggen har raderats']);

    }


    public function delete_msg($id,$type){
        try{
         if($type=='log'){
        \DB::delete("DELETE from logger WHERE id=?",[$id]);
         }else if($type=='notifications'){

            $findMsg = \App\Models\NotificationModel::find($id);
            $findMsg->delete();

         }
    }catch(\Exception $e){
            return redirect()->back()->with(['error'=>'Fel! Vänligen försök igen senare.']);
        }

        return redirect()->back()->with(['message'=>'Loggen har raderats']);

    }


    /**
     * @param String <$type>
     */
public function getlog($type){
$title=Null;
$alllogs=null;

if($type=='log'){

    $alllogs = \App\Models\Logger::where("read_status",false)->orderBy('created_at','DESC')->paginate(20);
    $title = 'Systemlogg för serveradministratör';

}else if($type=='notifications'){

    $title='Alla aviseringar på ett ställe för administratörer';

    $alllogs = \App\Models\NotificationModel::where(["read_status"=>false,'receiver_id'=>'admin'])->orderBy('created_at','DESC')->paginate(20); 

}
return view('marketplace.sadmin.log',['title'=>$title,'logs'=>$alllogs,'type'=>$type]);
}

}
