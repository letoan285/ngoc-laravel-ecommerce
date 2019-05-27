<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
            ['name' => 'Computer', 'slug' => 'computer'],
            ['name' => 'Mobile', 'slug' => 'mobile'],
            ['name' => 'Desktop', 'slug' => 'desktop']
        ];
        DB::table('categories')->insert( $cates);
    }
}
