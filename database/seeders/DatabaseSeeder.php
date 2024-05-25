<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Item;
use App\Models\ItemCategory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

   
        User::factory(10)->create();
         
        $this->call([
         
          ItemCategorySeeder::class,
            AdminSeeder::class,
            
           
          ]);
  Item::factory(30)->create();
     
     
   
    }
}
