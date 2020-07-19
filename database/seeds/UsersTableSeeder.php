<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        \DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@terranettest.com',
                    'password' => '$2y$10$h7RvygfdiE6Rin7ijr420elSvbxtCnJGaHKvvG54/1DOnsMVymReq',
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Alex',
                    'email' => 'alex@terranettest.com',
                    'password' => '$2y$10$tsXFvpWuqCWmClwBp9c6o.wP1MraHKEMkQHpZ81gOu3GWPptFIvfi',
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Victor',
                    'email' => 'victor@terranettest.com',
                    'password' => '$2y$10$/SwwMGr8GOzkupxmx5qn9.2p7TBX.ZB.GBdLnD2CiIRN322yWkaTW',
                    'created_at' => '2020-07-19 12:35:16',
                    'updated_at' => '2020-07-19 12:35:16',
                ),
        ));
    }
}
