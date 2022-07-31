<?php

namespace Database\Seeders;

use App\Models\Coupon;
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
        $coupons = generateCoupon(10);
        foreach ($coupons as $code){
            $coupon = new Coupon();
            $coupon->code = $code;
            $coupon->save();
        }
    }
}
