-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 12:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre_type`, `genre_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Western', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-01-24 03:34:57', '2017-01-24 03:34:57', NULL),
(2, 'Drama', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-01-24 03:37:02', '2017-01-24 03:37:02', NULL),
(3, 'Comedy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-01-24 03:37:14', '2017-01-24 03:37:14', NULL),
(4, 'Horror', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-01-24 03:37:27', '2017-01-24 03:37:27', NULL),
(5, 'Historical', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-01-25 06:04:22', '2017-02-12 23:43:06', NULL),
(6, 'Romentic', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-01-31 00:11:43', '2017-02-12 23:43:29', NULL),
(7, 'Musical', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-01-31 04:19:50', '2017-02-12 23:43:18', NULL),
(8, 'Action', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 02:00:15', '2017-02-09 02:00:15', NULL),
(9, 'Sports', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 02:11:06', '2017-02-09 02:11:06', NULL),
(10, 'Thriller', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 03:01:36', '2017-02-09 03:01:36', NULL),
(11, 'Crime', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 03:23:36', '2017-02-09 03:23:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_23_042357_create_movies_table', 1),
(4, '2017_01_23_042554_create_peoples_table', 1),
(5, '2017_01_23_042755_create_proffessions_table', 1),
(6, '2017_01_23_042941_create_genres_table', 1),
(7, '2017_01_23_043426_create_movie_peoples_table', 1),
(8, '2017_01_23_044157_create_movie_genres_table', 1),
(9, '2017_01_25_062702_create_movie_reviews_table', 1),
(10, '2017_02_14_053900_create_movie_language_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `running_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `image_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movie_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `language_id`, `title`, `running_time`, `release_date`, `image_file`, `movie_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Raees', '2h 35min', '2017-01-25', NULL, 'The film is set in the early 80''s and 90''s in Gujarat. The fictitious story of a man who builds an empire in the state of Gujarat, the only state that still follows prohibition. It''s a story about his rise and his relationships, which help him become the single most powerful man in the state. Written by RedChillies', '2017-01-23 04:04:59', '2017-02-14 00:54:56', NULL),
(2, 1, 'XXX: Return Of Xander Cage', ' 1h 47min', '2017-01-20', NULL, 'Extreme athlete turned government operative Xander Cage (Vin Diesel) comes out of self-imposed exile, thought to be long dead, and is set on a collision course with deadly alpha warrior Xiang (Donnie Yen) and his team in a race to recover a sinister and seemingly unstoppable weapon known as Pandora''s Box. Recruiting an all-new group of thrill-seeking cohorts, Xander finds himself enmeshed in a deadly conspiracy that points to collusion at the highest levels of world governments.', '2017-01-23 05:29:24', '2017-02-14 00:55:18', NULL),
(3, 2, 'Kaabil', '2h 35min', '2017-01-27', NULL, 'A blind man sets out to avenge the murder of his wife. ', '2017-01-31 00:05:38', '2017-02-14 00:54:41', NULL),
(4, 2, 'Goliyon Ki Rasleela Ram-Leela', '2h 30min', '2013-11-15', NULL, 'Ram and Leela, their love, lust and the drama afterwards. Modern adaptation of William Shakespeare''s ''Romeo & Juliet''. ', '2017-01-31 04:17:06', '2017-02-14 00:54:25', NULL),
(5, 2, 'Jolly LLB 2', '2h 20min', '2017-02-10', NULL, 'Jolly is a clumsy lawyer who is faced with representing the most critical court case of his career.', '2017-02-07 00:37:28', '2017-02-14 00:54:33', NULL),
(6, 1, '3 Idiots', '2h 50min', '2009-12-25', NULL, 'Two friends are searching for their long lost companion. They revisit their college days and recall the memories of their friend who inspired them to think differently, even as the rest of the world called them "idiots".', '2017-02-09 01:42:03', '2017-02-14 01:25:12', NULL),
(7, 2, 'Airlift', '2h 10min', '2016-01-22', NULL, 'It is in this scenario that Ranjit Katyal (played by Akshay Kumar), a wealthy and powerful Indian businessman, who has always seen himself as a Kuwaiti, rather than an Indian, realizes that he no longer wields any influence on the Iraqis, and that he and his family are in as much danger as anyone else. Ranjit unknowingly becomes the man who all 170,000 Indians look up to for getting them out safely from Kuwait. Airlift is the story of Indians stranded in Kuwait during this traumatic time. A story of how they, with the help of Ranjit Katyal, managed to survive the Iraqi invasion, and against all odds traveled a thousand kilometers across the border into Amman, Jordan. From Amman, 170,000 Indians were brought home by the largest and the most successful evacuation ever attempted by any country, in the history of the world. Over 59 days, the Indian government systematically flew over 488 Air India commercial flights into a war zone to evacuate all 170,000 Indians and safely bring them ... Written by T-Series', '2017-02-09 01:54:04', '2017-02-14 00:54:01', NULL),
(8, 2, 'M. S. Dhoni: The Untold Story', '3h 4min', '2016-09-30', NULL, 'Mahendra Singh Dhoni is a goalkeeper in school football team.Bannerjee a school cricket coach asks him to join his cricket team and practice daily with him for two hours time passes and he becomes a big state level cricketer but for a long time his luck doesn''t favor him to become a member of Indian Cricket team.Dhoni takes up a job in Indian Railways as a ticket checker and plays cricket for the railways after long wait of 4 years he gets selected in Indian Cricket team and turns to be one of the best cricketing captains in history of Indian Cricket.', '2017-02-09 02:07:12', '2017-02-14 00:54:48', NULL),
(9, 2, 'Rustom', '2h 28min', '2016-08-12', NULL, 'Naval officer Rustom Pavri returns from his posting and finds his wife Cynthia is away from home since last two days his marriages is on the rocks when he finds love letters in cupboard which indicates that Cynthia has found love in one of his friend Vikram Makhija an arrogant business tycoon ,Rustom then issues a pistol from Naval Ship''s Armory and shoots Vikram three times in his chest living him dead and surrender himself to senior inspector Vincent Lobo', '2017-02-09 03:01:16', '2017-02-14 00:55:03', NULL),
(10, 2, ' Sultan', '2h 50min', '2016-07-06', NULL, 'Sultan is a story of Sultan Ali Khan - a local wrestling champion with the world at his feet as he dreams of representing India at the Olympics. It''s a story of Aarfa - a feisty young girl from the same small town as Sultan with her own set of dreams. When the 2 local wrestling legends lock horns, romance blossoms and their dreams and aspirations become intertwined and aligned. However, the path to glory is a rocky one and one must fall several times before one stands victorious - More often than not, this journey can take a lifetime. Sultan is a classic underdog tale about a wrestler''s journey, looking for a comeback by defeating all odds staked up against him. But when he has nothing to lose and everything to gain in this fight for his life match... Sultan must literally fight for his life. Sultan believes he''s got what it takes... but this time, it''s going to take everything he''s got.', '2017-02-09 03:34:13', '2017-02-14 01:03:22', NULL),
(11, 2, 'Commando 2', '2h 38min', '2017-03-03', NULL, 'A man uses his combat skills to eradicate black money, which has been siphoned to banks abroad.', '2017-02-13 04:37:21', '2017-02-15 01:40:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genres`
--

CREATE TABLE `movie_genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_genres`
--

INSERT INTO `movie_genres` (`id`, `movie_id`, `genre_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, '2017-01-25 00:30:19', '2017-01-25 00:30:19', NULL),
(2, 1, 2, '2017-01-25 00:34:41', '2017-01-25 00:39:34', NULL),
(3, 2, 2, '2017-01-25 03:37:49', '2017-01-25 03:37:49', NULL),
(4, 1, 5, '2017-01-25 06:04:34', '2017-01-25 06:04:34', NULL),
(5, 3, 6, '2017-01-31 00:14:48', '2017-01-31 00:14:48', NULL),
(6, 4, 2, '2017-01-31 04:21:50', '2017-01-31 04:21:50', NULL),
(7, 4, 7, '2017-01-31 04:21:58', '2017-01-31 04:21:58', NULL),
(8, 4, 6, '2017-01-31 04:22:06', '2017-01-31 04:22:06', NULL),
(9, 5, 2, '2017-02-09 00:45:14', '2017-02-09 00:45:14', NULL),
(10, 5, 3, '2017-02-09 00:45:24', '2017-02-09 00:45:24', NULL),
(11, 6, 3, '2017-02-09 01:49:34', '2017-02-09 01:49:34', NULL),
(12, 6, 2, '2017-02-09 01:49:42', '2017-02-09 01:49:42', NULL),
(13, 7, 2, '2017-02-09 01:59:52', '2017-02-09 01:59:52', NULL),
(14, 7, 5, '2017-02-09 02:00:02', '2017-02-09 02:00:02', NULL),
(15, 7, 8, '2017-02-09 02:00:23', '2017-02-09 02:00:23', NULL),
(16, 8, 2, '2017-02-09 02:12:30', '2017-02-09 02:12:30', NULL),
(17, 8, 8, '2017-02-09 02:12:37', '2017-02-09 02:12:37', NULL),
(18, 8, 9, '2017-02-09 02:12:43', '2017-02-09 02:12:43', NULL),
(19, 9, 2, '2017-02-09 03:31:14', '2017-02-09 03:31:14', NULL),
(20, 9, 10, '2017-02-09 03:31:23', '2017-02-09 03:31:23', NULL),
(21, 9, 11, '2017-02-09 03:31:32', '2017-02-09 03:31:32', NULL),
(22, 10, 8, '2017-02-09 03:40:17', '2017-02-09 03:40:17', NULL),
(23, 10, 2, '2017-02-09 03:40:24', '2017-02-09 03:40:24', NULL),
(24, 10, 6, '2017-02-09 03:40:30', '2017-02-09 03:40:30', NULL),
(25, 11, 8, '2017-02-13 04:40:15', '2017-02-13 04:40:15', NULL),
(26, 11, 11, '2017-02-13 04:40:24', '2017-02-13 04:40:24', NULL),
(27, 11, 2, '2017-02-13 04:40:33', '2017-02-13 04:40:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_language`
--

CREATE TABLE `movie_language` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_language`
--

INSERT INTO `movie_language` (`id`, `lang_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', '2017-02-14 00:14:47', '2017-02-14 00:14:47', NULL),
(2, 'Hindi', '2017-02-14 00:14:54', '2017-02-14 00:14:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_peoples`
--

CREATE TABLE `movie_peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `people_id` int(10) UNSIGNED NOT NULL,
  `proffession_id` int(10) UNSIGNED NOT NULL,
  `name_in_movie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `character_in_movie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movie_people_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_peoples`
--

INSERT INTO `movie_peoples` (`id`, `movie_id`, `people_id`, `proffession_id`, `name_in_movie`, `character_in_movie`, `movie_people_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, 'Xender Cage', 'Main Role', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', NULL, '2017-02-13 04:28:12', NULL),
(2, 1, 2, 1, 'Raees', 'Lead Actor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', NULL, '2017-02-13 04:28:30', NULL),
(4, 2, 3, 1, 'jenny', 'Lead role', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2017-01-25 05:50:15', '2017-02-13 04:28:20', NULL),
(5, 1, 3, 1, 'laila', 'Dancer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2017-01-25 05:57:14', '2017-01-25 05:57:14', NULL),
(6, 1, 4, 1, 'Raju', 'Side role', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2017-01-25 05:57:44', '2017-01-25 05:57:44', NULL),
(7, 1, 4, 2, 'Producer', 'Producer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2017-01-25 06:00:21', '2017-01-31 00:52:30', NULL),
(8, 1, 5, 1, 'Gullu', 'Side role', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2017-01-25 06:01:03', '2017-01-25 06:01:03', NULL),
(9, 3, 6, 1, 'Rohan Bhatnagar', 'Lead role', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-01-31 00:13:19', '2017-01-31 00:13:19', NULL),
(10, 3, 7, 1, 'Supriya Bhatnagar', 'Lead actress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-01-31 00:14:03', '2017-01-31 00:14:03', NULL),
(11, 3, 8, 1, 'Madhavrao Shellar', 'cop', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-01-31 00:14:31', '2017-01-31 00:14:31', NULL),
(12, 4, 3, 1, 'Leela', 'Lead actress', 'Its a character played by Deepika Padukone in movie Goliyon ki Rasleela opposite Ranveer Singh', '2017-01-31 04:20:57', '2017-01-31 04:20:57', NULL),
(13, 4, 9, 1, 'Ram', 'Lead actor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2017-01-31 04:21:41', '2017-01-31 04:21:41', NULL),
(14, 5, 10, 1, 'Jolly', 'Lead Actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-07 00:48:39', '2017-02-07 00:48:39', NULL),
(15, 5, 11, 1, 'Pushpa Pandey', 'Lead actoress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-07 00:49:32', '2017-02-07 00:49:32', NULL),
(16, 5, 12, 1, 'Jagdish Tyagi', 'Side Role', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-07 00:50:18', '2017-02-07 00:50:18', NULL),
(17, 5, 12, 4, 'Jolly', 'Actor & Assistance Director', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-07 00:51:24', '2017-02-07 00:51:24', NULL),
(18, 6, 13, 1, 'Rancho Shamaldas Chanchad', 'Main Actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 01:48:14', '2017-02-09 01:48:14', NULL),
(19, 6, 14, 1, 'Farhan Qureshi', 'Co-actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 01:48:45', '2017-02-09 01:48:45', NULL),
(20, 6, 15, 1, 'Raju Rastogi', 'Co-actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 01:49:13', '2017-02-09 01:49:13', NULL),
(21, 7, 10, 1, 'Ranjit Katyal', 'Main Actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 01:59:03', '2017-02-09 01:59:03', NULL),
(22, 7, 16, 1, 'Amrita Katiyal', 'Main Actress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 01:59:32', '2017-02-09 01:59:32', NULL),
(23, 8, 17, 1, 'Mahendra singh dhoni', 'Main Actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 02:11:42', '2017-02-09 02:11:42', NULL),
(24, 8, 18, 1, 'Priyanka Jha', 'Main Actoress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 02:12:20', '2017-02-09 02:12:20', NULL),
(25, 9, 10, 1, 'Rustom Pavri', 'Main Actor', 'Naval officer Rustom Pavri returns from his posting and finds his wife Cynthia is away from home since last two days his marriages is on the rocks when he finds love letters in cupboard which indicates that Cynthia has found love in one of his friend Vikram Makhija an arrogant business tycoon ,Rustom then issues a pistol from Naval Ship''s Armory and shoots Vikram three times in his chest living him dead and surrender himself to senior inspector Vincent Lobo.', '2017-02-09 03:25:28', '2017-02-09 03:25:28', NULL),
(26, 9, 19, 1, 'Cynthia Pavri', 'Main Actor', 'Naval officer Rustom Pavri returns from his posting and finds his wife Cynthia is away from home since last two days his marriages is on the rocks when he finds love letters in cupboard which indicates that Cynthia has found love in one of his friend Vikram Makhija an arrogant business tycoon ,Rustom then issues a pistol from Naval Ship''s Armory and shoots Vikram three times in his chest living him dead and surrender himself to senior inspector Vincent Lobo', '2017-02-09 03:30:22', '2017-02-09 03:30:22', NULL),
(27, 10, 20, 1, 'Arefa Khan', 'Main Actress', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 03:38:43', '2017-02-09 03:38:43', NULL),
(28, 10, 21, 1, 'Sultan Ali Khan', 'Main Actor', 'Sultan is a story of Sultan Ali Khan - a local wrestling champion with the world at his feet as he dreams of representing India at the Olympics. It''s a story of Aarfa - a feisty young girl from the same small town as Sultan with her own set of dreams. When the 2 local wrestling legends lock horns, romance blossoms and their dreams and aspirations become intertwined and aligned. However, the path to glory is a rocky one and one must fall several times before one stands victorious - More often than not, this journey can take a lifetime. Sultan is a classic underdog tale about a wrestler''s journey, looking for a comeback by defeating all odds staked up against him. But when he has nothing to lose and everything to gain in this fight for his life match... Sultan must literally fight for his life. Sultan believes he''s got what it takes... but this time, it''s going to take everything he''s got.', '2017-02-09 03:39:34', '2017-02-09 03:39:34', NULL),
(29, 10, 21, 2, 'Producer', 'Producer', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 03:39:58', '2017-02-09 03:39:58', NULL),
(30, 11, 22, 1, 'commando', 'Main Actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-13 04:39:52', '2017-02-13 04:39:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_reviews`
--

CREATE TABLE `movie_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_description` text COLLATE utf8_unicode_ci NOT NULL,
  `helpful_count` int(11) NOT NULL,
  `unhelpful_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_reviews`
--

INSERT INTO `movie_reviews` (`id`, `movie_id`, `user_id`, `rating`, `rating_description`, `helpful_count`, `unhelpful_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 5, 'Lorem ipsum is simply dummy text', 10, 2, '2017-01-25 01:33:55', '2017-01-25 01:34:26', NULL),
(3, 1, 2, 4, 'Lorem ipsum is simply dummy text', 6, 3, '2017-01-25 05:01:13', '2017-01-25 05:01:13', NULL),
(4, 1, 1, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 4, 2, '2017-01-25 06:04:56', '2017-01-25 06:04:56', NULL),
(5, 3, 3, 4, 'If you''ve watched and liked Film''s trailer then you will get all expected things in Film just like me. Excellent Writing, High on Emotions, Good Direction, Heart Touching concept and last but not the least Kaabil hits your heart and melts it.', 6, 2, '2017-01-31 00:25:29', '2017-01-31 00:25:29', NULL),
(6, 3, 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 5, 5, '2017-01-31 02:24:41', '2017-01-31 02:24:41', NULL),
(7, 3, 2, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 8, 4, '2017-01-31 02:25:03', '2017-01-31 02:25:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `born_date` date NOT NULL,
  `people_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `people_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `first_name`, `last_name`, `gender`, `born_date`, `people_image`, `people_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vin', 'Diesel', 1, '1967-07-17', NULL, 'Vin Diesel was born Mark Sinclair in Alameda County, California, along with his fraternal twin brother, Paul Vincent. He was raised by his astrologer/psychologist mother, Delora Sherleen (Sinclair), and adoptive father, Irving H. Vincent, an acting instructor and theater manager, in an artist''s housing project in New York City''s Greenwich Village....', '2017-01-24 00:59:39', '2017-01-24 00:59:39', NULL),
(2, 'Shahrukh', 'Khan', 1, '1965-11-02', NULL, 'Sharukh Khan was born on 2 November 1965 in New Delhi, India. He married Gauri Khan on 25 October 1991. They have three children, son Aryan Khan (b. 1997), son AbRam (b.2013) and daughter Suhana (b. 2000). Khan started out his career by appearing in several television serials during 1988-1990.', '2017-01-24 01:08:50', '2017-01-24 01:08:50', NULL),
(3, 'Deepika', 'Padukone', 2, '1986-01-05', NULL, 'Deepika Padukone, born 5 January 1986 in Copenhagen, Denmark, is an Indian model & Actress. She is the daughter of former badminton Champion Prakash Padukone. Her mother tongue is Konkani. Deepika has a younger sister named Anisha. She has been modeling appearances in print and television advertising campaigns for Liril, Close-Up toothpaste', '2017-01-25 05:49:12', '2017-01-25 05:49:12', NULL),
(4, 'Nawazuddin', 'Siddiqui', 1, '1974-05-19', NULL, 'Nawazuddin Siddiqui (born 1974) also known as Nowaz is an Indian film actor who has appeared in some of Bollywood''s major films including, Black Friday (2004), New York (2009), Peepli Live (2010), Kahani (2012), Gangs of Wasseypur (2012) and Gangs of Wasseypur - Part 2 (2012). Early life and education Nawazuddin Siddiqui is from Budhana a small town', '2017-01-25 05:54:11', '2017-01-25 05:54:11', NULL),
(5, 'Gautam', 'Rode', 1, '2017-01-03', NULL, 'Gautam Rode is known for his work on Suryaputra Karn (2015), MahaKumbh (2014) and Agyaat (2009). ', '2017-01-25 05:56:16', '2017-01-25 05:56:16', NULL),
(6, 'Hrithik', 'Roshan', 1, '1974-01-10', NULL, 'Hrithik Roshan is an Indian actor who appears in Bollywood films. After having appeared in films as a child actor in the 1980s, Roshan made his film debut in a leading role in Kaho Naa... Pyaar Hai (2000) for which Roshan earned his Filmfare Awards for Best Actor and Best Male Debut. In 2001, he went on to appear in the melodrama Kabhi Khushi ', '2017-01-31 00:07:26', '2017-01-31 00:07:26', NULL),
(7, 'Yami', 'Gautam', 2, '1983-11-28', NULL, 'She received IIFA - Star Debut of the Year Award and Zee Cine - Best Female Debut Award for Vicky Donor. She has acted in Total Siyappa and Action Jackson in 2014 and, Badlapur in 2015 against Varun Dhawan. All these movies performed well at the box office. She has also acted in Telugu Movie Courier Boy Kalyan and Tamil movie Tamilselvanum', '2017-01-31 00:08:39', '2017-01-31 00:08:39', NULL),
(8, 'Ronit', 'Roy', 1, '1965-10-11', NULL, 'Ronit Roy was born on October 11, 1965 in Nagpur, Maharashtra, India as Ronit Bose Roy. He is an actor, known for Udaan (2010), Ugly (2013) and Adaalat (2010). He has been married to Neelam Singh since December 25, 2003. They have two children.', '2017-01-31 00:10:05', '2017-01-31 00:10:05', NULL),
(9, 'Ranveer', 'Singh', 1, '1985-07-06', NULL, 'Ranveer Singh is an Indian actor working in Bollywood. Born in Mumbai, India, Ranveer Singh had always wanted to be an actor since his childhood. However, during his college days he felt that the idea of acting was far-fetched and focused on creative writing. While pursuing his Bachelor of Arts degree from Indiana University (Bloomington)', '2017-01-31 04:18:28', '2017-01-31 04:18:28', NULL),
(10, 'Akshay', 'Kumar', 1, '1967-09-09', NULL, 'Akshay Kumar, born September 9, 1967, is an actor. He studied martial arts in Hong Kong. It was a student that suggested that he try modeling. Because of his success as model, he was offered films. Along with his good looks and excellent martial art skills, he was always the first choice to do adventurous movies. He does his own stunts in his films. His breakthrough performance was in Saugandh (1991). He was well known for his Khiladi series, an Indian version of James Bond, such as Mr. Bond (1992), Khiladi (1992), Main Khiladi Tu Anari (1994), Mr. & Mrs. Khiladi (1997) and Khiladi 420 (2000). He dated strings of his co-stars including Raveena Tandon, Shilpa Shetty, Pooja Batra and Rekha. His recent critically acclaimed performances include Airlift (2016), Baby (2015) and Rustom (2016).', '2017-02-07 00:40:22', '2017-02-09 04:36:31', NULL),
(11, 'Huma', 'Qureshi', 2, '1986-07-28', NULL, 'Huma Qureshi born and raised in Delhi. Her father is a famous restaurant owner called Saleem''s a chain of some 10 restaurants in Delhi. Her brother, Saqib Saleem is an actor and acted in Mujhse Fraaandship Karoge. In year 2011 an announcement was made that Huma would make her Bollywood debut in a movie too called Billa 2 but got delayed due to some unknown reason. However, a few months later, a new announcement came as she wasn''t part of the project and she has gotten her Bollywood debut, Anurag Kashyap''s Gangs of Wasseypur. Huma has a nice role in 2 parts of Gangs of Wasseypur.', '2017-02-07 00:42:52', '2017-02-07 00:42:52', NULL),
(12, 'Arshad', 'Warsi', 1, '1968-04-19', NULL, 'Arshad Warsi was born in Mumbai, India, and did his schooling at a boarding school, Barnes School, Deolali in Nashik district, Maharashtra. He was orphaned at the age of 14 and struggled for a living in Mumbai during his early days.\n\nFinancial circumstances forced Warsi to start work as a door-to-door cosmetics salesman at age 17. Later he worked in a photo lab. Meanwhile he had a keen interest in dancing and received an offer to join Akbar Sami''s Dance group in Mumbai, which started his dancing and choreographing career. He also assisted Mahesh Bhatt in Thikana (1987) and Kaash (1987). Then in 1991, he won the Indian dance competition, followed by the fourth prize in the Modern Jazz category in 1992 World Dance championship, London, at the age of 21. Soon, he started his own dance studio, ''Awesome'' with that money and also formed a dance troupe. It was here, his future wife, Maria Goretti, a St. Andrew''s College student joined him, before she became a VJ. He was also associated with English theater group in Mumbai, choreographing shows for Bharat Dabholkar and got an opportunity to choreograph the title track for the film, Roop Ki Rani Choron Ka Raja (1993).', '2017-02-07 00:45:04', '2017-02-07 00:45:04', NULL),
(13, 'Aamir', 'Khan', 1, '1965-11-16', NULL, 'Aamir was first introduced as a child artiste in the 1970''s hit Yaadon Ki Baaraat (1973) - he was the youngest child in the trio. He then concentrated on school and became a state tennis champion for Maharashtra. Aamir fell in love with the girl next door in the meantime. He proposed to her the day he turned 21, and she accepted. But apparently, there was opposition since she was from a Hindu family and he, from a devout Islamic one. So, they eloped, got married and returned to their homes. Aamir''s wife Reena even appears in the song "Papa Kehte Hain".', '2017-02-09 01:43:34', '2017-02-09 01:43:34', NULL),
(14, 'R', 'Madhavan', 1, '1970-06-01', NULL, 'Madhavan was born on June 1, 1970, in a Tamil-speaking family.\n\nAt the age of 18 his college entrusted him with the responsibility of representing India as a Cultural Ambassador to Canada.\n\nA year later he and three others from his college were sent to Britain as army cadets and received training in the royal army, navy, and Air Force.\n\nWhile conducting courses on public speaking, he met Saritha, an Air Hostess and both got 7 years later. Their first child, a son, Vedaant, was born in 2005.\n\nA vegetarian and animal lover he is a brand ambassador for PETA. He is fluent in English, Hindi, and Tamil.\n\nBefore making his appearance on the tinsel screen, he was popular on the idiot box on Sony''s Deal Ya No Deal (2005). Having done close to 1800 episodes of various soaps on varied National Networks, he subsequently also appeared as the main character in a mobile game.', '2017-02-09 01:45:04', '2017-02-09 01:45:04', NULL),
(15, 'Sharman', 'Joshi', 1, '1979-04-28', NULL, 'Sharman Joshi was born on April 28, 1979 in Bombay, Maharashtra, India. He is an actor, known for 3 Idiots (2009), Rang De Basanti (2006) and Ferrari Ki Sawaari (2012). He has been married to Prerna Chopra since 2000. They have three children.\nStarred in Mahesh Manjrekar''s shelved film " Sab Golmaal Hain". Co starring Sahil Khan and Prabhudevaa. The film was to be based on the Marathi play " All The Best" This was in 2003.The film was previously being made as " Raju Raja Ram" with Jackie Shroff, Govinda and Salman Khan. The film was eventually made as " Tom Dick and Harry " in 2006.\nStarred in Vimal Kumar''s shelved film " Hum Do Hamare Do" (2003). Starring Sharman Joshi, Saahil Khan.\nIn 1996, ABCL ( Amitabh Bachchan Corporation Limited) held a all India talent search contest called Star Track. 9 boys and girls were selected. Sharman Joshi and Narendra Jha were chosen out of millions of entrants.', '2017-02-09 01:47:01', '2017-02-09 01:47:01', NULL),
(16, 'Nimrat', 'Kaur', 2, '1986-02-12', NULL, 'Born in Rajasthan, Nimrat was brought up in an army environment, thus hopping from one city to other and from one school to other. After losing her father, during a counter-terrorist operation, at a very young age she moved to Noida in the north of India and went on to finish her remaining schooling from DPS Noida and studied for her Bachelor''s in Commerce from Sri Ram College of Commerce. Nimrat finally made the inevitable move to Mumbai in 2004 after graduating and forayed into the world of modeling and advertising. She first caught the eye with the Tera Mera Pyaar music video from Sony Music. Thereafter she went on to model for over 80 Indian and international television commercials and numerous print campaigns for brands like Asian Paints, ICICI, Videocon, Pantaloon, Samsung, Aircel and Cadbury.\n\nIn 2009 Nimrat started her stint with the stage acting with theatre veteran Sunil Shanbag in a musical at the Prithvi Theatre Festival. She went on to do many plays but the most acclaimed one was All About Women, where she was required to play four different characters ranging from the age of 25 to 85. Having completed close to 50 shows she earned herself a nomination at the Mahindra Excellence in Theatre Awards in the Best Actress category. Billed as one of the most promising theatre actors, Nimrat went on to work with stage stalwarts including Manav Kaul and recently won Best Actress award for her work in Akarsh Khurana''s Baghdad Wedding.', '2017-02-09 01:57:56', '2017-02-09 01:57:56', NULL),
(17, 'Sushant Singh', 'Rajput', 1, '1986-01-21', NULL, 'Sushant Singh Rajput is an Indian television and film actor. He is best known for playing the role of Manav in the ongoing TV series, Pavitra Rishta on Zee Tv. Having made his Bollywood debut with a blockbuster of a movie, Kai Po Che directed by Abhishek Kapoor which was adapted by Chetan Bhagat''s novel, The 3 Mistake of My Life, he has launched himself to soaring new heights in the film industry.', '2017-02-09 02:08:48', '2017-02-09 02:08:48', NULL),
(18, 'Disha', 'Patani', 2, '1992-06-13', NULL, 'Disha Patani was born on June 13, 1992 in Bareilly, Uttar Pradesh, India. She is an actress, known for Kung-Fu Yoga (2017), M.S. Dhoni: The Untold Story (2016) and Loafer (2015).', '2017-02-09 02:10:19', '2017-02-09 02:10:19', NULL),
(19, 'Ileana', 'D''Cruz', 2, '1987-11-01', NULL, 'She made her debut in the Telugu film Devadasu, which became the year''s first major commercial success. She debuted in Tamil with "Kedi".\n\nTelugu movie "Pokiri", which was one of the highest money grosser, set her in top slot actresses. She appeared in many commercially successful movies like Jalsa, Kick etc.\n\nShe made her debut in Bollywood with Anurag Basu''s Barfi! (2012) starring Ranbir Kapoor.', '2017-02-09 03:26:52', '2017-02-09 03:26:52', NULL),
(20, 'Anushka', 'Sharma', 2, '1988-05-01', NULL, 'Anushka Sharma was born on 1 May 1988 in Ayodhya, Uttar Pradesh. Her father, Colonel Ajay Kumar Sharma, is an army officer, and her mother, Ashima Sharma, is a homemaker. Her father is a native of Uttar Pradesh, while her mother is a Garhwali. Her elder brother is film producer Karnesh Sharma, who earlier served in the Merchant Navy. Prior to joining the navy, Karnesh played for the under-19 Bangalore Ranji cricket team. Sharma has stated that being a military brat played an important role in shaping her as a person and contributing to her life. In an interview with The Times of India in 2012, she said, "I take pride in saying that I am an army officer''s daughter even more than being an actor. She studied in Army School and graduated with specialization in arts from Mount Carmel College, Bangalore. She then moved to Mumbai to further her modeling career. Sharma says she originally wished to make it big in the modeling world but had no strong aspirations for films. She began her modeling career at the Lakme Fashion Week as a model for Wendell Rodricks''s Les Vamps Show and was picked to be Rodricks''s finale model at the Spring Summer ''07 Collection. Since then she has done campaigns for Silk & Shine, Whisper, Nathella Jewelry and Fiat Palio.', '2017-02-09 03:35:28', '2017-02-09 03:35:28', NULL),
(21, 'Salman', 'Khan', 1, '1965-12-27', NULL, 'Born on December 27, 1965 Salman Khan is the son of the legendary writer Salim Khan, who penned many super-hits in the yesteryear''s like Sholay (1975), Deewaar (1975), and Don (1978). Salman started his acting carrier in 1988 by doing a supporting role in the movie Biwi Ho To Aisi (1988). The following year he had the leading role in the box office romantic hit Maine Pyar Kiya (1989). From there he became a heart throb of Indian cinema.\n\nFollowing with other box office hits he showed his terrific performance in Saajan (1991), Andaz Apna Apna (1994), Hum Aapke Hain Koun...! (1994), Karan Arjun (1995), Khamoshi: The Musical (1996), Kuch Kuch Hota Hai (1998). His transformations can be sensitive, vulnerable, funny, aggressive and charming as his role demands.\n\nIn 1998 he was arrested by the local police from the shooting location of the film Hum Saath-Saath Hain: We Stand United (1999), for killing protected wild animals and spent about a week behind the bars. The actor is facing trial in three cases of killing black bucks and Chinkaras and another of illegal possession of arms. In September 2002, Salman Khan had hit the headlines after he crashed his Land Cruiser near the American Express bakery in Bandra, killing one man and injuring others.\n\nBeing known for those roguish behaviors, he tried to balance his troubled life with his career. In 2003, he gave his emotionally charged performance as playing an obsessed lover in Tere Naam (2003) that translated into good reviews and a good run at the box office. He not only managed to revive his career, but also to restore the confidence of his producers and distributors alike.', '2017-02-09 03:37:52', '2017-02-09 03:37:52', NULL),
(22, 'Vidyut ', 'Jamwal ', 1, '1989-02-01', NULL, 'Vidyut Jamwal is a model-turned-actor.\n\nNot only is he a model who has walked the ramp many a times but also a trained gymnast and a martial arts fighter. Vidyut Jamwal has developed his own unique style which is an amalgamation of Kalari, gymnastics, Kung Fu, weapon usage and jiu-jitsu.', '2017-02-13 04:39:01', '2017-02-13 04:39:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proffessions`
--

CREATE TABLE `proffessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `proffession_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proffession_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proffessions`
--

INSERT INTO `proffessions` (`id`, `proffession_type`, `proffession_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Actor', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-01-24 01:34:06', '2017-02-12 23:42:06', NULL),
(2, 'Producer', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-01-24 01:34:17', '2017-02-12 23:42:21', NULL),
(3, 'Writer', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-01-24 01:34:27', '2017-02-12 23:42:31', NULL),
(4, 'Assistant Director', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-07 00:46:20', '2017-02-07 00:46:20', NULL),
(5, 'Director', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-07 00:46:52', '2017-02-07 00:46:52', NULL),
(6, 'Spot man', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2017-02-09 02:10:35', '2017-02-09 02:10:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=>admin, 0=>user',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sagar Patel', 'hello@byteparity.com', '$2y$10$fHfI246ac.PmzD/bllNzfOcDOoE9C0ZLhQgDeatPuy./yhIdwDWMa', 1, 'FVaIr9qNkEvMbRPLP4ostESLap0OKhMvY6vXnFq75MgYjTjs4ILS0phHcN3m', '2017-01-22 22:47:05', '2017-02-13 01:38:48', NULL),
(2, 'Rishikesh', 'rishi@test.com', '$2y$10$eyXI3lgOyWwvMvzz9CLt9eaqoe2.yMWYHH2z0tkiogY8qyF9xCdJ6', 0, NULL, '2017-01-22 23:25:56', '2017-01-22 23:25:56', NULL),
(3, 'Maneshwar Patel', 'manu@test.com', '$2y$10$axGL.anuGE6bhqtlW2b31.Sw/iPkQy4ypVJqMQXULctaPY4yvZywy', 0, NULL, '2017-01-31 00:24:04', '2017-01-31 00:24:04', NULL),
(4, 'yatin patel', 'y@p.com', '$2y$10$Sl9bTjAGozQerzEai8AV9OB9/L7H/iNZ4I88PUVKLpdV/Ypgwt86G', 0, NULL, '2017-02-07 04:18:48', '2017-02-07 04:18:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_genres`
--
ALTER TABLE `movie_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_genres_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_genres_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `movie_language`
--
ALTER TABLE `movie_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_peoples`
--
ALTER TABLE `movie_peoples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_peoples_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_peoples_people_id_foreign` (`people_id`),
  ADD KEY `movie_peoples_proffession_id_foreign` (`proffession_id`);

--
-- Indexes for table `movie_reviews`
--
ALTER TABLE `movie_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_reviews_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proffessions`
--
ALTER TABLE `proffessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `movie_genres`
--
ALTER TABLE `movie_genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `movie_language`
--
ALTER TABLE `movie_language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movie_peoples`
--
ALTER TABLE `movie_peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `movie_reviews`
--
ALTER TABLE `movie_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `proffessions`
--
ALTER TABLE `proffessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_genres`
--
ALTER TABLE `movie_genres`
  ADD CONSTRAINT `movie_genres_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `movie_genres_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movie_peoples`
--
ALTER TABLE `movie_peoples`
  ADD CONSTRAINT `movie_peoples_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_peoples_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `peoples` (`id`),
  ADD CONSTRAINT `movie_peoples_proffession_id_foreign` FOREIGN KEY (`proffession_id`) REFERENCES `proffessions` (`id`);

--
-- Constraints for table `movie_reviews`
--
ALTER TABLE `movie_reviews`
  ADD CONSTRAINT `movie_reviews_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
