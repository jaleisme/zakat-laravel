<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 => array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('admin'),
                'remember_token' => 'bM6jhul191OeUycbkgAQj2oJvYYxmOJkK6za2AsF5fBSH1FuMcDLwyuRFbyR',
                'created_at' => '2023-05-10 04:13:05',
                'updated_at' => '2023-05-10 04:13:05',
            ),
            1 => array (
                'id' => 2,
                'name' => 'Didin Mahyudin',
                'email' => 'admin2@admin.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin'),
                'remember_token' => '',
                'created_at' => '2023-05-10 04:13:05',
                'updated_at' => '2023-05-10 04:13:05',
            ),
            2 => array (
                'id' => 3,
                'name' => 'Dadang Supratman',
                'email' => 'admin3@admin.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin'),
                'remember_token' => '',
                'created_at' => '2023-05-10 04:13:05',
                'updated_at' => '2023-05-10 04:13:05',
            ),
        ));


    }
}
