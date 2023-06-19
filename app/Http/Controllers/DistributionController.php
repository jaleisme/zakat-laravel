<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Mustahik;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Distribution::select('distribution.*', 'mustahik.fullname')
            ->join('mustahik', 'mustahik.id', '=', 'distribution.mustahik_id')
            ->groupBy('distribution.id', 'mustahik_id', 'amount_money', 'amount_rice', 'notes', 'distributed_at', 'status', 'mustahik.fullname')
            ->get();
        // dd($data);
        return view('distribution.home', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mustahik = Mustahik::all();
        return view('distribution.create', compact(['mustahik']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Distribution::create([
            'mustahik_id' => $request->mustahik_id,
            'amount_money' => $request->amount_money,
            'amount_rice' => $request->amount_rice,
            'notes' => $request->notes,
            'distributed_at' => $request->distributed_at,
            'status' => $request->status
        ]);

        return redirect()->route('distribution.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function show(Distribution $distribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Distribution $distribution)
    {
        $distribution = Distribution::find($distribution)->first();
        $mustahik = Mustahik::all();
        return view('distribution.edit', compact(['distribution', 'mustahik']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distribution $distribution)
    {
        $data = Distribution::findOrFail($distribution->id);
        if($data){
            $data->update([
                'mustahik_id' => $request->mustahik_id,
                'amount_money' => $request->amount_money,
                'amount_rice' => $request->amount_rice,
                'notes' => $request->notes,
                'distributed_at' => $request->distributed_at,
                'status' => $request->status
            ]);
        }
        return redirect()->route('distribution.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distribution $distribution)
    {
        // dd($distribution);
        $data = Distribution::findOrFail($distribution->id)->delete();
        if($data){
            return redirect()->route('distribution.index');
        }
    }
}
