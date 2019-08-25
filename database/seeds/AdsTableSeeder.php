<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ads')->delete();
        
        \DB::table('ads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'url' => 'google.com',
            'description' => 'Header (728 X 90)',
                'image' => 'public/images/fd34wvsekkUfsIv7o3ZclIL6H9xpHC1gMqJYrgq6.jpeg',
                'created_at' => '2019-08-25 07:42:19',
                'updated_at' => '2019-08-25 07:42:19',
            ),
            1 => 
            array (
                'id' => 2,
                'url' => 'google.com',
            'description' => 'Sidebar (250 X 250)',
                'image' => 'public/images/3a6mMU22sU4UtNVM9wPSqEl25lNtxW373QGp3kUp.jpeg',
                'created_at' => '2019-08-25 07:43:42',
                'updated_at' => '2019-08-25 07:43:42',
            ),
            2 => 
            array (
                'id' => 3,
                'url' => 'google.com',
            'description' => 'After Recent (728 X 90)',
                'image' => 'public/images/i46OGpZt2FP3iyVps1WCfc0tgSjlzFMVe8esxc6H.jpeg',
                'created_at' => '2019-08-25 07:43:59',
                'updated_at' => '2019-08-25 07:43:59',
            ),
            3 => 
            array (
                'id' => 4,
                'url' => 'google.com',
            'description' => 'Before Categories (728 X 90)',
                'image' => 'public/images/zSlT5Xo02O0BpEFJgYNkb5os4QoY7lUrv9QTIjJd.jpeg',
                'created_at' => '2019-08-25 07:44:21',
                'updated_at' => '2019-08-25 07:44:21',
            ),
            4 => 
            array (
                'id' => 5,
                'url' => 'google.com',
            'description' => 'Last (728 X 90)',
                'image' => 'public/images/vgMOh1XALe2kLoduNDjKF9jNjaSi8T5h092BARKP.jpeg',
                'created_at' => '2019-08-25 07:44:33',
                'updated_at' => '2019-08-25 07:44:33',
            ),
        ));
        
        
    }
}