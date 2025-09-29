<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(AddressTypesTableSeeder::class);
//        $this->call(StatesTableSeeder::class);
//        $this->call(CitiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(ReferralTreesTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(PromotionRewardsTableSeeder::class);
        $this->call(MemberPromotionRewardsTableSeeder::class);
        $this->call(MemberRewardsTableSeeder::class);
    }
}
