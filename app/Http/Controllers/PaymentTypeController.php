<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Payment_type;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Payment_type::all();
        return view('payment-type.home', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Payment_type::create([
            'payment_type_name' => $request->payment_type_name,
        ]);

        return redirect()->route('payment-type.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_type  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_type $paymentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_type  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_type $paymentType)
    {
        $paymentType = Payment_type::find($paymentType)->first();
        return view('payment-type.edit', compact(['paymentType']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment_type  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_type $paymentType)
    {
        $data = Payment_type::findOrFail($paymentType->id);
        if($data){
            $data->update([
                'payment_type_name' => $request->payment_type_name,
            ]);
        }
        return redirect()->route('payment-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_type  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_type $paymentType)
    {
        // dd($paymentType);
        $data = Payment_type::findOrFail($paymentType->id)->delete();
        if($data){
            return redirect()->route('payment-type.index');
        }
    }
}
