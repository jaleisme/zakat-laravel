<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\Mustahik;
use App\Models\Muzakki;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
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
        $resultMoney = Payment::select(DB::raw('SUM(amount) as collectedMoney'))->where('payment_type_id', '=', 1)->first();
        $resultRice = Payment::select(DB::raw('SUM(amount) as collectedRice'))->where('payment_type_id', '=', 2)->first();

        $resultDistributed = Distribution::select(DB::raw('SUM(amount_money) as distributedMoney, SUM(amount_rice) as distributedRice'))->where('status', '=', 1)->first();
        $resultUndistributed = Distribution::select(DB::raw('SUM(amount_money) as distributedMoney, SUM(amount_rice) as distributedRice'))->where('status', '!=', 1)->first();

        $muzakkiCount = $resultMuzakki->nop > 0 ? $resultMuzakki->nop : 0;
        $collectedMoney = $resultMoney->collectedMoney > 0 ? $resultMoney->collectedMoney : 0;
        $collectedRice = $resultRice->collectedRice > 0 ? $resultRice->collectedRice : 0;

        $resultDistributed->distributedMoney = $resultDistributed->distributedMoney > 0 ? $resultDistributed->distributedMoney : 0;
        $resultDistributed->distributedRice = $resultDistributed->distributedRice > 0 ? $resultDistributed->distributedRice : 0;

        $resultUndistributed->distributedMoney = $resultUndistributed->distributedMoney > 0 ? $resultUndistributed->distributedMoney : 0;
        $resultUndistributed->distributedRice = $resultUndistributed->distributedRice > 0 ? $resultUndistributed->distributedRice : 0;


        $collectedMoneySum = Payment::select(DB::raw('SUM(number_of_person) as nop'))->where('payment_type_id', '=', 1)->first();
        $collectedRiceSum = Payment::select(DB::raw('SUM(number_of_person) as nop'))->where('payment_type_id', '=', 2)->first();

        $distributionStatsResult = Distribution::all();
        $notDelivered = count($distributionStatsResult->where('status', '=', 0));
        $delivered = count($distributionStatsResult->where('status', '=', 1));
        $pending = count($distributionStatsResult->where('status', '=', 2));
        $cancelled = count($distributionStatsResult->where('status', '=', 3));

        $paymentByAmilResult = Payment::all();
        $paymentByAmil = new Collection;
        $amils = User::all();
        foreach ($amils as $key => $amil) {
            $paymentByAmil->push([
                'amil_name' => $amil->name,
                'count' => count($paymentByAmilResult->where('amil_id', '=', $amil->id)),
            ]);
        }

        return view('home', compact(['mustahikCount', 'muzakkiCount', 'distributionCount', 'paymentCount', 'collectedMoney', 'collectedRice', 'resultDistributed', 'collectedMoneySum', 'collectedRiceSum', 'resultUndistributed', 'notDelivered', 'delivered', 'pending', 'cancelled', 'paymentByAmil']));
    }
}
