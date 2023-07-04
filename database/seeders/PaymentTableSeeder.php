<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment')->delete();

        $no_of_rows = 100;
        for( $i=1; $i <= $no_of_rows; $i++ ){
            $data[] = [
                'id' => $i,
                'muzakki_id' => $i,
                'payment_type_id' => ($i%2 === 0) ? 1 : 2,
                'amil_id' => rand(1,3),
                'amount' => ($i%2 === 0) ? 97500.0 : 5.0,
                'number_of_person' => ($i%2 === 0) ? 3 : 2,
            ];
        }

        \DB::table('payment')->insert($data);


    }
}
