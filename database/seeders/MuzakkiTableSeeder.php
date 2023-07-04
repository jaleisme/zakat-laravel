<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MuzakkiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('muzakki')->delete();
        
        \DB::table('muzakki')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fullname' => 'Yusuf',
                'address' => 'Coblong',
            ),
            1 => 
            array (
                'id' => 2,
                'fullname' => 'Jamal',
                'address' => 'Coblong',
            ),
            2 => 
            array (
                'id' => 3,
                'fullname' => 'Farhan',
                'address' => 'Coblong',
            ),
            3 => 
            array (
                'id' => 4,
                'fullname' => 'Hamdan',
                'address' => 'tanjungsari',
            ),
            4 => 
            array (
                'id' => 5,
                'fullname' => 'James',
                'address' => 'Coblong',
            ),
            5 => 
            array (
                'id' => 6,
                'fullname' => 'James Bond',
                'address' => 'Coblong',
            ),
            6 => 
            array (
                'id' => 7,
                'fullname' => 'Ali',
                'address' => 'Coblong',
            ),
            7 => 
            array (
                'id' => 8,
                'fullname' => 'Difa',
                'address' => 'Coblong',
            ),
        ));
        
        
    }
}