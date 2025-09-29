<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('members')->delete();
        
        \DB::table('members')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Member 1',
                'phone' => '011-22223300',
                'phone_verified_at' => NULL,
                'email' => 'member@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEMybsKF7l88AwzMDA',
                'referral_member_id' => NULL,
                'status' => 0,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-21 16:47:28',
                'updated_at' => '2025-09-21 16:47:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Member 2222',
                'phone' => '012-2321233',
                'phone_verified_at' => NULL,
                'email' => 'member2@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEMoeZ2dcYA7mwyMzM',
                'referral_member_id' => 5,
                'status' => 1,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-21 16:51:39',
                'updated_at' => '2025-09-21 18:37:42',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Member 3',
                'phone' => '0192229911',
                'phone_verified_at' => NULL,
                'email' => 'member3@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEMUIVh6nPeC45MTE',
                'referral_member_id' => 5,
                'status' => 0,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-21 17:38:12',
                'updated_at' => '2025-09-21 17:38:17',
                'deleted_at' => '2025-09-21 17:38:17',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Member 4',
                'phone' => '011-33223422',
                'phone_verified_at' => NULL,
                'email' => 'member4@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEM6KtPUgTaDt00MjI',
                'referral_member_id' => NULL,
                'status' => 2,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-21 17:59:10',
                'updated_at' => '2025-09-21 17:59:10',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Member 5',
                'phone' => '011-22391999',
                'phone_verified_at' => NULL,
                'email' => 'member5@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEM7k4PtZFSTdM5OTk',
                'referral_member_id' => NULL,
                'status' => 3,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-22 04:00:10',
                'updated_at' => '2025-09-22 04:00:10',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Member 7',
                'phone' => '012-3109999',
                'phone_verified_at' => NULL,
                'email' => 'member7@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEM65rp6l2JuK85OTk',
                'referral_member_id' => 6,
                'status' => 0,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-24 19:43:10',
                'updated_at' => '2025-09-24 19:43:10',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Member 8',
                'phone' => '012-3229911',
                'phone_verified_at' => NULL,
                'email' => 'member8@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEMAXXgL3bUsp85MTE',
                'referral_member_id' => 6,
                'status' => 1,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-28 15:43:30',
                'updated_at' => '2025-09-28 15:43:30',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Member 9',
                'phone' => '018-2221129',
                'phone_verified_at' => NULL,
                'email' => 'member9@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEMTsov76AJTIxMjk',
                'referral_member_id' => 11,
                'status' => 1,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-29 04:25:09',
                'updated_at' => '2025-09-29 04:25:09',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Member 10',
                'phone' => '014-2223322',
                'phone_verified_at' => NULL,
                'email' => 'member10@mail.com',
                'email_verified_at' => NULL,
                'referral_code' => 'MEMRjFK45WWoEgzMjI',
                'referral_member_id' => 12,
                'status' => 0,
                'processed_at' => NULL,
                'approved_at' => NULL,
                'created_at' => '2025-09-29 07:14:31',
                'updated_at' => '2025-09-29 07:14:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}