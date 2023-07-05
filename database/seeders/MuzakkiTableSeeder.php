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

        $names = ["Difa", "Dwi", "Haikal", "Cecep", "Ali", "Yusuf", "Rahman", "Arkan", "Bagas", "Maman"];
        $addresses = ["Kp. Bojong Seureuh No.", "Kp. Bojong Reunghas No.", "Kp. Bojong Buah No.", "Kp. Bayah No.", "Kp. Cikoneng No."];
        $no_of_rows = 100;

        for( $i=1; $i <= $no_of_rows; $i++ ){
            $data[] = [
                'id' => $i,
                'fullname' => $names[rand(0,9)],
                'address' => $addresses[rand(0,4)].rand(21,40),
            ];
        }

        \DB::table('muzakki')->insert($data);


    }
}
