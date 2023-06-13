<?php

namespace App\Http\Controllers;

use App\Models\MustahikCategory;
use Illuminate\Http\Request;

class MustahikCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MustahikCategory::all();
        return view('mustahik-category.home', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mustahik-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MustahikCategory::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'percentage' => $request->percentage
        ]);

        return redirect()->route('mustahik-category.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MustahikCategory  $mustahikCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MustahikCategory $mustahikCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MustahikCategory  $mustahikCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MustahikCategory $mustahikCategory)
    {
        $mustahikCategory = MustahikCategory::find($mustahikCategory)->first();
        return view('mustahik-category.edit', compact(['mustahikCategory']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MustahikCategory  $mustahikCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MustahikCategory $mustahikCategory)
    {
        $data = MustahikCategory::findOrFail($mustahikCategory->id);
        if($data){
            $data->update([
                'category_name' => $request->category_name,
                'description' => $request->description,
                'percentage' => $request->percentage
            ]);
        }
        return redirect()->route('mustahik-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MustahikCategory  $mustahikCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MustahikCategory $mustahikCategory)
    {
        // dd($mustahikCategory);
        $data = MustahikCategory::findOrFail($mustahikCategory->id)->delete();
        if($data){
            return redirect()->route('mustahik-category.index');
        }
    }
}
