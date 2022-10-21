<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'John',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'Homer',
                'email' => 'shelockhome@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'shanelynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Dragon',
                'email' => 'dragonball@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Kelly',
                'email' => 'kellycris@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('authors')->insert([
            [
                'name' => 'Aoyama Gosho',
            ],
            [
                'name' => 'Fujiko',
            ],
            [
                'name' => 'Polo',
            ],
            [
                'name' => 'Tonny Devin',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Commic',
            ],
            [
                'name' => 'Economy',
            ],
            [
                'name' => 'Textbook',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'author_id' => 1,
                'product_category_id' => 2,
                'name' => 'Superhero Academy',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 2,
                'author_id' => 2,
                'product_category_id' => 2,
                'name' => 'King of Inventions',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 3,
                'author_id' => 3,
                'product_category_id' => 2,
                'name' => 'Monster Detective',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 4,
                'author_id' => 4,
                'product_category_id' => 1,
                'name' => 'Heterosexual Pub',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 5,
                'author_id' => 1,
                'product_category_id' => 3,
                'name' => "Goddess is afraid of communication",
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => false,
                'tag' => '',
            ],
            [
                'id' => 6,
                'author_id' => 1,
                'product_category_id' => 2,
                'name' => 'Dr.Stone',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 7,
                'author_id' => 1,
                'product_category_id' => 1,
                'name' => 'Vung Saga',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 8,
                'author_id' => 2,
                'product_category_id' => 1,
                'name' => 'Tokyo Revenger',
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
            [
                'id' => 9,
                'author_id' => 1,
                'product_category_id' => 1,
                'name' => 'Conan',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'sku' => null,
                'feature' => true,
                'tag' => '',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'qty' => 10,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'qty' => 2,
            ],
            [
                'product_id' => 1,
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 1,
                'email' => 'johndoe@gmail.com',
                'name' => 'John',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'kellycris@gmail.com',
                'name' => 'Kelly',
                'messages' => 'Good !',
                'rating' => 4,
            ],
        ]);
    }
}
