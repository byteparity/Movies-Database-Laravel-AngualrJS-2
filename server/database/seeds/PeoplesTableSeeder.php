<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peoples')->delete();
        
        \DB::table('peoples')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Vin',
                'last_name' => 'Diesel',
                'gender' => 1,
                'born_date' => '1967-07-17',
                'people_image' => NULL,
            'people_description' => 'Vin Diesel was born Mark Sinclair in Alameda County, California, along with his fraternal twin brother, Paul Vincent. He was raised by his astrologer/psychologist mother, Delora Sherleen (Sinclair), and adoptive father, Irving H. Vincent, an acting instructor and theater manager, in an artist\'s housing project in New York City\'s Greenwich Village....',
                'created_at' => '2017-01-24 06:29:39',
                'updated_at' => '2017-01-24 06:29:39',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Shahrukh',
                'last_name' => 'Khan',
                'gender' => 1,
                'born_date' => '1965-11-02',
                'people_image' => NULL,
            'people_description' => 'Sharukh Khan was born on 2 November 1965 in New Delhi, India. He married Gauri Khan on 25 October 1991. They have three children, son Aryan Khan (b. 1997), son AbRam (b.2013) and daughter Suhana (b. 2000). Khan started out his career by appearing in several television serials during 1988-1990.',
                'created_at' => '2017-01-24 06:38:50',
                'updated_at' => '2017-01-24 06:38:50',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Deepika',
                'last_name' => 'Padukone',
                'gender' => 2,
                'born_date' => '1986-01-05',
                'people_image' => NULL,
                'people_description' => 'Deepika Padukone, born 5 January 1986 in Copenhagen, Denmark, is an Indian model & Actress. She is the daughter of former badminton Champion Prakash Padukone. Her mother tongue is Konkani. Deepika has a younger sister named Anisha. She has been modeling appearances in print and television advertising campaigns for Liril, Close-Up toothpaste',
                'created_at' => '2017-01-25 11:19:12',
                'updated_at' => '2017-01-25 11:19:12',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'first_name' => 'Nawazuddin',
                'last_name' => 'Siddiqui',
                'gender' => 1,
                'born_date' => '1974-05-19',
                'people_image' => NULL,
            'people_description' => 'Nawazuddin Siddiqui (born 1974) also known as Nowaz is an Indian film actor who has appeared in some of Bollywood\'s major films including, Black Friday (2004), New York (2009), Peepli Live (2010), Kahani (2012), Gangs of Wasseypur (2012) and Gangs of Wasseypur - Part 2 (2012). Early life and education Nawazuddin Siddiqui is from Budhana a small town',
                'created_at' => '2017-01-25 11:24:11',
                'updated_at' => '2017-01-25 11:24:11',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'first_name' => 'Gautam',
                'last_name' => 'Rode',
                'gender' => 1,
                'born_date' => '2017-01-03',
                'people_image' => NULL,
            'people_description' => 'Gautam Rode is known for his work on Suryaputra Karn (2015), MahaKumbh (2014) and Agyaat (2009). ',
                'created_at' => '2017-01-25 11:26:16',
                'updated_at' => '2017-01-25 11:26:16',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'first_name' => 'Hrithik',
                'last_name' => 'Roshan',
                'gender' => 1,
                'born_date' => '1974-01-10',
                'people_image' => NULL,
            'people_description' => 'Hrithik Roshan is an Indian actor who appears in Bollywood films. After having appeared in films as a child actor in the 1980s, Roshan made his film debut in a leading role in Kaho Naa... Pyaar Hai (2000) for which Roshan earned his Filmfare Awards for Best Actor and Best Male Debut. In 2001, he went on to appear in the melodrama Kabhi Khushi ',
                'created_at' => '2017-01-31 05:37:26',
                'updated_at' => '2017-01-31 05:37:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'first_name' => 'Yami',
                'last_name' => 'Gautam',
                'gender' => 2,
                'born_date' => '1983-11-28',
                'people_image' => NULL,
                'people_description' => 'She received IIFA - Star Debut of the Year Award and Zee Cine - Best Female Debut Award for Vicky Donor. She has acted in Total Siyappa and Action Jackson in 2014 and, Badlapur in 2015 against Varun Dhawan. All these movies performed well at the box office. She has also acted in Telugu Movie Courier Boy Kalyan and Tamil movie Tamilselvanum',
                'created_at' => '2017-01-31 05:38:39',
                'updated_at' => '2017-01-31 05:38:39',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'first_name' => 'Ronit',
                'last_name' => 'Roy',
                'gender' => 1,
                'born_date' => '1965-10-11',
                'people_image' => NULL,
            'people_description' => 'Ronit Roy was born on October 11, 1965 in Nagpur, Maharashtra, India as Ronit Bose Roy. He is an actor, known for Udaan (2010), Ugly (2013) and Adaalat (2010). He has been married to Neelam Singh since December 25, 2003. They have two children.',
                'created_at' => '2017-01-31 05:40:05',
                'updated_at' => '2017-01-31 05:40:05',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'first_name' => 'Ranveer',
                'last_name' => 'Singh',
                'gender' => 1,
                'born_date' => '1985-07-06',
                'people_image' => NULL,
            'people_description' => 'Ranveer Singh is an Indian actor working in Bollywood. Born in Mumbai, India, Ranveer Singh had always wanted to be an actor since his childhood. However, during his college days he felt that the idea of acting was far-fetched and focused on creative writing. While pursuing his Bachelor of Arts degree from Indiana University (Bloomington)',
                'created_at' => '2017-01-31 09:48:28',
                'updated_at' => '2017-01-31 09:48:28',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'first_name' => 'Akshay',
                'last_name' => 'Kumar',
                'gender' => 1,
                'born_date' => '1967-09-09',
                'people_image' => NULL,
            'people_description' => 'Akshay Kumar, born September 9, 1967, is an actor. He studied martial arts in Hong Kong. It was a student that suggested that he try modeling. Because of his success as model, he was offered films. Along with his good looks and excellent martial art skills, he was always the first choice to do adventurous movies. He does his own stunts in his films. His breakthrough performance was in Saugandh (1991). He was well known for his Khiladi series, an Indian version of James Bond, such as Mr. Bond (1992), Khiladi (1992), Main Khiladi Tu Anari (1994), Mr. & Mrs. Khiladi (1997) and Khiladi 420 (2000). He dated strings of his co-stars including Raveena Tandon, Shilpa Shetty, Pooja Batra and Rekha. His recent critically acclaimed performances include Airlift (2016), Baby (2015) and Rustom (2016).',
                'created_at' => '2017-02-07 06:10:22',
                'updated_at' => '2017-02-09 10:06:31',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'first_name' => 'Huma',
                'last_name' => 'Qureshi',
                'gender' => 2,
                'born_date' => '1986-07-28',
                'people_image' => NULL,
                'people_description' => 'Huma Qureshi born and raised in Delhi. Her father is a famous restaurant owner called Saleem\'s a chain of some 10 restaurants in Delhi. Her brother, Saqib Saleem is an actor and acted in Mujhse Fraaandship Karoge. In year 2011 an announcement was made that Huma would make her Bollywood debut in a movie too called Billa 2 but got delayed due to some unknown reason. However, a few months later, a new announcement came as she wasn\'t part of the project and she has gotten her Bollywood debut, Anurag Kashyap\'s Gangs of Wasseypur. Huma has a nice role in 2 parts of Gangs of Wasseypur.',
                'created_at' => '2017-02-07 06:12:52',
                'updated_at' => '2017-02-07 06:12:52',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'first_name' => 'Arshad',
                'last_name' => 'Warsi',
                'gender' => 1,
                'born_date' => '1968-04-19',
                'people_image' => NULL,
                'people_description' => 'Arshad Warsi was born in Mumbai, India, and did his schooling at a boarding school, Barnes School, Deolali in Nashik district, Maharashtra. He was orphaned at the age of 14 and struggled for a living in Mumbai during his early days.

