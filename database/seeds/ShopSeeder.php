<?php

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'id' => 1,
                'shop_name' => 'ショップA',
                'area_id' => 1
            ],
            [
                'id' => 2,
                'shop_name' => 'ショップB',
                'area_id' => 2
            ],
            [
                'id' => 3,
                'shop_name' => 'ショップC',
                'area_id' => 3
            ]
        ]);
    }
}
