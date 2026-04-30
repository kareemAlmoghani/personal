<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages=Language::latest()->paginate(10);
        return view('dashboard.languages.index',compact('languages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.languages.create');
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
        Language::create([
              'title'=>[
                'en'=>$request->title_en,
                'ar'=>$request->title_ar,
            ]
        ]);
        flash()->success('Languages Added Successfully');
        return redirect()->route('dashboard.languages.index');
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
    public function edit(Language $language)
    {
                return view('dashboard.languages.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
        ]);
        $language->update([
              'title'=>[
                'en'=>$request->title_en,
                'ar'=>$request->title_ar,
            ]
        ]);
        flash()->info('Languages Updated Successfully');
        return redirect()->route('dashboard.languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
         flash()->info('Languages Deleted Successfully');
        return redirect()->route('dashboard.languages.index');
    }
}
