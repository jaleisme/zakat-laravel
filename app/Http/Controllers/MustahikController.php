<?php

namespace App\Http\Controllers;

use App\Models\Mustahik;
use App\Models\MustahikCategory;
use Illuminate\Http\Request;

class MustahikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mustahik::select('mustahik.*', 'mustahik_category.category_name')
            ->join('mustahik_category', 'mustahik_category.id', '=', 'mustahik.mustahik_category_id')
            ->groupBy('mustahik.id', 'mustahik.mustahik_category_id', 'mustahik.fullname', 'mustahik.address', 'mustahik_category.category_name')
            ->get();
        // dd($data);
        return view('mustahik.home', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mustahikCategory = MustahikCategory::all();
        return view('mustahik.create', compact(['mustahikCategory']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mustahik::create([
            'mustahik_category_id' => $request->mustahik_category_id,
            'address' => $request->address,
            'fullname' => $request->fullname
        ]);

        return redirect()->route('mustahik.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mustahik  $mustahik
     * @return \Illuminate\Http\Response
     */
    public function show(Mustahik $mustahik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mustahik  $mustahik
     * @return \Illuminate\Http\Response
     */
    public function edit(Mustahik $mustahik)
    {
        $mustahik = Mustahik::find($mustahik)->first();
        $mustahikCategory = MustahikCategory::all();
        return view('mustahik.edit', compact(['mustahik', 'mustahikCategory']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mustahik  $mustahik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mustahik $mustahik)
    {
        $data = Mustahik::findOrFail($mustahik->id);
        if($data){
            $data->update([
                'mustahik_category_id' => $request->mustahik_category_id,
                'address' => $request->address,
                'fullname' => $request->fullname
            ]);
        }
        return redirect()->route('mustahik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mustahik  $mustahik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mustahik $mustahik)
    {
        // dd($mustahik);
        $data = Mustahik::findOrFail($mustahik->id)->delete();
        if($data){
            return redirect()->route('mustahik.index');
        }
    }
}
