<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_en' => 'test_category',
                'title_ar' => 'test_category_ar',
                'parent_id' => 0,
                'created_at' => '2019-08-24 16:21:21',
                'updated_at' => '2019-08-24 16:21:21',
            ),
        ));
        
        
    }
}