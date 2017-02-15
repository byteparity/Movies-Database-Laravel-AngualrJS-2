<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_type' => 'Western',
                'genre_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'created_at' => '2017-01-24 09:04:57',
                'updated_at' => '2017-01-24 09:04:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'genre_type' => 'Drama',
                'genre_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'created_at' => '2017-01-24 09:07:02',
                'updated_at' => '2017-01-24 09:07:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'genre_type' => 'Comedy',
                'genre_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'created_at' => '2017-01-24 09:07:14',
                'updated_at' => '2017-01-24 09:07:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'genre_type' => 'Horror',
                'genre_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'created_at' => '2017-01-24 09:07:27',
                'updated_at' => '2017-01-24 09:07:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'genre_type' => 'Historical',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-01-25 11:34:22',
                'updated_at' => '2017-02-13 05:13:06',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'genre_type' => 'Romentic',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-01-31 05:41:43',
                'updated_at' => '2017-02-13 05:13:29',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'genre_type' => 'Musical',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-01-31 09:49:50',
                'updated_at' => '2017-02-13 05:13:18',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'genre_type' => 'Action',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:30:15',
                'updated_at' => '2017-02-09 07:30:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'genre_type' => 'Sports',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:41:06',
                'updated_at' => '2017-02-09 07:41:06',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'genre_type' => 'Thriller',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 08:31:36',
                'updated_at' => '2017-02-09 08:31:36',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'genre_type' => 'Crime',
            'genre_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 08:53:36',
                'updated_at' => '2017-02-09 08:53:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}