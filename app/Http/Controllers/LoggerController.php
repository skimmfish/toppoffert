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
}
