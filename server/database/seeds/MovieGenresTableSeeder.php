<?php

use Illuminate\Database\Seeder;

class MovieGenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_genres')->delete();
        
        \DB::table('movie_genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 2,
                'genre_id' => 1,
                'created_at' => '2017-01-25 06:00:19',
                'updated_at' => '2017-01-25 06:00:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'genre_id' => 2,
                'created_at' => '2017-01-25 06:04:41',
                'updated_at' => '2017-01-25 06:09:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 2,
                'genre_id' => 2,
                'created_at' => '2017-01-25 09:07:49',
                'updated_at' => '2017-01-25 09:07:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 1,
                'genre_id' => 5,
                'created_at' => '2017-01-25 11:34:34',
                'updated_at' => '2017-01-25 11:34:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 3,
                'genre_id' => 6,
                'created_at' => '2017-01-31 05:44:48',
                'updated_at' => '2017-01-31 05:44:48',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 4,
                'genre_id' => 2,
                'created_at' => '2017-01-31 09:51:50',
                'updated_at' => '2017-01-31 09:51:50',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 4,
                'genre_id' => 7,
                'created_at' => '2017-01-31 09:51:58',
                'updated_at' => '2017-01-31 09:51:58',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 4,
                'genre_id' => 6,
                'created_at' => '2017-01-31 09:52:06',
                'updated_at' => '2017-01-31 09:52:06',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 5,
                'genre_id' => 2,
                'created_at' => '2017-02-09 06:15:14',
                'updated_at' => '2017-02-09 06:15:14',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 5,
                'genre_id' => 3,
                'created_at' => '2017-02-09 06:15:24',
                'updated_at' => '2017-02-09 06:15:24',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 6,
                'genre_id' => 3,
                'created_at' => '2017-02-09 07:19:34',
                'updated_at' => '2017-02-09 07:19:34',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 6,
                'genre_id' => 2,
                'created_at' => '2017-02-09 07:19:42',
                'updated_at' => '2017-02-09 07:19:42',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 7,
                'genre_id' => 2,
                'created_at' => '2017-02-09 07:29:52',
                'updated_at' => '2017-02-09 07:29:52',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 7,
                'genre_id' => 5,
                'created_at' => '2017-02-09 07:30:02',
                'updated_at' => '2017-02-09 07:30:02',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 7,
                'genre_id' => 8,
                'created_at' => '2017-02-09 07:30:23',
                'updated_at' => '2017-02-09 07:30:23',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 8,
                'genre_id' => 2,
                'created_at' => '2017-02-09 07:42:30',
                'updated_at' => '2017-02-09 07:42:30',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 8,
                'genre_id' => 8,
                'created_at' => '2017-02-09 07:42:37',
                'updated_at' => '2017-02-09 07:42:37',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 8,
                'genre_id' => 9,
                'created_at' => '2017-02-09 07:42:43',
                'updated_at' => '2017-02-09 07:42:43',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 9,
                'genre_id' => 2,
                'created_at' => '2017-02-09 09:01:14',
                'updated_at' => '2017-02-09 09:01:14',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 9,
                'genre_id' => 10,
                'created_at' => '2017-02-09 09:01:23',
                'updated_at' => '2017-02-09 09:01:23',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 9,
                'genre_id' => 11,
                'created_at' => '2017-02-09 09:01:32',
                'updated_at' => '2017-02-09 09:01:32',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 10,
                'genre_id' => 8,
                'created_at' => '2017-02-09 09:10:17',
                'updated_at' => '2017-02-09 09:10:17',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 10,
                'genre_id' => 2,
                'created_at' => '2017-02-09 09:10:24',
                'updated_at' => '2017-02-09 09:10:24',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 10,
                'genre_id' => 6,
                'created_at' => '2017-02-09 09:10:30',
                'updated_at' => '2017-02-09 09:10:30',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 11,
                'genre_id' => 8,
                'created_at' => '2017-02-13 10:10:15',
                'updated_at' => '2017-02-13 10:10:15',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 11,
                'genre_id' => 11,
                'created_at' => '2017-02-13 10:10:24',
                'updated_at' => '2017-02-13 10:10:24',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 11,
                'genre_id' => 2,
                'created_at' => '2017-02-13 10:10:33',
                'updated_at' => '2017-02-13 10:10:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}