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

        return redirect()->back()->with(['message'=>'Log deleted successfully']);

    }

    /**
     * @param String <$type>
     */
public function getlog($type){

if($type=='log'){

    $allLogs = \App\Models\Logger::where("read_status",false)->orderBy('created_at','DESC')->paginate(20);
    $title = '';
}else if($type=='notifications'){

    $messagesForAdmin = \App\Models\NotificationModel::where(["read_status"=>false,'receiver_id'=>'admin'])->orderBy('created_at','DESC')->paginate(20); 

}


return view('marketplace.sadmin.log',['title'=>$title,'notificationsAdmin'=>$messagesForAdmin,'logs'=>$alllogs]);
}

}
