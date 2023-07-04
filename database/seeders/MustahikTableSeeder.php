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

        $no_of_rows = 100;

        for( $i=1; $i <= $no_of_rows; $i++ ){
            $user_data[] = [
                'id' => $i,
                'mustahik_category_id' => rand(1,8),
                'fullname' => ($i%2 === 0) ? 'Ahmad' : 'Imam',
                'address' => ($i%2 === 0) ? 'Coblong' : 'Katapang',
            ];
        }

        \DB::table('mustahik')->insert($user_data);


    }
}
