<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('address_types')->delete();
        
        \DB::table('address_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Residential Address',
                'status' => 1,
                'created_at' => '2025-09-21 17:06:30',
                'updated_at' => '2025-09-21 17:06:30',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Correspondence Address',
                'status' => 1,
                'created_at' => '2025-09-21 17:06:30',
                'updated_at' => '2025-09-21 17:06:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}