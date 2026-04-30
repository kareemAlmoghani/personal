<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function settings(){
        return view('dashboard.settings');
    }
    public function update_settings(Request $request){
        $data=$request->except(['_token','_method','site_image']);
        if($request->hasFile('site_image')){
            $data['site_image']=$request->file('site_image')->store('uploads/settings','custom');
        }
        foreach($data as $key=>$value){
            Setting::updateOrCreate([
                'key'=>$key
            ],
            [
                'value'=>$value
            ]
            );

        }
        flash()->success('Settings Added Successfully');
        return redirect()->back();
    }
    public function messages(){
        $messages=Message::latest()->paginate(10);
        return view('dashboard.messages',compact('messages'));
    }
    public function delete_messages(Message $message){
        $message->delete();
        flash()->warning('Messages Deleted Successfully');
        return redirect()->back();

    }

}
