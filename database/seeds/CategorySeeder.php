<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' => 'Miegamasis',
        ]);
        DB::table('category')->insert([
            'category_name' => 'Virtuve',
        ]);

        DB::table('category')->insert([
            'category_name' => 'Vonios kambarys',
        ]);
    }
}
