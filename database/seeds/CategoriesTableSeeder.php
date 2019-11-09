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
                'id' => 3,
                'title_en' => 'Home',
                'title_ar' => 'الرئيسية',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:04:28',
                'updated_at' => '2019-08-26 15:04:28',
            ),
            1 => 
            array (
                'id' => 4,
                'title_en' => 'Kuwait News',
                'title_ar' => 'أخبار الكويت',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:05:21',
                'updated_at' => '2019-08-26 15:05:21',
            ),
            2 => 
            array (
                'id' => 5,
                'title_en' => 'Literature and Culture',
                'title_ar' => 'أدب وثقافة',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:07:23',
                'updated_at' => '2019-08-26 15:07:23',
            ),
            3 => 
            array (
                'id' => 6,
                'title_en' => 'Arabic and International',
                'title_ar' => 'عربية وعالمية',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:07:58',
                'updated_at' => '2019-08-26 15:07:58',
            ),
            4 => 
            array (
                'id' => 7,
                'title_en' => 'Economy and Business',
                'title_ar' => 'اقتصاد وأعمال',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:08:28',
                'updated_at' => '2019-08-26 15:08:28',
            ),
            5 => 
            array (
                'id' => 8,
                'title_en' => 'Sports',
                'title_ar' => 'رياضة',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:09:57',
                'updated_at' => '2019-08-26 15:09:57',
            ),
            6 => 
            array (
                'id' => 9,
                'title_en' => 'The Society',
                'title_ar' => 'المجتمع',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:10:23',
                'updated_at' => '2019-08-26 15:10:23',
            ),
            7 => 
            array (
                'id' => 10,
                'title_en' => 'Arts',
                'title_ar' => 'فنون',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:11:06',
                'updated_at' => '2019-08-26 15:11:06',
            ),
            8 => 
            array (
                'id' => 11,
                'title_en' => 'Mix',
                'title_ar' => 'منوعات',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:11:35',
                'updated_at' => '2019-08-26 15:11:35',
            ),
            9 => 
            array (
                'id' => 12,
                'title_en' => 'Around the World',
                'title_ar' => 'حول العالم',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:13:07',
                'updated_at' => '2019-08-26 15:13:07',
            ),
            10 => 
            array (
                'id' => 13,
                'title_en' => 'Book and Opinions',
                'title_ar' => 'كتاب وآراء',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:13:35',
                'updated_at' => '2019-08-26 15:13:35',
            ),
            11 => 
            array (
                'id' => 14,
                'title_en' => 'Special Reports',
                'title_ar' => 'تقارير خاصة',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:14:17',
                'updated_at' => '2019-08-26 15:14:17',
            ),
            12 => 
            array (
                'id' => 15,
                'title_en' => 'Last',
                'title_ar' => 'الأخيرة',
                'parent_id' => 0,
                'created_at' => '2019-08-26 15:15:06',
                'updated_at' => '2019-08-26 15:15:06',
            ),
            13 => 
            array (
                'id' => 16,
                'title_en' => 'Official News',
                'title_ar' => 'أخبار رسمية',
                'parent_id' => 4,
                'created_at' => '2019-11-05 08:22:03',
                'updated_at' => '2019-11-05 08:22:03',
            ),
        ));
        
        
    }
}