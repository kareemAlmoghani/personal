<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills=Skill::latest()->paginate(10);
        return view('dashboard.skills.index',compact('skills'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                return view('dashboard.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
        ]);
        Skill::create([
              'title'=>[
                'en'=>$request->title_en,
                'ar'=>$request->title_ar,
            ]
        ]);
        flash()->success('Skills Added Successfully');
        return redirect()->route('dashboard.skills.index');
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
    public function edit(Skill $skill)
    {
                return view('dashboard.skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
         $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
        ]);
        $skill->update([
              'title'=>[
                'en'=>$request->title_en,
                'ar'=>$request->title_ar,
            ]
        ]);
        flash()->info('Skills Updated Successfully');
        return redirect()->route('dashboard.skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        flash()->warning('Skills Deleted Successfully');
        return redirect()->route('dashboard.skills.index');

    }
}
