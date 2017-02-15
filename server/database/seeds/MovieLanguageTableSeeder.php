<?php

use Illuminate\Database\Seeder;

class MovieLanguageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_language')->delete();
        
        \DB::table('movie_language')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lang_name' => 'English',
                'created_at' => '2017-02-14 05:44:47',
                'updated_at' => '2017-02-14 05:44:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'lang_name' => 'Hindi',
                'created_at' => '2017-02-14 05:44:54',
                'updated_at' => '2017-02-14 05:44:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}