Financial circumstances forced Warsi to start work as a door-to-door cosmetics salesman at age 17. Later he worked in a photo lab. Meanwhile he had a keen interest in dancing and received an offer to join Akbar Sami\'s Dance group in Mumbai, which started his dancing and choreographing career. He also assisted Mahesh Bhatt in Thikana (1987) and Kaash (1987). Then in 1991, he won the Indian dance competition, followed by the fourth prize in the Modern Jazz category in 1992 World Dance championship, London, at the age of 21. Soon, he started his own dance studio, \'Awesome\' with that money and also formed a dance troupe. It was here, his future wife, Maria Goretti, a St. Andrew\'s College student joined him, before she became a VJ. He was also associated with English theater group in Mumbai, choreographing shows for Bharat Dabholkar and got an opportunity to choreograph the title track for the film, Roop Ki Rani Choron Ka Raja (1993).',
                'created_at' => '2017-02-07 06:15:04',
                'updated_at' => '2017-02-07 06:15:04',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'first_name' => 'Aamir',
                'last_name' => 'Khan',
                'gender' => 1,
                'born_date' => '1965-11-16',
                'people_image' => NULL,
            'people_description' => 'Aamir was first introduced as a child artiste in the 1970\'s hit Yaadon Ki Baaraat (1973) - he was the youngest child in the trio. He then concentrated on school and became a state tennis champion for Maharashtra. Aamir fell in love with the girl next door in the meantime. He proposed to her the day he turned 21, and she accepted. But apparently, there was opposition since she was from a Hindu family and he, from a devout Islamic one. So, they eloped, got married and returned to their homes. Aamir\'s wife Reena even appears in the song "Papa Kehte Hain".',
                'created_at' => '2017-02-09 07:13:34',
                'updated_at' => '2017-02-09 07:13:34',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'first_name' => 'R',
                'last_name' => 'Madhavan',
                'gender' => 1,
                'born_date' => '1970-06-01',
                'people_image' => NULL,
                'people_description' => 'Madhavan was born on June 1, 1970, in a Tamil-speaking family.

