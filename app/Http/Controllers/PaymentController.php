<?php

namespace App\Http\Controllers;

use App\Models\Muzakki;
use App\Models\Payment;
use App\Models\Payment_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Payment::select('payment.*', 'muzakki.fullname', 'muzakki.address', 'payment_type.payment_type_name', 'users.name')
        ->join('muzakki', 'muzakki.id', '=', 'payment.muzakki_id')
        ->join('payment_type', 'payment_type.id', '=', 'payment.payment_type_id')
        ->join('users', 'users.id', '=', 'payment.amil_id')
        ->groupBy('payment.id', 'payment.muzakki_id', 'payment.payment_type_id', 'payment.amil_id', 'payment.amount', 'payment.number_of_person', 'muzakki.fullname', 'muzakki.address', 'payment_type.payment_type_name', 'users.name')
        ->get();
        return view('payment.home', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentType = Payment_type::all();
        return view('payment.create', compact(['paymentType']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $muzakki = Muzakki::create([
            'fullname' => $request->fullname,
            'address' => $request->address
        ]);

        $data = Payment::create([
            'muzakki_id' => $muzakki->id,
            'payment_type_id' => $request->payment_type_id,
            'amil_id' => Auth::user()->id,
            'amount' => $request->amount,
            'number_of_person' => $request->number_of_person
        ]);
        // Payment::create([
        //     'category_name' => $request->category_name,
        //     'description' => $request->description,
        //     'percentage' => $request->percentage
        // ]);

        return redirect()->route('payment.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $payment = Payment::find($payment)->first();
        return view('payment.edit', compact(['payment']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $data = Payment::findOrFail($payment->id);
        if($data){
            $data->update([
                'category_name' => $request->category_name,
                'description' => $request->description,
                'percentage' => $request->percentage
            ]);
        }
        return redirect()->route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        // dd($payment);
        $muzakki_id = $payment->muzakki_id;
        $data = Payment::findOrFail($payment->id)->delete();
        $muzakki = Muzakki::findOrFail($muzakki_id)->delete();
        if($muzakki && $data){
            return redirect()->route('payment.index');
        }
    }
}

