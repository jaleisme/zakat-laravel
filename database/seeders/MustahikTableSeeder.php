<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MustahikTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mustahik')->delete();

        $names = ["Jajang", "Regi", "Wawan", "Wiwid", "Yuda", "Irwan", "Akmal", "Dodi", "Isman", "Gugun"];
        $addresses = ["Kp. Bojong Seureuh No.", "Kp. Bojong Reunghas No.", "Kp. Bojong Buah No.", "Kp. Bayah No.", "Kp. Cikoneng No."];
        $no_of_rows = 100;

        for( $i=1; $i <= $no_of_rows; $i++ ){
            $data[] = [
                'id' => $i,
                'mustahik_category_id' => rand(1,8),
                'fullname' => $names[rand(0,9)],
                'address' => $addresses[rand(0,4)].rand(1,20),
            ];
        }

        \DB::table('mustahik')->insert($data);


    }
}