At the age of 18 his college entrusted him with the responsibility of representing India as a Cultural Ambassador to Canada.

A year later he and three others from his college were sent to Britain as army cadets and received training in the royal army, navy, and Air Force.

While conducting courses on public speaking, he met Saritha, an Air Hostess and both got 7 years later. Their first child, a son, Vedaant, was born in 2005.

A vegetarian and animal lover he is a brand ambassador for PETA. He is fluent in English, Hindi, and Tamil.

Before making his appearance on the tinsel screen, he was popular on the idiot box on Sony\'s Deal Ya No Deal (2005). Having done close to 1800 episodes of various soaps on varied National Networks, he subsequently also appeared as the main character in a mobile game.',
                'created_at' => '2017-02-09 07:15:04',
                'updated_at' => '2017-02-09 07:15:04',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'first_name' => 'Sharman',
                'last_name' => 'Joshi',
                'gender' => 1,
                'born_date' => '1979-04-28',
                'people_image' => NULL,
            'people_description' => 'Sharman Joshi was born on April 28, 1979 in Bombay, Maharashtra, India. He is an actor, known for 3 Idiots (2009), Rang De Basanti (2006) and Ferrari Ki Sawaari (2012). He has been married to Prerna Chopra since 2000. They have three children.
Starred in Mahesh Manjrekar\'s shelved film " Sab Golmaal Hain". Co starring Sahil Khan and Prabhudevaa. The film was to be based on the Marathi play " All The Best" This was in 2003.The film was previously being made as " Raju Raja Ram" with Jackie Shroff, Govinda and Salman Khan. The film was eventually made as " Tom Dick and Harry " in 2006.
Starred in Vimal Kumar\'s shelved film " Hum Do Hamare Do" (2003). Starring Sharman Joshi, Saahil Khan.
In 1996, ABCL ( Amitabh Bachchan Corporation Limited) held a all India talent search contest called Star Track. 9 boys and girls were selected. Sharman Joshi and Narendra Jha were chosen out of millions of entrants.',
                'created_at' => '2017-02-09 07:17:01',
                'updated_at' => '2017-02-09 07:17:01',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'first_name' => 'Nimrat',
                'last_name' => 'Kaur',
                'gender' => 2,
                'born_date' => '1986-02-12',
                'people_image' => NULL,
                'people_description' => 'Born in Rajasthan, Nimrat was brought up in an army environment, thus hopping from one city to other and from one school to other. After losing her father, during a counter-terrorist operation, at a very young age she moved to Noida in the north of India and went on to finish her remaining schooling from DPS Noida and studied for her Bachelor\'s in Commerce from Sri Ram College of Commerce. Nimrat finally made the inevitable move to Mumbai in 2004 after graduating and forayed into the world of modeling and advertising. She first caught the eye with the Tera Mera Pyaar music video from Sony Music. Thereafter she went on to model for over 80 Indian and international television commercials and numerous print campaigns for brands like Asian Paints, ICICI, Videocon, Pantaloon, Samsung, Aircel and Cadbury.

