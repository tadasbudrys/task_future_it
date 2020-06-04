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
            'subcategory_name' => 'Kede',
        ]);
    }
}
