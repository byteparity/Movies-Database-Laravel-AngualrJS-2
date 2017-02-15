<?php

use Illuminate\Database\Seeder;

class MovieReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_reviews')->delete();
        
        \DB::table('movie_reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 2,
                'user_id' => 1,
                'rating' => 5,
                'rating_description' => 'Lorem ipsum is simply dummy text',
                'helpful_count' => 10,
                'unhelpful_count' => 2,
                'created_at' => '2017-01-25 07:03:55',
                'updated_at' => '2017-01-25 07:04:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'movie_id' => 1,
                'user_id' => 2,
                'rating' => 4,
                'rating_description' => 'Lorem ipsum is simply dummy text',
                'helpful_count' => 6,
                'unhelpful_count' => 3,
                'created_at' => '2017-01-25 10:31:13',
                'updated_at' => '2017-01-25 10:31:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'movie_id' => 1,
                'user_id' => 1,
                'rating' => 3,
                'rating_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'helpful_count' => 4,
                'unhelpful_count' => 2,
                'created_at' => '2017-01-25 11:34:56',
                'updated_at' => '2017-01-25 11:34:56',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'movie_id' => 3,
                'user_id' => 3,
                'rating' => 4,
                'rating_description' => 'If you\'ve watched and liked Film\'s trailer then you will get all expected things in Film just like me. Excellent Writing, High on Emotions, Good Direction, Heart Touching concept and last but not the least Kaabil hits your heart and melts it.',
                'helpful_count' => 6,
                'unhelpful_count' => 2,
                'created_at' => '2017-01-31 05:55:29',
                'updated_at' => '2017-01-31 05:55:29',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'movie_id' => 3,
                'user_id' => 1,
                'rating' => 4,
                'rating_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'helpful_count' => 5,
                'unhelpful_count' => 5,
                'created_at' => '2017-01-31 07:54:41',
                'updated_at' => '2017-01-31 07:54:41',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'movie_id' => 3,
                'user_id' => 2,
                'rating' => 3,
                'rating_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'helpful_count' => 8,
                'unhelpful_count' => 4,
                'created_at' => '2017-01-31 07:55:03',
                'updated_at' => '2017-01-31 07:55:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}