In 2009 Nimrat started her stint with the stage acting with theatre veteran Sunil Shanbag in a musical at the Prithvi Theatre Festival. She went on to do many plays but the most acclaimed one was All About Women, where she was required to play four different characters ranging from the age of 25 to 85. Having completed close to 50 shows she earned herself a nomination at the Mahindra Excellence in Theatre Awards in the Best Actress category. Billed as one of the most promising theatre actors, Nimrat went on to work with stage stalwarts including Manav Kaul and recently won Best Actress award for her work in Akarsh Khurana\'s Baghdad Wedding.',
                'created_at' => '2017-02-09 07:27:56',
                'updated_at' => '2017-02-09 07:27:56',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'first_name' => 'Sushant Singh',
                'last_name' => 'Rajput',
                'gender' => 1,
                'born_date' => '1986-01-21',
                'people_image' => NULL,
                'people_description' => 'Sushant Singh Rajput is an Indian television and film actor. He is best known for playing the role of Manav in the ongoing TV series, Pavitra Rishta on Zee Tv. Having made his Bollywood debut with a blockbuster of a movie, Kai Po Che directed by Abhishek Kapoor which was adapted by Chetan Bhagat\'s novel, The 3 Mistake of My Life, he has launched himself to soaring new heights in the film industry.',
                'created_at' => '2017-02-09 07:38:48',
                'updated_at' => '2017-02-09 07:38:48',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'first_name' => 'Disha',
                'last_name' => 'Patani',
                'gender' => 2,
                'born_date' => '1992-06-13',
                'people_image' => NULL,
            'people_description' => 'Disha Patani was born on June 13, 1992 in Bareilly, Uttar Pradesh, India. She is an actress, known for Kung-Fu Yoga (2017), M.S. Dhoni: The Untold Story (2016) and Loafer (2015).',
                'created_at' => '2017-02-09 07:40:19',
                'updated_at' => '2017-02-09 07:40:19',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'first_name' => 'Ileana',
                'last_name' => 'D\'Cruz',
                'gender' => 2,
                'born_date' => '1987-11-01',
                'people_image' => NULL,
                'people_description' => 'She made her debut in the Telugu film Devadasu, which became the year\'s first major commercial success. She debuted in Tamil with "Kedi".

Telugu movie "Pokiri", which was one of the highest money grosser, set her in top slot actresses. She appeared in many commercially successful movies like Jalsa, Kick etc.

