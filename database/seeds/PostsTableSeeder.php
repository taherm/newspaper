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

        \DB::table('posts')->insert(array(
            0 =>
            array(
                'id' => 2,
                'category_id' => 15,
                'user_id' => 2,
                'title_en' => 'Test Post 1',
                'title_ar' => 'Test Post 1',
                'description_en' => 'Test Post 1',
                'description_ar' => 'Test Post 1',
                'image' => 'public/images/EpAJXPKp6jKJ0THCaixEh9gIXedYDU7UD8NIk5yv.jpeg',
                'created_at' => '2019-08-26 16:29:42',
                'updated_at' => '2019-08-26 16:29:42',
            ),
            1 =>
            array(
                'id' => 3,
                'category_id' => 15,
                'user_id' => 2,
                'title_en' => 'Test Post 2',
                'title_ar' => 'Test Post 2',
                'description_en' => 'Test Post 2',
                'description_ar' => 'Test Post 2',
                'image' => 'public/images/8WBNhY2CYhrZfxLVv2iMJMokYbuOvXqMs37dPHfP.jpeg',
                'created_at' => '2019-08-26 16:30:10',
                'updated_at' => '2019-08-26 16:30:10',
            ),
            2 =>
            array(
                'id' => 4,
                'category_id' => 15,
                'user_id' => 1,
                'title_en' => 'Test Post 3',
                'title_ar' => 'Test Post 3',
                'description_en' => 'Test Post 3',
                'description_ar' => 'Test Post 3',
                'image' => 'public/images/6ktlHOkWNi6yNDhAXPgUYFIvtZPvEmavVkG0ttnA.jpeg',
                'created_at' => '2019-08-26 16:30:51',
                'updated_at' => '2019-08-26 16:30:51',
            ),
        ));
    }
}
