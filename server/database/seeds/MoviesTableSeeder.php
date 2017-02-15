<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movies')->delete();
        
        \DB::table('movies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'language_id' => 2,
                'title' => 'Raees',
                'running_time' => '2h 35min',
                'release_date' => '2017-01-25',
                'image_file' => NULL,
                'movie_description' => 'The film is set in the early 80\'s and 90\'s in Gujarat. The fictitious story of a man who builds an empire in the state of Gujarat, the only state that still follows prohibition. It\'s a story about his rise and his relationships, which help him become the single most powerful man in the state. Written by RedChillies',
                'created_at' => '2017-01-23 09:34:59',
                'updated_at' => '2017-02-14 06:24:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'language_id' => 1,
                'title' => 'XXX: Return Of Xander Cage',
                'running_time' => ' 1h 47min',
                'release_date' => '2017-01-20',
                'image_file' => NULL,
            'movie_description' => 'Extreme athlete turned government operative Xander Cage (Vin Diesel) comes out of self-imposed exile, thought to be long dead, and is set on a collision course with deadly alpha warrior Xiang (Donnie Yen) and his team in a race to recover a sinister and seemingly unstoppable weapon known as Pandora\'s Box. Recruiting an all-new group of thrill-seeking cohorts, Xander finds himself enmeshed in a deadly conspiracy that points to collusion at the highest levels of world governments.',
                'created_at' => '2017-01-23 10:59:24',
                'updated_at' => '2017-02-14 06:25:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'language_id' => 2,
                'title' => 'Kaabil',
                'running_time' => '2h 35min',
                'release_date' => '2017-01-27',
                'image_file' => NULL,
                'movie_description' => 'A blind man sets out to avenge the murder of his wife. ',
                'created_at' => '2017-01-31 05:35:38',
                'updated_at' => '2017-02-14 06:24:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'language_id' => 2,
                'title' => 'Goliyon Ki Rasleela Ram-Leela',
                'running_time' => '2h 30min',
                'release_date' => '2013-11-15',
                'image_file' => NULL,
                'movie_description' => 'Ram and Leela, their love, lust and the drama afterwards. Modern adaptation of William Shakespeare\'s \'Romeo & Juliet\'. ',
                'created_at' => '2017-01-31 09:47:06',
                'updated_at' => '2017-02-14 06:24:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'language_id' => 2,
                'title' => 'Jolly LLB 2',
                'running_time' => '2h 20min',
                'release_date' => '2017-02-10',
                'image_file' => NULL,
                'movie_description' => 'Jolly is a clumsy lawyer who is faced with representing the most critical court case of his career.',
                'created_at' => '2017-02-07 06:07:28',
                'updated_at' => '2017-02-14 06:24:33',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'language_id' => 1,
                'title' => '3 Idiots',
                'running_time' => '2h 50min',
                'release_date' => '2009-12-25',
                'image_file' => NULL,
                'movie_description' => 'Two friends are searching for their long lost companion. They revisit their college days and recall the memories of their friend who inspired them to think differently, even as the rest of the world called them "idiots".',
                'created_at' => '2017-02-09 07:12:03',
                'updated_at' => '2017-02-14 06:55:12',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'language_id' => 2,
                'title' => 'Airlift',
                'running_time' => '2h 10min',
                'release_date' => '2016-01-22',
                'image_file' => NULL,
            'movie_description' => 'It is in this scenario that Ranjit Katyal (played by Akshay Kumar), a wealthy and powerful Indian businessman, who has always seen himself as a Kuwaiti, rather than an Indian, realizes that he no longer wields any influence on the Iraqis, and that he and his family are in as much danger as anyone else. Ranjit unknowingly becomes the man who all 170,000 Indians look up to for getting them out safely from Kuwait. Airlift is the story of Indians stranded in Kuwait during this traumatic time. A story of how they, with the help of Ranjit Katyal, managed to survive the Iraqi invasion, and against all odds traveled a thousand kilometers across the border into Amman, Jordan. From Amman, 170,000 Indians were brought home by the largest and the most successful evacuation ever attempted by any country, in the history of the world. Over 59 days, the Indian government systematically flew over 488 Air India commercial flights into a war zone to evacuate all 170,000 Indians and safely bring them ... Written by T-Series',
                'created_at' => '2017-02-09 07:24:04',
                'updated_at' => '2017-02-14 06:24:01',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'language_id' => 2,
                'title' => 'M. S. Dhoni: The Untold Story',
                'running_time' => '3h 4min',
                'release_date' => '2016-09-30',
                'image_file' => NULL,
                'movie_description' => 'Mahendra Singh Dhoni is a goalkeeper in school football team.Bannerjee a school cricket coach asks him to join his cricket team and practice daily with him for two hours time passes and he becomes a big state level cricketer but for a long time his luck doesn\'t favor him to become a member of Indian Cricket team.Dhoni takes up a job in Indian Railways as a ticket checker and plays cricket for the railways after long wait of 4 years he gets selected in Indian Cricket team and turns to be one of the best cricketing captains in history of Indian Cricket.',
                'created_at' => '2017-02-09 07:37:12',
                'updated_at' => '2017-02-14 06:24:48',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'language_id' => 2,
                'title' => 'Rustom',
                'running_time' => '2h 28min',
                'release_date' => '2016-08-12',
                'image_file' => NULL,
                'movie_description' => 'Naval officer Rustom Pavri returns from his posting and finds his wife Cynthia is away from home since last two days his marriages is on the rocks when he finds love letters in cupboard which indicates that Cynthia has found love in one of his friend Vikram Makhija an arrogant business tycoon ,Rustom then issues a pistol from Naval Ship\'s Armory and shoots Vikram three times in his chest living him dead and surrender himself to senior inspector Vincent Lobo',
                'created_at' => '2017-02-09 08:31:16',
                'updated_at' => '2017-02-14 06:25:03',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'language_id' => 2,
                'title' => ' Sultan',
                'running_time' => '2h 50min',
                'release_date' => '2016-07-06',
                'image_file' => NULL,
                'movie_description' => 'Sultan is a story of Sultan Ali Khan - a local wrestling champion with the world at his feet as he dreams of representing India at the Olympics. It\'s a story of Aarfa - a feisty young girl from the same small town as Sultan with her own set of dreams. When the 2 local wrestling legends lock horns, romance blossoms and their dreams and aspirations become intertwined and aligned. However, the path to glory is a rocky one and one must fall several times before one stands victorious - More often than not, this journey can take a lifetime. Sultan is a classic underdog tale about a wrestler\'s journey, looking for a comeback by defeating all odds staked up against him. But when he has nothing to lose and everything to gain in this fight for his life match... Sultan must literally fight for his life. Sultan believes he\'s got what it takes... but this time, it\'s going to take everything he\'s got.',
                'created_at' => '2017-02-09 09:04:13',
                'updated_at' => '2017-02-14 06:33:22',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'language_id' => 2,
                'title' => 'Commando 2',
                'running_time' => '2h 38min',
                'release_date' => '2017-03-03',
                'image_file' => NULL,
                'movie_description' => 'A man uses his combat skills to eradicate black money, which has been siphoned to banks abroad.',
                'created_at' => '2017-02-13 10:07:21',
                'updated_at' => '2017-02-15 07:10:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}