She made her debut in Bollywood with Anurag Basu\'s Barfi! (2012) starring Ranbir Kapoor.',
                'created_at' => '2017-02-09 08:56:52',
                'updated_at' => '2017-02-09 08:56:52',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'first_name' => 'Anushka',
                'last_name' => 'Sharma',
                'gender' => 2,
                'born_date' => '1988-05-01',
                'people_image' => NULL,
                'people_description' => 'Anushka Sharma was born on 1 May 1988 in Ayodhya, Uttar Pradesh. Her father, Colonel Ajay Kumar Sharma, is an army officer, and her mother, Ashima Sharma, is a homemaker. Her father is a native of Uttar Pradesh, while her mother is a Garhwali. Her elder brother is film producer Karnesh Sharma, who earlier served in the Merchant Navy. Prior to joining the navy, Karnesh played for the under-19 Bangalore Ranji cricket team. Sharma has stated that being a military brat played an important role in shaping her as a person and contributing to her life. In an interview with The Times of India in 2012, she said, "I take pride in saying that I am an army officer\'s daughter even more than being an actor. She studied in Army School and graduated with specialization in arts from Mount Carmel College, Bangalore. She then moved to Mumbai to further her modeling career. Sharma says she originally wished to make it big in the modeling world but had no strong aspirations for films. She began her modeling career at the Lakme Fashion Week as a model for Wendell Rodricks\'s Les Vamps Show and was picked to be Rodricks\'s finale model at the Spring Summer \'07 Collection. Since then she has done campaigns for Silk & Shine, Whisper, Nathella Jewelry and Fiat Palio.',
                'created_at' => '2017-02-09 09:05:28',
                'updated_at' => '2017-02-09 09:05:28',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'first_name' => 'Salman',
                'last_name' => 'Khan',
                'gender' => 1,
                'born_date' => '1965-12-27',
                'people_image' => NULL,
            'people_description' => 'Born on December 27, 1965 Salman Khan is the son of the legendary writer Salim Khan, who penned many super-hits in the yesteryear\'s like Sholay (1975), Deewaar (1975), and Don (1978). Salman started his acting carrier in 1988 by doing a supporting role in the movie Biwi Ho To Aisi (1988). The following year he had the leading role in the box office romantic hit Maine Pyar Kiya (1989). From there he became a heart throb of Indian cinema.

Following with other box office hits he showed his terrific performance in Saajan (1991), Andaz Apna Apna (1994), Hum Aapke Hain Koun...! (1994), Karan Arjun (1995), Khamoshi: The Musical (1996), Kuch Kuch Hota Hai (1998). His transformations can be sensitive, vulnerable, funny, aggressive and charming as his role demands.

In 1998 he was arrested by the local police from the shooting location of the film Hum Saath-Saath Hain: We Stand United (1999), for killing protected wild animals and spent about a week behind the bars. The actor is facing trial in three cases of killing black bucks and Chinkaras and another of illegal possession of arms. In September 2002, Salman Khan had hit the headlines after he crashed his Land Cruiser near the American Express bakery in Bandra, killing one man and injuring others.

Being known for those roguish behaviors, he tried to balance his troubled life with his career. In 2003, he gave his emotionally charged performance as playing an obsessed lover in Tere Naam (2003) that translated into good reviews and a good run at the box office. He not only managed to revive his career, but also to restore the confidence of his producers and distributors alike.',
                'created_at' => '2017-02-09 09:07:52',
                'updated_at' => '2017-02-09 09:07:52',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'first_name' => 'Vidyut ',
                'last_name' => 'Jamwal ',
                'gender' => 1,
                'born_date' => '1989-02-01',
                'people_image' => NULL,
                'people_description' => 'Vidyut Jamwal is a model-turned-actor.

Not only is he a model who has walked the ramp many a times but also a trained gymnast and a martial arts fighter. Vidyut Jamwal has developed his own unique style which is an amalgamation of Kalari, gymnastics, Kung Fu, weapon usage and jiu-jitsu.',
                'created_at' => '2017-02-13 10:09:01',
                'updated_at' => '2017-02-13 10:09:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}