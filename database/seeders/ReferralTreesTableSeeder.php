<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferralTreesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('referral_trees')->delete();

        \DB::table('referral_trees')->insert(array (
            0 =>
            array (
                'id' => 1,
                'upline_id' => NULL,
                'member_id' => 5,
                'level' => 0,
                'trace_key' => '5',
                'created_at' => '2025-09-21 16:47:28',
                'updated_at' => '2025-09-21 16:47:28',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'upline_id' => 5,
                'member_id' => 6,
                'level' => 1,
                'trace_key' => '5/6',
                'created_at' => '2025-09-21 16:51:39',
                'updated_at' => '2025-09-21 16:51:39',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'upline_id' => NULL,
                'member_id' => 8,
                'level' => 0,
                'trace_key' => '8',
                'created_at' => '2025-09-21 17:59:10',
                'updated_at' => '2025-09-21 17:59:10',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'upline_id' => NULL,
                'member_id' => 9,
                'level' => 0,
                'trace_key' => '9',
                'created_at' => '2025-09-22 04:00:10',
                'updated_at' => '2025-09-22 04:00:10',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'upline_id' => 6,
                'member_id' => 10,
                'level' => 2,
                'trace_key' => '5/6/10',
                'created_at' => '2025-09-24 19:43:10',
                'updated_at' => '2025-09-24 19:43:10',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'upline_id' => 6,
                'member_id' => 11,
                'level' => 2,
                'trace_key' => '5/6/11',
                'created_at' => '2025-09-28 15:43:30',
                'updated_at' => '2025-09-28 15:43:30',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'upline_id' => 11,
                'member_id' => 12,
                'level' => 3,
                'trace_key' => '5/6/11/12',
                'created_at' => '2025-09-29 04:25:09',
                'updated_at' => '2025-09-29 04:25:09',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'upline_id' => 12,
                'member_id' => 13,
                'level' => 4,
                'trace_key' => '5/6/11/12/13',
                'created_at' => '2025-09-29 07:14:31',
                'updated_at' => '2025-09-29 07:14:31',
                'deleted_at' => NULL,
            ),
        ));


    }
}
