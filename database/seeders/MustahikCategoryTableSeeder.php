<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MustahikCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mustahik_category')->delete();

        \DB::table('mustahik_category')->insert(array (
            0 =>
            array (
                'id' => 1,
                'category_name' => 'Amil',
                'description' => 'People whom dedicate themselves to manage zakat within their area',
                'percentage' => 10,
            ),
            1 =>
            array (
                'id' => 2,
                'category_name' => 'Poor',
                'description' => 'People who financially struggled to fulfill their needs',
                'percentage' => 15,
            ),
            2 =>
            array (
                'id' => 3,
                'category_name' => 'Muallaf',
                'description' => 'Individuals who are non-Muslims or non-Muslims who have the hope of converting to Islam or those who are new to Islam whose faith still needs to be supported and reinforced',
                'percentage' => 5,
            ),
            3 =>
            array (
                'id' => 4,
                'category_name' => 'Riqab',
                'description' => 'Slaves whose freedom was conditional on a payment.',
                'percentage' => 15,
            ),
            4 =>
            array (
                'id' => 5,
                'category_name' => 'Gharimin',
                'description' => 'One who is in debt and needs assistance to meet his/her basic needs.',
                'percentage' => 10,
            ),
            5 =>
            array (
                'id' => 6,
                'category_name' => 'Fii Sabilillah',
                'description' => 'One who strives in the cause of Allah for the betterment of the community.',
                'percentage' => 10,
            ),
            6 =>
            array (
                'id' => 7,
                'category_name' => 'Ibnussabil',
                'description' => 'Stranded travellers on a permissible journey.',
                'percentage' => 15,
            ),
            7 =>
            array (
                'id' => 8,
                'category_name' => 'Fakir',
                'description' => 'One who has neither material possession nor means of livelihood; one who suffers, and has no means to sustain his/her daily needs.',
                'percentage' => 20,
            ),
        ));


    }
}
