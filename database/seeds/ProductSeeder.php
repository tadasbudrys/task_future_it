<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'title' => 'Malmar',
            'category_id' => '1',
            'subcategory_id' => '1',
            'coment' => 'Nice tabe',
        ]);
    }
}
