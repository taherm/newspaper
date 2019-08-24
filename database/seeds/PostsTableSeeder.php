<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'title_en' => 'test_post',
                'title_ar' => 'test_post_ar',
                'description_en' => 'test_description',
                'description_ar' => 'test_description_ar',
                'image' => 'public/images/MVzXRCRK0a7z017Aya0pnnwO9IGQQEjdBPZLysS4.jpeg',
                'created_at' => '2019-08-24 16:32:32',
                'updated_at' => '2019-08-24 16:32:32',
            ),
        ));
        
        
    }
}