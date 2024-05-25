<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //
    DB::table('item_categories')->insert([
        'title' => 'Vertual Assets',
        'detail' => 'Vertual Coins and Assets',

    ]);
//
    \DB::table('item_categories')->insert([
        'title' => 'Accesaries',
        'detail' => 'Gamming Accesaries and tools',

    ]);

      \DB::table('item_categories')->insert([
        'title' => 'Devices',
        'detail' => 'Ipads, Tablets , Laptops and Desktops',

    ]);
    }
}
