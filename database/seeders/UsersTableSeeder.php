<?php

namespace Database\Seeders;

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


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 16,
                'name' => 'Admin D.',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oMpYjY.R6Eni3/TuqmsChOhHR4WFVEYeMV.tUCQzTaBSmYLZJ3yJO',
                'remember_token' => NULL,
                'created_at' => '2020-11-04 19:07:15',
                'updated_at' => '2020-11-04 19:07:15',
            ),
            1 =>
            array (
                'id' => 17,
                'name' => 'Sergey V.',
                'email' => 'publisher@publisher.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Yp6TJMf9OzIHickL59CQg.6dNr7h7YzCBhyoU/y/SC0N6yroFH9Pi',
                'remember_token' => NULL,
                'created_at' => '2020-11-04 19:08:54',
                'updated_at' => '2020-11-04 19:08:54',
            ),
            2 =>
            array (
                'id' => 18,
                'name' => 'Ann D.',
                'email' => 'advertiser@advertiser.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$y1/Enl4f3/4RSwEdKKErjeKtLqDPwD4kPH0V1ikqpr81VaJZkv15C',
                'remember_token' => NULL,
                'created_at' => '2020-11-04 19:09:28',
                'updated_at' => '2020-11-04 19:09:28',
            ),
        ));


    }
}
