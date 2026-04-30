<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences=experience::latest()->paginate(10);
        return view('dashboard.experiences.index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('dashboard.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'start_date'=>'required',
          'end_date'=>'required',
          'location_en'=>'nullable',
          'location_ar'=>'nullable',
          'title_en'=>'required',
          'title_ar'=>'required',
          'company_ar'=>'required',
          'company_en'=>'required',
          'content_en'=>'required',
          'content_ar'=>'required',
        ]);
        Experience::create([
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'title'=>[
                'en'=>$request->title_en,
                'ar'=>$request->title_ar,
            ],
            'company'=>[
                'en'=>$request->company_en,
                'ar'=>$request->company_ar,
            ],
            'content'=>[
                'en'=>$request->content_en,
                'ar'=>$request->content_ar,
            ],
            'location'=>[
                'en'=>$request->location_en,
                'ar'=>$request->location_ar,
            ],
        ]);
        flash()->success('Experiences Added Successfully');
        return redirect()->route('dashboard.experiences.index');

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
            return view('dashboard.experiences.edit',compact('experience'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
          $request->validate([
          'start_date'=>'required',
          'end_date'=>'required',
          'location_en'=>'nullable',
          'location_ar'=>'nullable',
          'title_en'=>'required',
          'title_ar'=>'required',
          'company_ar'=>'required',
          'company_en'=>'required',
          'content_en'=>'required',
          'content_ar'=>'required',
        ]);
        $experience->update([
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'title'=>[
                'en'=>$request->title_en,
                'ar'=>$request->title_ar,
            ],
            'company'=>[
                'en'=>$request->company_en,
                'ar'=>$request->company_ar,
            ],
            'content'=>[
                'en'=>$request->content_en,
                'ar'=>$request->content_ar,
            ],
            'location'=>[
                'en'=>$request->location_en,
                'ar'=>$request->location_ar,
            ],
        ]);
         flash()->info('Experiences Updated Successfully');
        return redirect()->route('dashboard.experiences.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
         // flash()->warning('Experiences Deleted Successfully');
        return redirect()->route('dashboard.experiences.index');
    }
}
