<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name' => 'Diamond',
            'description' => null,
            'amount' => 3000,
            'referral_bonus' => 1500,
            'indirect_bonus1' => 200,
            'indirect_bonus2' => 200,
            'welcome_bonus_point' => 1000,
            'points_per_login' => 100,
            'points_sponsored_ads' => 200,
            'points_per_review' => 20,
            'points_per_rating' => 10
        ]);

        Package::create([
            'name' => 'Gold',
            'description' => null,
            'amount' => 6000,
            'referral_bonus' => 3000,
            'indirect_bonus1' => 500,
            'indirect_bonus2' => 100,
            'welcome_bonus_point' => 1000,
            'points_per_login' => 100,
            'points_sponsored_ads' => 200,
            'points_per_review' => 50,
            'points_per_rating' => 20
        ]);
    }
}
