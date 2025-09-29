<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MemberPromotionRewardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('member_promotion_rewards')->delete();
        
        \DB::table('member_promotion_rewards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'member_id' => 6,
                'promotion_id' => 1,
                'reward_id' => 1,
                'step' => NULL,
                'created_at' => '2025-09-29 09:42:12',
                'updated_at' => '2025-09-29 09:42:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}