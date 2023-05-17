<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Payment_type;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    public function payment_type(){

        $data = Payment_type::all();
        return view('datapymenttype', compact('data'));
    }

    public function tambahdatapymenttype(){

        $data = Payment_type::all();
        return view('tambahdatapymenttype', compact('data'));
    }

    public function insertdatapymenttype(Request $request){

        //dd($request->all());
        Payment_type::create($request->all());
        return redirect()->route('payment-type');
    }

    public function tampildatapymenttype($id){

        $data = Payment_type::find($id);
        //dd($data);
        return view ('tampildatapymenttype', compact('data'));
    }

    public function editdatapymenttype(Request $request, $id){
        $data = Payment_type::find($id);
        $data->update($request->all());
        return redirect()->route('payment-type');
    }

    public function deletedatapymenttype($id){
        $data = Payment_type::find($id);
        $data->delete();
        return redirect()->route('payment-type');
    }
}
