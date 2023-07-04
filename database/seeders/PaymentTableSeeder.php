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
        
        \DB::table('payment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'muzakki_id' => 1,
                'payment_type_id' => 6,
                'amil_id' => 1,
                'amount' => 5.0,
                'number_of_person' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'muzakki_id' => 2,
                'payment_type_id' => 5,
                'amil_id' => 1,
                'amount' => 32500.0,
                'number_of_person' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'muzakki_id' => 3,
                'payment_type_id' => 5,
                'amil_id' => 1,
                'amount' => 32500.0,
                'number_of_person' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'muzakki_id' => 4,
                'payment_type_id' => 5,
                'amil_id' => 1,
                'amount' => 65000.0,
                'number_of_person' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'muzakki_id' => 5,
                'payment_type_id' => 5,
                'amil_id' => 1,
                'amount' => 65000.0,
                'number_of_person' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'muzakki_id' => 6,
                'payment_type_id' => 6,
                'amil_id' => 1,
                'amount' => 5.0,
                'number_of_person' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'muzakki_id' => 7,
                'payment_type_id' => 6,
                'amil_id' => 1,
                'amount' => 10.0,
                'number_of_person' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'muzakki_id' => 8,
                'payment_type_id' => 6,
                'amil_id' => 1,
                'amount' => 10.0,
                'number_of_person' => 4,
            ),
        ));
        
        
    }
}