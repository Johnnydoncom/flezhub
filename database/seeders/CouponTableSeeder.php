<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (Package::get() as $package){
            $coupons = generateCoupon($package->amount, $package->id, 4);
        }
    }
}
