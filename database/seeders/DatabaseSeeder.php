<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\CountryData\CountriesTableSeeder;
use App\CountryData\StatesTableSeeder;

use App\CountryData\CitiesTableChunkOneSeeder;
use App\CountryData\CitiesTableChunkOneTwoSeeder;

use App\CountryData\CitiesTableChunkTwoSeeder;
use App\CountryData\CitiesTableChunkTwoTwoSeeder;

use App\CountryData\CitiesTableChunkThreeSeeder;
use App\CountryData\CitiesTableChunkThreeThreeSeeder;

use App\CountryData\CitiesTableChunkFourSeeder;
use App\CountryData\CitiesTableChunkFourFourSeeder;

use App\CountryData\CitiesTableChunkFiveSeeder;
use App\CountryData\CitiesTableChunkFiveFiveSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(CountriesTableSeeder::class);
//        $this->call(StatesTableSeeder::class);
////
//        $this->call(CitiesTableChunkOneSeeder::class);
//        $this->call(CitiesTableChunkOneTwoSeeder::class);
//
//        $this->call(CitiesTableChunkTwoSeeder::class);
//        $this->call(CitiesTableChunkTwoTwoSeeder::class);
//
//        $this->call(CitiesTableChunkThreeSeeder::class);
//        $this->call(CitiesTableChunkThreeThreeSeeder::class);
//
//        $this->call(CitiesTableChunkFourSeeder::class);
//        $this->call(CitiesTableChunkFourFourSeeder::class);
//
//        $this->call(CitiesTableChunkFiveSeeder::class);
//        $this->call(CitiesTableChunkFiveFiveSeeder::class);

        $this->call([
            SettingSeeder::class,
            PackageTableSeeder::class,
            CouponTableSeeder::class,
            UserTableSeeder::class,
            RolePermissionSeeder::class,

        ]);
//
//
//        Product::factory()->count(10)->create()->each(function ($product) {
//            $product->variations()->createMany(Variation::factory()->count(5)->make()->toArray());
//
////            $cat = Category::all()->random()->id;
////            $product->categories()->sync($cat);
//
//        });
//
//        // Default Currencies
//        \Artisan::call('currency:manage add ngn,usd,gbp,cad,aud,sek,inr,cny,eur');
//        \Artisan::call('currencies:update');
//
//        \DB::table('currencies')->update(['active'=> 1]);


    }
}
