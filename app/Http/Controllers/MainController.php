<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Educatione;
use App\Models\experience;
use App\Models\Language;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;


class MainController extends Controller
{
    public function index(){
            return view('front.index');
    }
    public function resume(){
        $experiences=Experience::latest()->take(2)->get();
        $educationes=Educatione::latest()->take(2)->get();
        $skills=Skill::latest()->take(6)->get();
        $languages=Language::latest()->take(6)->get();
        return view('front.resume',compact('experiences','educationes','skills','languages'));
    }
    public function download(){
    $educations = Educatione::all();
    $skills = Skill::all();
    $languages = Language::all();
    $experiences = Experience::all();

    $pdf = Pdf::loadView('front.cv', compact(
        'educations',
        'skills',
        'languages',
        'experiences'
    ));

    return $pdf->download('cv.pdf');
    }

    public function preview() {
    $educations = Educatione::all();
    $skills = Skill::all();
    $languages = Language::all();
    $experiences = Experience::all();

    return view('front.cv', compact('educations','skills','languages','experiences'));
}
    public function projects(){
        $projects=Project::latest()->take(2)->paginate(2);
        return view('front.projects',compact('projects'));
    }
    public function contact(){
        return view('front.contact');
    }
    public function contact_data(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        // Send To DB
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);
        // Send To Email
        Mail::to('almoghanikareem@gmail.com')->send(new ContactUs($request->except('_token')));
        flash()->success('Messages Send Succefully');
        return redirect()->back();
    }
}
