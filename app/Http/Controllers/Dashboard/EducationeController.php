<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Educatione;
use Illuminate\Http\Request;

class EducationeController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educationes=Educatione::latest()->paginate(10);
        return view('dashboard.educations.index',compact('educationes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'start_date'=>'required',
                'end_date'=>'required',
                'location_en'=>'required',
                'location_ar'=>'required',
                'college_en'=>'required',
                'college_ar'=>'required',
                'field_en'=>'required',
                'field_ar'=>'required',
                'degree_en'=>'required',
                'degree_ar'=>'required',
                'content_en'=>'required',
                'content_ar'=>'required',
        ]);
Educatione::create([
    'start_date'=>$request->start_date,
    'end_date'=>$request->end_date,
    'college'=>[
        'en'=>$request->college_en,
        'ar'=>$request->college_ar,
    ],
    'location'=>[
        'en'=>$request->location_en,
        'ar'=>$request->location_ar,
    ],
    'degree'=>[
        'en'=>$request->degree_en,
        'ar'=>$request->degree_ar,
    ],
    'field'=>[
        'en'=>$request->field_en,
        'ar'=>$request->field_ar,
    ],
    'content'=>[
        'en'=>$request->content_en,
        'ar'=>$request->content_ar,
    ],
        ]);

        flash()->success('Education Added Successfully');
        return redirect()->route('dashboard.educationes.index');
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
    public function edit(Educatione $educatione)
    {
        return view('dashboard.educations.edit',compact('educatione'));
        
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Educatione $educatione)
    {
          $request->validate([
                'start_date'=>'required',
                'end_date'=>'required',
                'location_en'=>'required',
                'location_ar'=>'required',
                'college_en'=>'required',
                'college_ar'=>'required',
                'field_en'=>'required',
                'field_ar'=>'required',
                'degree_en'=>'required',
                'degree_ar'=>'required',
                'content_en'=>'required',
                'content_ar'=>'required',
        ]);
$educatione->update([
    'start_date'=>$request->start_date,
    'end_date'=>$request->end_date,
    'college'=>[
        'en'=>$request->college_en,
        'ar'=>$request->college_ar,
    ],
    'location'=>[
        'en'=>$request->location_en,
        'ar'=>$request->location_ar,
    ],
    'degree'=>[
        'en'=>$request->degree_en,
        'ar'=>$request->degree_ar,
    ],
    'field'=>[
        'en'=>$request->field_en,
        'ar'=>$request->field_ar,
    ],
    'content'=>[
        'en'=>$request->content_en,
        'ar'=>$request->content_ar,
    ],
             ]);

        flash()->info('Education Updated Successfully');
        return redirect()->route('dashboard.educationes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Educatione $educatione)
    {
        $educatione->delete();
         flash()->warning('Education Deleted Successfully');
        return redirect()->route('dashboard.educationes.index');

    }
}


