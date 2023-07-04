<?php

namespace Database\Seeders;

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
        
        \DB::table('distribution')->insert(array (
            0 => 
            array (
                'id' => 4,
                'mustahik_id' => 1,
                'amount_money' => 100000.0,
                'amount_rice' => 2.0,
                'notes' => 'It\'s received by ahmad\'s daughter',
                'distributed_at' => '2023-06-21 14:59:00',
                'status' => 1,
            ),
        ));
        
        
    }
}