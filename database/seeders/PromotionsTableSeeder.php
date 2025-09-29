<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('promotions')->delete();

        \DB::table('promotions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Promotion 1',
                'start_date' => '2025-09-28',
                'end_date' => '2025-09-30',
                'status' => 1,
                'created_at' => '2025-09-28 07:29:16',
                'updated_at' => '2025-09-28 07:29:16',
                'deleted_at' => NULL,
            ),
        ));


    }
}
