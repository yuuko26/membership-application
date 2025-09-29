<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromotionRewardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('promotion_rewards')->delete();

        \DB::table('promotion_rewards')->insert(array (
            0 =>
            array (
                'id' => 1,
                'promotion_id' => 1,
                'tier' => 1,
                'type' => NULL,
                'referral_count' => 1,
                'every' => NULL,
                'min_referrals' => NULL,
                'amount' => '100.00',
                'created_at' => '2025-09-28 07:29:17',
                'updated_at' => '2025-09-28 07:29:17',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'promotion_id' => 1,
                'tier' => 2,
                'type' => NULL,
                'referral_count' => 2,
                'every' => NULL,
                'min_referrals' => NULL,
                'amount' => '200.00',
                'created_at' => '2025-09-28 07:29:17',
                'updated_at' => '2025-09-28 07:29:17',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'promotion_id' => 1,
                'tier' => 3,
                'type' => NULL,
                'referral_count' => 3,
                'every' => NULL,
                'min_referrals' => NULL,
                'amount' => '300.00',
                'created_at' => '2025-09-28 07:29:17',
                'updated_at' => '2025-09-28 07:29:17',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'promotion_id' => 1,
                'tier' => 4,
                'type' => NULL,
                'referral_count' => 5,
                'every' => NULL,
                'min_referrals' => NULL,
                'amount' => '500.00',
                'created_at' => '2025-09-28 07:29:17',
                'updated_at' => '2025-09-28 07:29:17',
                'deleted_at' => NULL,
            ),
        ));


    }
}
