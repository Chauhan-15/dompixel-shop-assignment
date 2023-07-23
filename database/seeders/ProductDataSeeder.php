<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id'          => 1,
                'name'        => 'Product one',
                'description' => null,
                'price'       => 10,
                'quantity'    => 220,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 2,
                'name'        => 'Product two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'price'       => 15,
                'quantity'    => 50,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 3,
                'name'        => 'Product three',
                'description' => null,
                'price'       => 20,
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 4,
                'name'        => 'Product four',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'price'       => 25,
                'quantity'    => 110,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 5,
                'name'        => 'Product five',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'price'       => 30,
                'quantity'    => 90,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 6,
                'name'        => 'Product six',
                'description' => null,
                'price'       => 35,
                'quantity'    => 5,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 7,
                'name'        => 'Product seven',
                'description' => null,
                'price'       => 40,
                'quantity'    => 65,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 8,
                'name'        => 'Product eight',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'price'       => 50,
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 9,
                'name'        => 'Product nine',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'price'       => 95,
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 10,
                'name'        => 'Product ten',
                'description' => null,
                'price'       => 55,
                'quantity'    => 150,
                'created_at'  => now(),
                'updated_at'  => now(),
            ], [
                'id'          => 11,
                'name'        => 'Product eleven',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'price'       => 10,
                'quantity'    => 300,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
