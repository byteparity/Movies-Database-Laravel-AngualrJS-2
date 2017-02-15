<?php

use Illuminate\Database\Seeder;

class MoviePeoplesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_peoples')->delete();
        
        \DB::table('movie_peoples')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 2,
                'people_id' => 1,
                'proffession_id' => 1,
                'name_in_movie' => 'Xender Cage',
                'character_in_movie' => 'Main Role',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => NULL,
                'updated_at' => '2017-02-13 09:58:12',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'people_id' => 2,
                'proffession_id' => 1,
                'name_in_movie' => 'Raees',
                'character_in_movie' => 'Lead Actor',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => NULL,
                'updated_at' => '2017-02-13 09:58:30',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'movie_id' => 2,
                'people_id' => 3,
                'proffession_id' => 1,
                'name_in_movie' => 'jenny',
                'character_in_movie' => 'Lead role',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-25 11:20:15',
                'updated_at' => '2017-02-13 09:58:20',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'movie_id' => 1,
                'people_id' => 3,
                'proffession_id' => 1,
                'name_in_movie' => 'laila',
                'character_in_movie' => 'Dancer',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-25 11:27:14',
                'updated_at' => '2017-01-25 11:27:14',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'movie_id' => 1,
                'people_id' => 4,
                'proffession_id' => 1,
                'name_in_movie' => 'Raju',
                'character_in_movie' => 'Side role',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-25 11:27:44',
                'updated_at' => '2017-01-25 11:27:44',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'movie_id' => 1,
                'people_id' => 4,
                'proffession_id' => 2,
                'name_in_movie' => 'Producer',
                'character_in_movie' => 'Producer',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-25 11:30:21',
                'updated_at' => '2017-01-31 06:22:30',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'movie_id' => 1,
                'people_id' => 5,
                'proffession_id' => 1,
                'name_in_movie' => 'Gullu',
                'character_in_movie' => 'Side role',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-25 11:31:03',
                'updated_at' => '2017-01-25 11:31:03',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'movie_id' => 3,
                'people_id' => 6,
                'proffession_id' => 1,
                'name_in_movie' => 'Rohan Bhatnagar',
                'character_in_movie' => 'Lead role',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'created_at' => '2017-01-31 05:43:19',
                'updated_at' => '2017-01-31 05:43:19',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'movie_id' => 3,
                'people_id' => 7,
                'proffession_id' => 1,
                'name_in_movie' => 'Supriya Bhatnagar',
                'character_in_movie' => 'Lead actress',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'created_at' => '2017-01-31 05:44:03',
                'updated_at' => '2017-01-31 05:44:03',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'movie_id' => 3,
                'people_id' => 8,
                'proffession_id' => 1,
                'name_in_movie' => 'Madhavrao Shellar',
                'character_in_movie' => 'cop',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'created_at' => '2017-01-31 05:44:31',
                'updated_at' => '2017-01-31 05:44:31',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'movie_id' => 4,
                'people_id' => 3,
                'proffession_id' => 1,
                'name_in_movie' => 'Leela',
                'character_in_movie' => 'Lead actress',
                'movie_people_description' => 'Its a character played by Deepika Padukone in movie Goliyon ki Rasleela opposite Ranveer Singh',
                'created_at' => '2017-01-31 09:50:57',
                'updated_at' => '2017-01-31 09:50:57',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'movie_id' => 4,
                'people_id' => 9,
                'proffession_id' => 1,
                'name_in_movie' => 'Ram',
                'character_in_movie' => 'Lead actor',
                'movie_people_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',
                'created_at' => '2017-01-31 09:51:41',
                'updated_at' => '2017-01-31 09:51:41',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'movie_id' => 5,
                'people_id' => 10,
                'proffession_id' => 1,
                'name_in_movie' => 'Jolly',
                'character_in_movie' => 'Lead Actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-07 06:18:39',
                'updated_at' => '2017-02-07 06:18:39',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'movie_id' => 5,
                'people_id' => 11,
                'proffession_id' => 1,
                'name_in_movie' => 'Pushpa Pandey',
                'character_in_movie' => 'Lead actoress',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-07 06:19:32',
                'updated_at' => '2017-02-07 06:19:32',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'movie_id' => 5,
                'people_id' => 12,
                'proffession_id' => 1,
                'name_in_movie' => 'Jagdish Tyagi',
                'character_in_movie' => 'Side Role',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-07 06:20:18',
                'updated_at' => '2017-02-07 06:20:18',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'movie_id' => 5,
                'people_id' => 12,
                'proffession_id' => 4,
                'name_in_movie' => 'Jolly',
                'character_in_movie' => 'Actor & Assistance Director',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-07 06:21:24',
                'updated_at' => '2017-02-07 06:21:24',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'movie_id' => 6,
                'people_id' => 13,
                'proffession_id' => 1,
                'name_in_movie' => 'Rancho Shamaldas Chanchad',
                'character_in_movie' => 'Main Actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:18:14',
                'updated_at' => '2017-02-09 07:18:14',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'movie_id' => 6,
                'people_id' => 14,
                'proffession_id' => 1,
                'name_in_movie' => 'Farhan Qureshi',
                'character_in_movie' => 'Co-actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:18:45',
                'updated_at' => '2017-02-09 07:18:45',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'movie_id' => 6,
                'people_id' => 15,
                'proffession_id' => 1,
                'name_in_movie' => 'Raju Rastogi',
                'character_in_movie' => 'Co-actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:19:13',
                'updated_at' => '2017-02-09 07:19:13',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'movie_id' => 7,
                'people_id' => 10,
                'proffession_id' => 1,
                'name_in_movie' => 'Ranjit Katyal',
                'character_in_movie' => 'Main Actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:29:03',
                'updated_at' => '2017-02-09 07:29:03',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'movie_id' => 7,
                'people_id' => 16,
                'proffession_id' => 1,
                'name_in_movie' => 'Amrita Katiyal',
                'character_in_movie' => 'Main Actress',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:29:32',
                'updated_at' => '2017-02-09 07:29:32',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'movie_id' => 8,
                'people_id' => 17,
                'proffession_id' => 1,
                'name_in_movie' => 'Mahendra singh dhoni',
                'character_in_movie' => 'Main Actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:41:42',
                'updated_at' => '2017-02-09 07:41:42',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'movie_id' => 8,
                'people_id' => 18,
                'proffession_id' => 1,
                'name_in_movie' => 'Priyanka Jha',
                'character_in_movie' => 'Main Actoress',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 07:42:20',
                'updated_at' => '2017-02-09 07:42:20',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'movie_id' => 9,
                'people_id' => 10,
                'proffession_id' => 1,
                'name_in_movie' => 'Rustom Pavri',
                'character_in_movie' => 'Main Actor',
                'movie_people_description' => 'Naval officer Rustom Pavri returns from his posting and finds his wife Cynthia is away from home since last two days his marriages is on the rocks when he finds love letters in cupboard which indicates that Cynthia has found love in one of his friend Vikram Makhija an arrogant business tycoon ,Rustom then issues a pistol from Naval Ship\'s Armory and shoots Vikram three times in his chest living him dead and surrender himself to senior inspector Vincent Lobo.',
                'created_at' => '2017-02-09 08:55:28',
                'updated_at' => '2017-02-09 08:55:28',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'movie_id' => 9,
                'people_id' => 19,
                'proffession_id' => 1,
                'name_in_movie' => 'Cynthia Pavri',
                'character_in_movie' => 'Main Actor',
                'movie_people_description' => 'Naval officer Rustom Pavri returns from his posting and finds his wife Cynthia is away from home since last two days his marriages is on the rocks when he finds love letters in cupboard which indicates that Cynthia has found love in one of his friend Vikram Makhija an arrogant business tycoon ,Rustom then issues a pistol from Naval Ship\'s Armory and shoots Vikram three times in his chest living him dead and surrender himself to senior inspector Vincent Lobo',
                'created_at' => '2017-02-09 09:00:22',
                'updated_at' => '2017-02-09 09:00:22',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'movie_id' => 10,
                'people_id' => 20,
                'proffession_id' => 1,
                'name_in_movie' => 'Arefa Khan',
                'character_in_movie' => 'Main Actress',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 09:08:43',
                'updated_at' => '2017-02-09 09:08:43',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'movie_id' => 10,
                'people_id' => 21,
                'proffession_id' => 1,
                'name_in_movie' => 'Sultan Ali Khan',
                'character_in_movie' => 'Main Actor',
                'movie_people_description' => 'Sultan is a story of Sultan Ali Khan - a local wrestling champion with the world at his feet as he dreams of representing India at the Olympics. It\'s a story of Aarfa - a feisty young girl from the same small town as Sultan with her own set of dreams. When the 2 local wrestling legends lock horns, romance blossoms and their dreams and aspirations become intertwined and aligned. However, the path to glory is a rocky one and one must fall several times before one stands victorious - More often than not, this journey can take a lifetime. Sultan is a classic underdog tale about a wrestler\'s journey, looking for a comeback by defeating all odds staked up against him. But when he has nothing to lose and everything to gain in this fight for his life match... Sultan must literally fight for his life. Sultan believes he\'s got what it takes... but this time, it\'s going to take everything he\'s got.',
                'created_at' => '2017-02-09 09:09:34',
                'updated_at' => '2017-02-09 09:09:34',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'movie_id' => 10,
                'people_id' => 21,
                'proffession_id' => 2,
                'name_in_movie' => 'Producer',
                'character_in_movie' => 'Producer',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-09 09:09:58',
                'updated_at' => '2017-02-09 09:09:58',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'movie_id' => 11,
                'people_id' => 22,
                'proffession_id' => 1,
                'name_in_movie' => 'commando',
                'character_in_movie' => 'Main Actor',
            'movie_people_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'created_at' => '2017-02-13 10:09:52',
                'updated_at' => '2017-02-13 10:09:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}