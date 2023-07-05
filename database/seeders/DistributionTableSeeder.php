<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class DistributionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('distribution')->delete();

        $no_of_rows = 100;
        $resultMoney = Payment::select(\DB::raw('SUM(amount) as collectedMoney'))->where('payment_type_id', '=', 1)->first();
        $resultRice = Payment::select(\DB::raw('SUM(amount) as collectedRice'))->where('payment_type_id', '=', 2)->first();
        $notes = ["Processing distribution", "Received successfully by Mustahik Family", "Mustahik hasn't receive the zakat due to their absence at home", "Mustahik is currently at their homeland"];

        $moneyPortion = $resultMoney->collectedMoney/$no_of_rows;
        $ricePortion = $resultRice->collectedRice/$no_of_rows;

        for( $i=1; $i <= $no_of_rows; $i++ ){
            $assignedStatus = rand(0,3);
            $data[] = [
                'id' => $i,
                'mustahik_id' => $i,
                'amount_money' => $moneyPortion,
                'amount_rice' => $ricePortion,
                'notes' => $notes[$assignedStatus],
                'distributed_at' => '2023-06-21 14:59:00',
                'status' => $assignedStatus,
            ];
        }

        \DB::table('distribution')->insert($data);


    }
}
