<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'user_type' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DDcsSyoubD3baG1YPoXE9OAvUquOWYMq1sY6c68iJvWv5aj6G9Eia',
                'remember_token' => NULL,
                'created_at' => '2019-08-23 06:03:53',
                'updated_at' => '2019-08-23 06:03:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'test_author',
                'email' => 't@t.com',
                'user_type' => 'author',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MvGfqzZN3dQHDgs/WbnQZeelTxYs8bIKf0BP.RYu9ICnDo66PzY1y',
                'remember_token' => NULL,
                'created_at' => '2019-08-23 06:11:03',
                'updated_at' => '2019-08-23 06:11:03',
            ),
        ));
        
        
    }
}