<?php

use Illuminate\Database\Seeder;

class CategoryUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_user')->delete();
        
        \DB::table('category_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'category_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'category_id' => 15,
            ),
        ));
        
        
    }
}