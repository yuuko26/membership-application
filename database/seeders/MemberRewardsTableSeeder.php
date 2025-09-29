<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MemberRewardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('member_rewards')->delete();
        
        \DB::table('member_rewards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'member_id' => 6,
                'sourceable_type' => 'App\\Models\\PromotionReward',
                'sourceable_id' => 1,
                'amount' => '100.00',
                'created_at' => '2025-09-29 09:42:12',
                'updated_at' => '2025-09-29 09:42:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}