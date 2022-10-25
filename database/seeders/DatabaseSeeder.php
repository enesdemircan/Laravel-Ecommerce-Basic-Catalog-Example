<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        \App\Models\User::create(['name' => 'enesdemircan', 'email' => 'info@enesdemircan.com', 'password' => bcrypt('123456')]);
       
        \App\Models\Category::create([
            'name' => 'Ayakkabılar',
            'title' => 'Ayakkabılar title',
            'slug' => 'Ayakkabı slug',
            'description' => 'Ayakkabı ürünleri',
            'icon' => 'a',
            'color' => 'red',
            'up_id' => null
            ]);

        \App\Models\Category::create([
                'name' => 'Spor Ayakkabılar',
                'title' => 'Ayakkabı title',
                'slug' => 'Ayakkabı slug',
                'description' => 'Ayakkabı ürünleri',
                'icon' => 'a',
                'color' => 'red',
                'up_id' => 1
                ]);

        \App\Models\Product::create([
        'name' => 'Nike Spor Ayakkabısı', 
        'price' => '1200.99',
        'discount_rate' => '2.10',
        'category_id' => '1'
        ]);

        \App\Models\Product::create([
            'name' => 'Adidas Spor Ayakkabısı', 
            'price' => '120.05',
            'discount_rate' => '5.10',
            'category_id' => '1'
        ]);
        \App\Models\Cart::create([
                'user_id' => '1',
                'detail' => null,
                'status' => 'pending',
                'piece' => '5',
                'product_id' => '1'
        ]);
        \App\Models\Cart::create([
                'user_id' => '1', 
                'detail' => null,
                'status' => 'pending',
                'piece' => '5',
                'product_id' => '2'
                
        ]);

    

    }
}
