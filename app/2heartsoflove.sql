-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 02:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2heartsoflove`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `pix` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `cat_id`, `title`, `body`, `approved`, `pix`, `date`, `deleted`) VALUES
(1, 1, 1, 'Roboto expelld from premire leage', 'kingly edited Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque officiis nihil id? In optio suscipit impedit neque magni laudantium, vero harum obcaecati ipsam ullam at ad accusantium assumenda? Quos, quibusdam nisi placeat qui iure asperiores aliquam omnis facere. Reiciendis iste voluptate est vel impedit exercitationem harum voluptates optio distinctio obcaecati! Autem nulla, molestias, vero cumque dolorem minima voluptates excepturi laudantium sequi laboriosam fugit commodi dolorum neque officia, nam laborum odio nisi. Repudiandae repellendus illum nam, fuga soluta reprehenderit, beatae recusandae dolor obcaecati, libero fugit perspiciatis doloribus. Iure, laudantium! Ipsam repudiandae reprehenderit illo nisi impedit. Beatae qui architecto id blanditiis excepturi aliquid, quibusdam, amet laudantium reprehenderit recusandae labore? Reiciendis praesentium labore at maiores sit sint, esse minima ut enim impedit aliquam officiis voluptas. Corporis neque tempore est quia, minima, totam debitis molestias pariatur nesciunt quos labore veniam aut, dolore repudiandae. Repellendus unde a nostrum! Rerum ex nobis ducimus perspiciatis rem sequi. Eius libero at consequatur ea reprehenderit numquam voluptate odit, corporis dolores cumque voluptatem alias. Deserunt quidem dolorem quia porro voluptatibus esse ea labore quibusdam tempore hic. Doloribus ex beatae doloremque quidem, minima eligendi nobis eveniet eos magnam eaque consequuntur maiores, neque quibusdam aperiam delectus corrupti unde nulla velit repellendus.', 0, 'uploads/blogs/vlcsnap-2020-07-25-23h49m44s947.png', '2021-03-14 23:45:55', 1),
(2, 1, 1, 'Education', 'blog information detail', 0, 'uploads/blogs/imagdes.jpg', '2021-03-14 23:44:05', 0),
(3, 1, 3, 'Football News', 'bloging bloging bloging bloging', 0, 'uploads/blogs/imxages.jpg', '2021-03-14 23:46:08', 1),
(4, 1, 3, 'Health And Fitness', 'ello ello you kno ate ccoking', 0, 'uploads/blogs/vlcsnap-2021-02-01-05h05m24s380.png', '2021-03-14 23:46:08', 1),
(5, 1, 1, 'Roboto expelld from premire leage', '&lt;h2&gt;&lt;span style=&quot;font-size:20px&quot;&gt;&lt;span style=&quot;font-family:Comic Sans MS,cursive&quot;&gt;&lt;strong&gt;blog intel&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;u&gt;Many years ago, when computers &lt;/u&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n', 0, 'uploads/blogs/vlcsnap-2020-07-25-23h49m44s947.png', '2021-03-17 22:12:38', 0),
(6, 1, 1, 'Health And Fitness', '&lt;p&gt;fitne a i&amp;nbsp; a aying befor ei a geame of nte ton folling trecent developement&lt;/p&gt;\r\n', 0, 'uploads/blogs/imagdes.jpg', '2021-03-26 00:53:18', 0),
(7, 1, 1, 'Education', '&lt;p&gt;blogign&lt;/p&gt;\r\n', 0, 'uploads/blogs/king2.jpg', '2021-03-29 13:29:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `backgroundColor` varchar(20) DEFAULT NULL,
  `borderColor` varchar(20) DEFAULT NULL,
  `allDay` varchar(7) NOT NULL DEFAULT 'false',
  `url` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start`, `end`, `backgroundColor`, `borderColor`, `allDay`, `url`, `date`) VALUES
