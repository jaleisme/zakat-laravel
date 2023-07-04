<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_type')->delete();
        
        \DB::table('payment_type')->insert(array (
            0 => 
            array (
                'id' => 5,
                'payment_type_name' => 'Money',
            ),
            1 => 
            array (
                'id' => 6,
                'payment_type_name' => 'Rice',
            ),
        ));
        
        
    }
}