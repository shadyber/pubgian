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
    DB::table('item_categories')->insert([
        'title' => 'Accesaries',
        'detail' => 'Gamming Accesaries and tools',

    ]);

      DB::table('item_categories')->insert([
        'title' => 'Devices',
        'detail' => 'Ipads, Tablets , Laptops and Desktops',

    ]);

       DB::table('item_categories')->insert([
        'title' => 'New Custom PC Build',
        'detail' => 'Custom Build Pcs for Gaming and High demand jobs',
         'parent_category_id'=>'3',

    ]);

       DB::table('item_categories')->insert([
        'title' => 'Laptops',
        'detail' => 'Normal User Laptops',
         'parent_category_id'=>'3',

    ]);

       DB::table('item_categories')->insert([
        'title' => 'Gaming Monitors',
        'detail' => 'Gaming Monitors',
         'parent_category_id'=>'3',

    ]);


       DB::table('item_categories')->insert([
        'title' => 'Office Monitors',
        'detail' => 'Office Monitors',
         'parent_category_id'=>'3',

    ]);
      DB::table('item_categories')->insert([
        'title' => 'Gaming Chair',
        'detail' => 'Gaming Chair',
         'parent_category_id'=>'3',

    ]);
      DB::table('item_categories')->insert([
        'title' => 'Keyboards',
        'detail' => 'Keyboards',
         'parent_category_id'=>'2',

    ]);
      DB::table('item_categories')->insert([
        'title' => 'Mouses',
        'detail' => 'Mouses',
         'parent_category_id'=>'2',

    ]);

      DB::table('item_categories')->insert([
        'title' => 'Headsets',
        'detail' => 'Headsets',
         'parent_category_id'=>'2',

    ]);

     DB::table('item_categories')->insert([
        'title' => 'Gaming Controller',
        'detail' => 'Gaming Controller',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Speakers',
        'detail' => 'Speakers',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Webcam',
        'detail' => 'Webcam',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Microphone',
        'detail' => 'Microphone',
         'parent_category_id'=>'2',

    ]);
    DB::table('item_categories')->insert([
        'title' => 'Microphone',
        'detail' => 'Microphone',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Central Processing Unit (CPU)',
        'detail' => 'Central Processing Unit (CPU)',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'MotherBoard (MB)',
        'detail' => 'MotherBoard (MB)',
         'parent_category_id'=>'2',

    ]);
    DB::table('item_categories')->insert([
        'title' => 'Graphic Card (GPU)',
        'detail' => 'Graphic Card (GPU)',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'CPU Cooler',
        'detail' => 'CPU Cooler',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Random Access Memory (RAM)',
        'detail' => 'Random Access Memory (RAM)',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Solid State Drive (SSD)',
        'detail' => 'Solid State Drive (SSD)',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Power Supply (PSU)',
        'detail' => 'Power Supply (PSU)',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Case/ Chassis',
        'detail' => 'PCase/ Chassis',
         'parent_category_id'=>'2',

    ]);

    DB::table('item_categories')->insert([
        'title' => 'Router',
        'detail' => 'Router',
         'parent_category_id'=>'2',

    ]);








    }
}
