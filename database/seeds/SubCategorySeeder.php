<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategory')->insert([
            'subcategory_name' => 'Stalas',
            'category_id' => '1',
        ]);
        DB::table('subcategory')->insert([
            'subcategory_name' => 'Duso kabina',
            'category_id' => '3',
        ]);

    }
}
