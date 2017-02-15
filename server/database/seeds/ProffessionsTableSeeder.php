<?php

use Illuminate\Database\Seeder;

class ProffessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proffessions')->delete();
        
        \DB::table('proffessions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'proffession_type' => 'Actor',
            'proffession_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-01-24 07:04:06',
                'updated_at' => '2017-02-13 05:12:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'proffession_type' => 'Producer',
            'proffession_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-01-24 07:04:17',
                'updated_at' => '2017-02-13 05:12:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'proffession_type' => 'Writer',
            'proffession_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-01-24 07:04:27',
                'updated_at' => '2017-02-13 05:12:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'proffession_type' => 'Assistant Director',
            'proffession_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-07 06:16:20',
                'updated_at' => '2017-02-07 06:16:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'proffession_type' => 'Director',
            'proffession_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-07 06:16:52',
                'updated_at' => '2017-02-07 06:16:52',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'proffession_type' => 'Spot man',
            'proffession_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:40:35',
                'updated_at' => '2017-02-09 07:40:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}