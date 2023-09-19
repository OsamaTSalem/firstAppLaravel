<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //Category:: factory(10)->create(); // category انشاء عشر صفوف داخل الجدول

        /*
        User::factory()->create([
            'name' => 'ahmed',
            'age' => 22,
            'email' => 'admin@admin',
            'password' => Hash::make('123456')
        ]);
        */




        // Category::factory(20)->create();
        // SubCategory::factory(40)->create();
        // Product::factory(50)->create();
     }
}
