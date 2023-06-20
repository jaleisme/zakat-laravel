<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Mustahik;
use App\Models\Muzakki;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $payment = Payment::all();

        $mustahikCount = count(Mustahik::all());
        $paymentCount = count($payment);
        $distributionCount = count(Distribution::all());

        $resultMuzakki = Payment::select(DB::raw('SUM(number_of_person) as nop'))->first();
        $resultMoney = Payment::select(DB::raw('SUM(amount) as collectedMoney'))->where('payment_type_id', '=', 5)->first();
        $resultRice = Payment::select(DB::raw('SUM(amount) as collectedRice'))->where('payment_type_id', '=', 6)->first();

        $resultDistributed = Distribution::select(DB::raw('SUM(amount_money) as distributedMoney, SUM(amount_rice) as distributedRice'))->first();

        $muzakkiCount = $resultMuzakki->nop;
        $collectedMoney = $resultMoney->collectedMoney > 0 ? $resultMoney->collectedMoney : 0;
        $collectedRice = $resultRice->collectedRice > 0 ? $resultRice->collectedRice : 0;
        $resultDistributed->distributedMoney = $resultDistributed->distributedMoney > 0 ? $resultDistributed->distributedMoney : 0;
        $resultDistributed->distributedRice = $resultDistributed->distributedRice > 0 ? $resultDistributed->distributedRice : 0;
        return view('home', compact(['mustahikCount', 'muzakkiCount', 'distributionCount', 'paymentCount', 'collectedMoney', 'collectedRice', 'resultDistributed']));
    }
}