(8, 'today', 'Tue Mar 23 2021 01:00:00 GMT+0100 (West Africa Standard Time)', 'Thu Mar 25 2021 05:30:00 GMT+0100 (West Africa Standard Time)', '#00c0ef', '#00c0ef', '', NULL, '2021-03-20 23:00:49'),
(14, 'Football News', 'Mon Mar 22 2021 01:00:00 GMT+0100 (West Africa Standard Time)', 'Thu Mar 25 2021 01:00:00 GMT+0100 (West Africa Standard Time)', '#008000', '#008000', '', NULL, '2021-03-21 22:31:56'),
(15, 'Roboto expelld from premire leage', 'Thu Mar 04 2021 01:00:00 GMT+0100 (West Africa Standard Time)', 'Thu Mar 04 2021 02:00:00 GMT+0100 (West Africa Standard Time)', '#00c0ef', '#00c0ef', '', NULL, '2021-03-21 22:35:07'),
(16, 'Education', 'Sun Mar 21 2021 01:00:00 GMT+0100 (West Africa Standard Time)', 'Sun Mar 21 2021 01:00:00 GMT+0100 (West Africa Standard Time)', '#fa3605', '#fa3605', '', NULL, '2021-03-21 22:36:48'),
(18, 'Religion', 'Thu Mar 11 2021 01:00:00 GMT+0100 (West Africa Standard Time)', 'Sat Mar 13 2021 01:00:00 GMT+0100 (West Africa Standard Time)', '#00c0ef', '#00c0ef', '', NULL, '2021-03-21 22:49:15'),
(19, 'Health And Fitness', 'Tue Mar 09 2021 02:00:00 GMT+0100 (West Africa Standard Time)', 'Wed Mar 10 2021 02:00:00 GMT+0100 (West Africa Standard Time)', 'rgb(137, 72, 234)', 'rgb(137, 72, 234)', '', NULL, '2021-03-21 22:50:31'),
(20, 'Football', 'Wed Mar 31 2021 04:00:00 GMT+0100 (West Africa Standard Time)', 'Thu Apr 01 2021 04:00:00 GMT+0100 (West Africa Standard Time)', 'rgb(0, 192, 239)', 'rgb(0, 192, 239)', '', NULL, '2021-03-22 21:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(10) NOT NULL DEFAULT 'blog',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `status`, `type`, `date`) VALUES
(1, 'Football News', 1, 'blog', '2021-03-13 23:55:30'),
(3, 'Religion', 1, 'blog', '2021-03-14 00:02:16'),
(11, 'Photo Gallery', 1, 'main_media', '2021-03-25 00:04:09'),
(12, 'Video Clip', 1, 'main_media', '2021-03-25 00:06:46'),
(13, 'Audio Clip', 1, 'main_media', '2021-03-25 00:07:01'),
(14, 'Live Stream', 1, 'main_media', '2021-03-25 00:07:19'),
(15, 'Youtube Video', 1, 'main_media', '2021-03-25 00:07:48'),
(16, 'December Crusade Videos', 1, 'sub_media', '2021-03-25 00:25:58'),
(17, 'sunday Programe events', 1, 'sub_media', '2021-03-25 00:28:56'),
(21, 'word Of God / Sermon', 1, 'sub_media', '2021-03-25 00:31:31'),
(22, 'Outing Programes', 1, 'sub_media', '2021-03-25 00:32:00'),
(23, 'Thursday Programes', 1, 'sub_media', '2021-03-25 00:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `pix` varchar(250) NOT NULL,
  `type` varchar(10) DEFAULT 'Grand',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `social_media` text DEFAULT NULL,
  `privacy_policy` text DEFAULT NULL,
  `terms_of_use` text DEFAULT NULL,
  `cookie_policy` text DEFAULT NULL,
  `programe_days` text DEFAULT NULL,
  `sliders` text DEFAULT NULL,
  `branches` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `about_org` mediumtext DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `logo`, `email`, `phone`, `social_media`, `privacy_policy`, `terms_of_use`, `cookie_policy`, `programe_days`, `sliders`, `branches`, `address`, `website`, `about_org`, `date`) VALUES
(1, 'Set me up !!!', 'uploads/comp_info/logo1.jpg', '', '', '{\"facebook\":\"heartsoflove@facebook.com\",\"instagram\":\"heartsoflove@instagram.com\",\"whatsapp\":\"heartsoflove@whatsapp.com\",\"youtube\":\"heartsoflove@youtube.com\"}', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, facere aut laborum in dignissimos placeat ipsa numquam iste quod beatae suscipit animi atque autem fugit aspernatur odio voluptas, enim hic ab? Porro minima laboriosam dignissimos voluptates nostrum harum eius obcaecati, minus alias illum esse non amet dolore assumenda nobis ducimus at magni ipsam qui est provident. Adipisci dolorum ea non ipsam nobis consequatur? Ipsam perferendis consectetur ad sint molestias debitis amet, tenetur maxime consequuntur minima quibusdam placeat voluptatibus facilis odio necessitatibus itaque nostrum mollitia. Sit fugit ut nulla vero? Possimus beatae itaque distinctio qui? Reprehenderit quidem mollitia iusto et sed?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, facere aut laborum in dignissimos placeat ipsa numquam iste quod beatae suscipit animi atque autem fugit aspernatur odio voluptas, enim hic ab? Porro minima laboriosam dignissimos voluptates nostrum harum eius obcaecati, minus alias illum esse non amet dolore assumenda nobis ducimus at magni ipsam qui est provident. Adipisci dolorum ea non ipsam nobis consequatur? Ipsam perferendis consectetur ad sint molestias debitis amet, tenetur maxime consequuntur minima quibusdam placeat voluptatibus facilis odio necessitatibus itaque nostrum mollitia. Sit fugit ut nulla vero? Possimus beatae itaque distinctio qui? Reprehenderit quidem mollitia iusto et sed?', NULL, '{\"1615518354\":{\"csrf_token\":\"yptmaCHluAUXo1GorHOQxLxqIuskMYwD45AFdokiue4=\",\"programe_title\":\"Ministration and Prayer Session\",\"programe_day\":\"Thr\",\"programe_time\":\"12:01\",\"am_pm\":\"Am\",\"programe_location\":\"Ukana\",\"index\":\"1615518354\"},\"1615518393\":{\"csrf_token\":\"8nvZydH12ZfCailRFjP3krJVfadkHrXhxtl6PwXtQiY=\",\"programe_title\":\"Deliverance Session\",\"programe_day\":\"Sun\",\"programe_time\":\"11:00\",\"am_pm\":\"Am\",\"programe_location\":\"Ugwu di nso\",\"index\":\"1615518393\"},\"1616095323\":{\"csrf_token\":\"CiySLVF+uz0E7w06qWaCdUs\\/QIU8Ygv1evMmOPuNafc=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095323\"},\"1616095326\":{\"csrf_token\":\"diY5J7tzXJ2pgaU8IVDCI4YvlV6KyE05g1dUkreKh+0=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095326\"},\"1616095328\":{\"csrf_token\":\"cAQWFwzsvrpkolxO6igE\\/qacCY57\\/BUq+quK5SpJ464=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095328\"},\"1616095329\":{\"csrf_token\":\"oUuqul0fSD93ThZg128mLxQ977lmDHFTP8p8sv\\/WNWI=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095329\"},\"1616095331\":{\"csrf_token\":\"fd4CXswDip8j\\/\\/WcIzsIza8gclilfmB9r+7Glm89Yj0=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095331\"},\"1616095333\":{\"csrf_token\":\"1U1RJH3PCwmsQNqBr4gLjJvP3lob\\/IKJ4tiA8i6jmKA=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095333\"},\"1616095335\":{\"csrf_token\":\"AfpGC1IQWlzmox6qaMUHHBG6248\\/EWhoaW00NFs83JM=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095335\"},\"1616095337\":{\"csrf_token\":\"obNurmVI\\/BEk5CNi2rHqYpk0suFnT3GTaKYZwoTLLBI=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095337\"},\"1616095339\":{\"csrf_token\":\"pGsQrpuCaIUM89hQofhfjNj1c9Jgh0E+CBmpqYPoTIQ=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095339\"},\"1616095340\":{\"csrf_token\":\"Tl2PL60EvPbicSGfogjfb\\/c0DggdJmFc3c9iKaTPi9o=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095340\"},\"1616095342\":{\"csrf_token\":\"NjrNlYsKklhfGhOXQ4njSRcmrM00YMU8IvOMaIHC2ME=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095342\"},\"1616095344\":{\"csrf_token\":\"Escl4Gv9qWJ4J7Zbzp7aCyK6Vb\\/\\/\\/VVC\\/GUHlQIg5vE=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095344\"},\"1616095346\":{\"csrf_token\":\"e6E+2WyrCDm72adxEelWnk3ZUG5ZRC2g3ZTg3o+H6sM=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095346\"},\"1616095347\":{\"csrf_token\":\"Kq+zl85hrte7O+DoRnSi7YeROG5ZiTgOB2FZaxhkH0M=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095347\"},\"1616095349\":{\"csrf_token\":\"SMSdKe8tQic1WSVo3jV3cMDw4zFQD9sW0E+EmI26UcM=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095349\"},\"1616095351\":{\"csrf_token\":\"Hnz4BPL7+0S8JArGWx5lmVzTzyDmQhyyuC9d4tH1z40=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095351\"},\"1616095353\":{\"csrf_token\":\"el\\/o5Omx\\/ZK8dDTJpn3QYKv8ur\\/MBLcz8VK29aRIlVA=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095353\"},\"1616095354\":{\"csrf_token\":\"X3CMDJgSPpv25XEx+0PbKiXDNc3js2b99J8WYnEIRpo=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095354\"},\"1616095356\":{\"csrf_token\":\"GdRvIxmRPoXoP8TyrSjBs21S1nDLpYxKStRyEvgHrTU=\",\"programe_title\":\"\",\"programe_day\":\"Mon\",\"programe_time\":\"\",\"am_pm\":\"Am\",\"programe_location\":\"\",\"index\":\"1616095356\"}}', '{\"uploads/sliders/proposed_2hearts_building_interior.png\":{\"leadh\":\"h1\",\"leadht\":\"TWO HEARTS OF LOVE\",\"subh\":\"h6\",\"subht\":\"Deliverance ministry Enugu Nigeria\",\"addOverlay\":\"on\",\"animation\":\"animation: scale\"},\"uploads/sliders/vlcsnap-2021-02-01-05h05m58s244.png\":{\"leadh\":\"h1\",\"leadht\":\"TWO HEARTS OF LOVE\",\"subh\":\"h6\",\"subht\":\"Deliverance ministry Enugu Nigeria Second Slider Package\",\"addOverlay\":\"on\",\"animation\":\"animation: scale\"},\"uploads/sliders/013118_womens_department_page_hero_desk_to_dinner_dresses.jpg\":{\"leadh\":\"h1\",\"leadht\":\"TWO HEARTS OF LOVE\",\"subh\":\"h5\",\"subht\":\"Deliverance ministry Enugu Nigeria 3rd Slider Package\",\"addOverlay\":\"on\",\"animation\":\"animation: push\"},\"uploads/sliders/vlcsnap-2021-02-01-05h05m50s776.png\":{\"leadh\":\"h2\",\"leadht\":\"TWO HEARTS OF LOVE\",\"subh\":\"h4\",\"subht\":\"Deliverance ministry Enugu Nigeria 4th Slider Package\",\"addOverlay\":\"on\",\"animation\":\"animation: fade\"}}', '{\"1615517021\":{\"csrf_token\":\"HLhl+WcoeTx3f0jmURap0Le6KvHFsHpGiAMd4qHobj0=\",\"branch_location\":\"comprehensive high school\",\"b_community\":\"\",\"b_state\":\"\",\"b_country\":\"\",\"location_type\":\"Headquaters\",\"index\":\"1615517021\"},\"1615517497\":{\"csrf_token\":\"MBfNSQXL85UbYGwKp2QRHEbLlxoBILrp25\\/kLD+uYfw=\",\"branch_location\":\"\",\"b_community\":\"Ukana, ijebogene\",\"b_state\":\"\",\"b_country\":\"\",\"location_type\":\"Headquaters\",\"index\":\"1615517497\"},\"1615517504\":{\"csrf_token\":\"uQ+ZWQbyc2jEcw5LVKZMkmtgq3k7MDoco8Uc1fqa0mQ=\",\"branch_location\":\"Obodo Agu, ukana\",\"b_community\":\"\",\"b_state\":\"\",\"b_country\":\"\",\"location_type\":\"Headquaters\",\"index\":\"1615517504\"}}', 'comprehensive High School Ukana', 'https://2heartsoflove.com', '&lt;h1 style=&quot;margin-left:240px&quot;&gt;&lt;span style=&quot;font-family:Comic Sans MS,cursive&quot;&gt;&lt;strong&gt;Many years ago, &lt;/strong&gt;&lt;/span&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;&lt;u&gt;when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/u&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n\r\n&lt;p&gt;Many years ago, when computers supported maximum 256 different colors, a list of 216 &amp;quot;Web Safe Colors&amp;quot; was suggested as a Web standard (reserving 40 fixed system colors).&lt;/p&gt;\r\n\r\n&lt;p&gt;This is not important now, since most computers can display millions of different colors.&lt;/p&gt;\r\n\r\n&lt;p&gt;This 216 hex values cross-browser color palette was created to ensure that all computers would display the colors correctly when running a 256 color palette:&lt;/p&gt;\r\n', '2021-02-16 23:33:56'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-17 00:04:06'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-17 20:33:41'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-17 20:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `subject`, `body`, `date`) VALUES
(1, 'chijioke', 'chijioke', 'chijioke@gmail.com', 'making cantact', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, magnam minima suscipit placeat ipsum illo molestias, natus nam possimus vitae eos \r\n\r\nrerum sunt iure atque ratione voluptates? Aut natus similique voluptas hic. Cum reprehenderit praesentium maiores tempore officiis cupiditate \r\nsapiente consequatur? Consequatur hic, natus quas fuga voluptates corrupti nemo, voluptate ad quos, explicabo praesentium pariatur\r\n\r\n eos adipisci eum enim architecto assumenda libero repellat eius facilis! Veniam libero consequuntur aspernatur illo voluptas? Possimus inventore, accusamus eum quidem ea, illo delectus laudantium voluptatem optio sequi \r\n\r\ndebitis consequuntur asperiores quod molestiae. \r\nLaudantium aliquam unde quas ut vero? In perferendis consequuntur alias iste ex.', '2021-01-14 03:37:55'),
(2, 'solomoney', 'chijioke', 'solomonking284@gmail.com', 'making cantact again', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, magnam minima suscipit placeat ipsum illo molestias, natus nam possimus \r\nvitae eos rerum sunt iure atque ratione voluptates? Aut natus similique voluptas hic. Cum reprehenderit praesentium maiores tempore officiis\r\n cupiditate sapiente consequatur? Consequatu\r\nr hic, natus quas fuga voluptates\r\n\r\n corrupti nemo, voluptate ad quos, explicabo praesentium pariatur eos adipisci eum enim architecto assumenda libero repellat eius facilis! Veniam libero consequuntur aspernatur illo voluptas? Possimus inventore, accusamus\r\n eum quidem ea, illo delectus laudantium\r\n voluptatem optio sequi debitis\r\n\r\n consequuntur asperiores quod molestiae.\r\n Laudantium aliquam unde quas ut vero? In perferendis consequuntur alias iste ex.', '2021-01-14 03:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `giving_to` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `email`, `giving_to`, `amount`, `note`, `status`, `date`, `deleted`) VALUES
(1, 'king@gmail.com', 'tithe', '50000.00', 'my tithe for the month', 0, '0000-00-00 00:00:00', 1),
(2, 'king@gmail.com', 'tithe', '50000.00', 'my tithe for the month', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_news`
--

CREATE TABLE `event_news` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `pix` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `venue` varchar(250) DEFAULT NULL,
  `type` varchar(10) DEFAULT 'Event',
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_news`
--

INSERT INTO `event_news` (`id`, `title`, `description`, `pix`, `video`, `venue`, `type`, `event_date`, `event_time`, `date`) VALUES
(4, 'Education', '&lt;p&gt;1eqdAD&lt;/p&gt;\r\n', 'assets/logo/deafult_baner_image.jpg', NULL, 'Nineth mile cornner Ngwo', 'News', '2021-03-24', '11:11:00', '2021-03-22 22:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `fund_categories`
--

CREATE TABLE `fund_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `account_no` int(11) NOT NULL,
  `parent` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund_categories`
--

INSERT INTO `fund_categories` (`id`, `title`, `account_no`, `parent`) VALUES
(1, 'Tithe', 123567890, 0),
(2, 'Project Support', 1231257890, 0),
(3, 'Permanent Site Construction', 1235678908, 2),
(5, 'Charity', 2147483647, 0),
(6, 'Sowing Of Seed ', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `media_date` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `cat_id`, `sub_cat_id`, `title`, `description`, `media`, `media_date`, `date`, `deleted`) VALUES
(3, 14, 16, 'Roboto expelld from premire leage', 'media Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam minima quae magnam dolores! Molestiae pariatur labore libero, alias, vitae recusandae placeat quo sint ipsum quos cumque atque architecto nesciunt rerum fuga blanditiis sequi mollit', 'uploads/media/vlcsnap-2021-02-01-05h05m24s380.png', '2021-03-28', '2021-03-28 01:48:46', 0),
(4, 11, 22, 'title of this media', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sunt nulla sequi, laudantium, perspiciatis eos praesentium ad impedit molestias veritatis magnam fuga et sapiente quos sint necessitatibus consectetur accusamus atque quisquam eius ipsam', 'uploads/media/proposed_2hearts_building_interior.png', '2021-03-29', '2021-03-29 12:47:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prayerrequests`
--

CREATE TABLE `prayerrequests` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prayerrequest` text NOT NULL,
  `acknowledge` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `testimony` text NOT NULL,
  `regular_member` tinyint(1) NOT NULL DEFAULT 0,
  `include_in_website` tinyint(1) NOT NULL DEFAULT 0,
  `include_name` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pix` varchar(100) DEFAULT NULL,
  `acl` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `access` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `phone`, `address`, `pix`, `acl`, `status`, `access`, `deleted`) VALUES
(1, 'admin', 'admin', 'administrator', '$2y$10$hxltitZRHZm1TDYCgxVbZ.LZ8PsZR6hGDwkVF7yZ1L1FsM3C8ccH.', 'email@admin.com', NULL, NULL, NULL, NULL, 1, 5, 0),
(2, 'solomoney', 'king', 'solomoney', '$2y$10$kvRyfPybhCoVg.GHaj3OgerszsKomYlXgpTOFgJoF4vAF9hQGewqm', 'solomoney@gmail.com', NULL, NULL, NULL, NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(6) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`id`, `user_id`, `session`, `user_agent`) VALUES
(16, 1, '2a50e3b61d7da907adce74114394ccc3', 'Mozilla.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko Firefox.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_news`
--
ALTER TABLE `event_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_categories`
--
ALTER TABLE `fund_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayerrequests`
--
ALTER TABLE `prayerrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_news`
--
ALTER TABLE `event_news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fund_categories`
--
ALTER TABLE `fund_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prayerrequests`
--
ALTER TABLE `prayerrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
