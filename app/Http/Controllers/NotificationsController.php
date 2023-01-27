<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMessage;

class NotificationsController extends Controller
{
    public function sendnotification(Request $request){

            $msg = $request->msg;
            $email = $request->email;
            $id = $request->id;

            //send notification to the user
            \Mail::to($email)->send(new SendMessage($msg,$email));

            //update the status of the message
          $msgFinder =  \App\Models\NotificationModel::find($id);
            $msgFinder->read_status = false;
            $msgFinder->save();

            return redirect()->back()->with(['message'=>'Meddelandet skickades utan problem!']);
    }
}
