<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::latest()->paginate(10);
        return view('dashboard.projects.index',compact('projects'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                return view('dashboard.projects.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en'=>'required',
            'name_ar'=>'required',
            'content_en'=>'required',
            'content_ar'=>'required',
            'image'=>'required',
            'link'=>'nullable',
        ]);
        $path=$request->file('image')->store('uploads/projects','custom');
        Project::create([
            'name'=>[
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ],
            'content'=>[
                'en'=>$request->content_en,
                'ar'=>$request->content_ar,
            ],
            'link'=>$request->link,
            'image'=>$path
        ]);
         flash()->success('Projects Added Successfully');
        return redirect()->route('dashboard.projects.index');
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
    public function edit(Project $project)
    {
                return view('dashboard.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
         $request->validate([
            'name_en'=>'required',
            'name_ar'=>'required',
            'content_en'=>'required',
            'content_ar'=>'required',
            'link'=>'nullable',
        ]);
        if($request->hasFile('image')){
             File::delete(paths: public_path($project->image));
            $path=$request->file('image')->store('uploads/projects','custom');
        }
        $project->update([
            'name'=>[
                'en'=>$request->name_en,
                'ar'=>$request->name_ar,
            ],
            'content'=>[
                'en'=>$request->content_en,
                'ar'=>$request->content_ar,
            ],
            'link'=>$request->link,
            'image'=>$path??$project->image
        ]);
         flash()->success('Projects Updated Successfully');
        return redirect()->route('dashboard.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        File::delete(paths: public_path($project->image));
        $project->delete();
        flash()->warning('Projects Deleted Successfully');
        return redirect()->route('dashboard.projects.index');

    }
}
