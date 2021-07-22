<?php

namespace App\Http\Controllers;

use App\Models\Messenger;
use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function sendMessage(Request $request){
        $request->validate([
           "name"=>"required",
           "email"=>"required",
           "content"=>"required"
        ]);

        Messenger::create([
           "name"=>$request->get("name") ,
           "email"=>$request->get("email"),
           "content"=>$request->get("content")
        ]);

        return redirect()->back()->with('success',"Cảm ơn bạn đã góp ý kiến.Nhân viên của chúng tôi sẽ liên hệ lại.");
    }
}
