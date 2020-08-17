-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 02:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms-masterr`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h3 style=\"text-align: center; \"><b style=\"\"><font face=\"Arial Black\" style=\"background-color: rgb(255, 255, 255);\" color=\"#ff0000\">صفحة من نحن</font></b></h3><h3 style=\"text-align: center; \"><b style=\"\"><font face=\"Arial Black\" style=\"background-color: rgb(255, 255, 255);\" color=\"#ff0000\">مرحبا بكم في موقعنا المميز</font></b></h3><h3 style=\"text-align: center; \"><b style=\"\"><font face=\"Arial Black\" style=\"background-color: rgb(255, 255, 255);\" color=\"#731842\">موقع التعليم الالكتروني</font></b></h3>', '2020-08-12 20:22:28', '2020-08-12 20:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `blog_image` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `published` tinyint(4) DEFAULT NULL,
  `slider_show` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `blog_image`, `description`, `details`, `published`, `slider_show`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Et dolores ut qui ut amet est.', '556x5nZH009iRcN0klHqY5KhNjNqqDtqv6LGOovy.jpeg', 'Nihil nam sit a quis. Expedita aut illum veritatis totam et recusandae sint. Est vero ipsum quia earum ab quae. Ab temporibus ipsa incidunt et labore.', 'Rerum eaque necessitatibus ea vel. Quae dolores quisquam ab optio expedita. Amet illo odit iure ipsum nihil cum. Voluptates voluptate sed dolores ut. Corrupti similique molestiae ipsam autem quisquam. Omnis maxime aut tempore rerum modi. Sit magnam id vitae nihil ipsa esse. Nam reprehenderit quia maiores provident eos. Similique omnis aliquam dolorem laudantium et quae. Commodi repellendus est quisquam explicabo. Sunt molestias nihil pariatur totam eos fugiat minus. Rerum dolor nemo dolor quae sunt. Quod sed amet repudiandae quidem et aut. Laudantium dignissimos assumenda quis officiis voluptatem inventore vitae. Dolor nobis iure expedita. Minima delectus consequatur eum consequatur vitae. Officiis natus qui quam. Eum possimus unde rem neque iste similique. Ea sint eligendi eligendi quas veniam ratione.', 0, 1, '2020-08-10 15:19:05', '2020-08-10 15:19:05', NULL),
(2, 'Rerum est in dicta.', '556x5nZH009iRcN0klHqY5KhNjNqqDtqv6LGOovy.jpeg', 'Ab nemo labore accusamus natus nesciunt dicta. Aut vitae ut iure. Ut quis hic adipisci et eligendi consequatur.', 'Velit ullam harum quo harum. Numquam ut sapiente tempora deserunt enim perspiciatis porro. Nesciunt provident tempore quas distinctio soluta perspiciatis. Asperiores aut provident praesentium odio cumque fuga porro. Quo nisi laborum itaque veritatis beatae reprehenderit nihil. Ex animi ea accusantium sint minus et. Explicabo maiores et rerum quia sit aut. Velit ea quae veniam omnis voluptas alias distinctio. Perspiciatis explicabo aut ipsum sunt et. Qui sint sunt explicabo nulla assumenda aut aut. Dolorem sit est et consequatur et beatae error nisi. Molestiae corporis nam tenetur laudantium reiciendis. Dignissimos animi numquam dolores est ex consequatur harum. Voluptates quaerat eligendi laboriosam id. Temporibus quas quasi sit molestiae dolor. Sunt iste in vitae et quae debitis eos. Eos et enim provident officia dolorem. Est unde expedita et. Distinctio illum ut qui. Consequuntur quam ut repellat qui sed sint id. Iusto qui neque enim voluptates temporibus enim.', 1, 1, '2020-08-10 15:19:05', '2020-08-10 15:19:05', NULL),
(9, 'How to create the perfect resume', '556x5nZH009iRcN0klHqY5KhNjNqqDtqv6LGOovy.jpeg', 'Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna.', 'Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna.\r\n\r\nLorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna.\r\n\r\nLorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna.', 1, 0, '2020-08-15 00:13:23', '2020-08-15 00:13:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 - disabled, 1 - enabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'IT Development', 'rsVO6EwfMDbEZwDdT1EaUY0DuaRKYU608oghzdck.jpeg', 'Lorem ipsum dolor sit amet, consectetur', 1, '2020-08-15 08:23:36', '2020-08-15 08:23:36', NULL),
(4, 'Web Design', 'sLBgzBXoRoOynXMP2OZmGIpMXY59LKS31lzInjkz.jpeg', 'Lorem ipsum dolor sit amet, consectetur', 1, '2020-08-15 08:24:17', '2020-08-15 08:24:17', NULL),
(5, 'Illustration & Drawing', 'Y3bW2S6hs5si1YUbtuP6RCPdW2MH9SV3JWTxsHL9.jpeg', 'Lorem ipsum dolor sit amet, consectetur', 1, '2020-08-15 08:25:46', '2020-08-15 08:25:46', NULL),
(6, 'Social Media', 'ZqUwtKzU4qtNpqKgJxhQTrFXmRrwYoKTGxAcry7x.jpeg', 'Lorem ipsum dolor sit amet, consectetur', 1, '2020-08-15 08:26:36', '2020-08-15 08:26:36', NULL),
(7, 'Photoshop', 'D7L8UKQnzfgyUAYkhcyb9vbqmOyXougtTwqLgdzA.jpeg', 'Lorem ipsum dolor sit amet, consectetur', 1, '2020-08-15 08:27:16', '2020-08-15 08:27:16', NULL),
(8, 'Cryptocurrencies', 'MvymVj08DSmwlK0BCRAN1yrOIiBx11ngEWldzyQB.jpeg', 'Lorem ipsum dolor sit amet, consectetur', 1, '2020-08-15 08:27:56', '2020-08-15 08:27:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`id`, `name`, `title`, `description`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Rasmy Adnan', 'Title', 'Description', 'ra@ra.com', '2020-08-12 23:42:24', '2020-08-12 23:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `published` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `teacher_id`, `title`, `description`, `course_image`, `start_date`, `published`, `created_at`, `updated_at`, `deleted_at`) VALUES
(26, 4, 10, 'AWS Certified Solutions Architect - Associate 2020', 'Note: Our course material, like the AWS certification exams, are continually evolving. This course covers all you need to know to pass the 2020 exam. Over half a million students have done our courses on Udemy. This course will be updated for free throughout 2020 and is the one stop shop for everything you need to pass the AWS Solutions Architect Associate exam.\r\n\r\nAre you looking for AWS Training?\r\n\r\nAmazon Web Services (AWS) Certification is fast becoming the must have certificates for any IT professional working with AWS. This course is designed to help you pass the AWS Certified Solutions Architect (CSA) - Associate Exam. Even if you have never logged in to the AWS platform before, by the end of our AWS training you will be able to take the CSA exam. No programming knowledge needed and no prior AWS experience required. With this AWS certification under your belt (and optionally after completing our AWS Certified Developer 2020 - also available on Udemy), you will be in high demand by many employers and you can command a superior salary. \r\n\r\n                        In this course we will start with a broad overview of the AWS platform and then deep dive into the individual elements of the AWS platform. You will explore Route53, EC2, S3, CloudFront, Auto Scaling, Load Balancing, RDS, RedShift, DynamoDB, EMR, VPC etc.\r\n\r\n  Read the fantastic reviews of our course! \r\n\r\n      Alex describes this course as \"The best course out there\" \r\n\r\n      Steve says the course was \"A God send\" \r\n\r\n      And Adam says \"You must take this course if you\'re taking the exam\" \r\n\r\n                        AWS are constantly evolving their platform, in 2019 there have been over 1500 new product releases. As 2020 progresses we will continuously update this course with new content so you will never have to worry about missing out or failing the AWS certification test because of new content. This is the best online AWS training available, at a great affordable rate.\r\n\r\n              Most lectures are 5 - 12 minutes long, with almost no lecture being over 20 minutes in length. I am an AWS Certified Solutions Architect, Developer and Systems Administrator living in London with over 17 years experience in IT. This course is cheaper than most other courses because I am not doing this as a full time job, rather because I love teaching cloud. So join me in becoming A Cloud Guru today and get your AWS Solutions Architect Associate qualification by completing our AWS online course today!', 'MJEnLYsm8p2HNAT8OIcH5TPW5k5Q3eSYZtfknIbY.jpeg', '2020-10-10', 1, '2020-08-16 13:55:49', '2020-08-16 13:55:55', NULL),
(27, 3, 10, 'Learn Ethical Hacking From Scratch', 'Welcome this comprehensive Ethical Hacking course! This course assumes you have NO prior knowledge in hacking and by the end of it you\'ll be able to hack systems like black-hat hackers and secure them like security experts!\r\n\r\nThis course is highly practical but it won\'t neglect the theory; we\'ll start with ethical hacking basics, breakdown the different penetration testing fields and install the needed software (on Windows, Linux and Mac OS X), then we\'ll dive and start hacking straight away. From here onwards you\'ll learn everything by example, by analysing and exploiting different systems such as networks, servers, clients, websites .....etc, so we\'ll never have any boring dry theoretical lectures.\r\n\r\nThe course is divided into a number of sections, each section covers a penetration testing / hacking field, in each of these sections you\'ll first learn how the target system works, the weaknesses of this system, and how to practically exploit theses weaknesses to hack into this system, not only that but you\'ll also learn how to secure systems from the discussed attacks. By the end of the course you will have a strong foundation in most hacking or penetration testing fields.\r\n\r\n\r\n\r\nThe course is divided into four main sections:   \r\n\r\n1. Network Hacking - This section will teach you how to test the security of both wired & wireless networks. First, you will learn network basics, how they work, and how devices communicate with each other. Then it will branch into three sub sections:   \r\n\r\nPre-connection attacks: in this subsection you\'ll learn a number of attacks that can be executed without connecting to the target network, and without the need to know the network password; you\'ll learn how to gather information about the networks around you, discover connected devices, and control connections (deny/allow devices from connecting to networks).\r\n\r\nGaining Access: Now that you gathered information about the networks around you, in this subsection you will learn how to crack the key and get the password to your target network weather it uses WEP, WPA or even WPA2.\r\n\r\nPost Connection attacks: Now that you have the key, you can connect to the target network, in this subsection you will learn a number of powerful techniques that allow you to gather comprehensive information about the connected devices, see anything they do on the internet (such as login information, passwords, visited urls, images, videos ....etc), redirect requests, inject evil code in loaded pages and much more! All of these attacks work against both wireless and wired networks. You will also learn how to create a fake WiFi network, attract users to connect to it and use all of the above techniques against the connected clients.', '20BE6kGLyOhqEuSGbbtvjo2KkjkIXU40IRW9hW4j.jpeg', '2020-10-02', 1, '2020-08-16 13:57:05', '2020-08-16 13:57:09', NULL),
(28, 3, 10, 'The Complete Ethical Hacking Course: Beginner to Advanced!', 'Gain the ability to do ethical hacking and penetration testing by taking this course! Get answers from an experienced IT expert to every single question you have related to the learning you do in this course including installing Kali Linux, using VirtualBox, basics of Linux, Tor, Proxychains, VPN, Macchanger, Nmap, cracking wifi, aircrack, DoS attacks, SLL strip, known vulnerabilities, SQL injections, cracking Linux passwords, and more topics that are added every month!\r\n\r\nIf you are like me, you are reading more now because you want to know for sure whether this course is worth taking before you invest your money and time in it. More than10,000 people have already completed the process of deciding to take this course and I hope sharing a few of their experiences can prove useful for you here. Here are what three recent students had to say in the reviews in their own words.', 'WSbq374TdR4GL9h7qPR2PcO9fDZn4dWtHXFwEWbQ.jpeg', '2021-02-02', 0, '2020-08-16 13:58:37', '2020-08-16 13:58:37', NULL),
(29, 4, 10, 'The Ultimate Drawing Course - Beginner to Advanced', 'Join over 260,000 learning student and start gaining the drawing skills you\'ve always wanted.\r\n\r\nThe Ultimate Drawing Course will show you how to create advanced art that will stand up as professional work. This course will enhance or give you skills in the world of drawing - or your money back\r\n\r\nThe course is your track to obtaining drawing skills like you always knew you should have! Whether for your own projects or to draw for other people.\r\n\r\nThis course will take you from having little knowledge in drawing to creating advanced art and having a deep understanding of drawing fundamentals.\r\n\r\nSo what else is in it for you?\r\n\r\nYou’ll create over 50 different projects in this course that will take you from beginner to expert!', '7hrJzMNk8xWxauyUTqOglnakK6fMT3GGpoFb7DWZ.jpeg', '2021-10-05', 0, '2020-08-16 14:00:38', '2020-08-16 14:00:38', NULL),
(30, 4, 10, 'Illustrator CC 2020 MasterClass', 'Udemy’s best-selling Illustrator course – by one of the Top 10 Adobe Instructors in the world – teaches you to use this industry-leading vector graphic application as a creative professional. The whole course content, including examples, techniques, exercises and quizzes have been carefully selected and refined to offer the most efficient and enjoyable way to master Adobe Illustrator.\r\n\r\nThis course has been purposely designed for users of all experiences, from complete beginners to existing Illustrator users, who want to take their skills to the next level. Being able to confidently work in Illustrator is an essential skill for any Graphic Designer or Illustrator, but it is an equally useful tool for Product Designers, Fashion Designers, UI/UX designers and various other areas within and outside of the creative industry.\r\n\r\n“The course has great content, well explained and having you feeling confident with the software at the end.”', '2xRoYpjH7SLt6UcL7Y6spO1kCpXQ9LowQgeq47H9.jpeg', '2021-03-03', 0, '2020-08-16 14:01:43', '2020-08-16 14:01:43', NULL),
(31, 4, 10, 'Ultimate Photoshop Training: From Beginner to Pro', '*** Updated for Photoshop CC 2020 ***\r\n\r\n- MASSIVE GIVEAWAY: OVER 250 PREMIUM PSD FILES FOR MY STUDENTS!\r\n- most of the course is recorded in CC 2020, but the material is version independent so you can user older ones without too many issues;\r\n- Mac hotkeys are now included;\r\n- cheat sheets so you can easily review the information;\r\n\r\nThis is the ultimate Photoshop training course that will take you from absolute beginner to proficient Photoshop user in no time at all.\r\n\r\nLearn how to use the program with ease while having fun!', 'VQyFCOZ5Vr46ISzemeWLAq2Isrq2Y7m3nNRV8xrG.jpeg', '2021-06-05', 1, '2020-08-16 14:02:40', '2020-08-16 15:52:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` int(11) NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 26, 28, NULL, NULL),
(3, 31, 28, '2020-08-16 16:46:45', '2020-08-16 16:46:45'),
(4, 31, 1, '2020-08-16 19:04:13', '2020-08-16 19:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `emailcreat`
--

CREATE TABLE `emailcreat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailcreat`
--

INSERT INTO `emailcreat` (`id`, `title`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'تجربة', 'تخزين', '2020-08-15 05:00:57', '2020-08-15 05:00:57'),
(2, 'jjhhjjh', 'mmnnm', '2020-08-15 05:36:26', '2020-08-15 05:36:26'),
(3, 'tit;', 'fdsfs', '2020-08-15 05:42:31', '2020-08-15 05:42:31'),
(4, 'tit;', 'fdsfs', '2020-08-15 05:42:54', '2020-08-15 05:42:54'),
(5, 'mn', 'kjh', '2020-08-15 05:46:38', '2020-08-15 05:46:38'),
(6, 'fddf', 'ff', '2020-08-15 05:48:45', '2020-08-15 05:48:45'),
(7, 'kjkj', 'jnd', '2020-08-15 05:49:18', '2020-08-15 05:49:18'),
(8, 'mmn', 'mnfdsf', '2020-08-15 05:55:16', '2020-08-15 05:55:16'),
(9, 'مرحبا بكم في موقع التعليم الالكتروني', 'نتشرف بزيارتكم وانضمامكم لموقعنا المتواضع\r\nدمتم بخير\r\n\r\nE-learning', '2020-08-16 04:18:04', '2020-08-16 04:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_vedio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloadable_files` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `lesson_image`, `files`, `url_vedio`, `short_text`, `full_text`, `downloadable_files`, `published`, `created_at`, `updated_at`, `deleted_at`) VALUES
(53, 31, 'llllllllllll', 'KFYiXnP68x1AQYBW3erCGiwEdkVufbVB2VKRPqW4.jpeg', '[\"qYqAzQBjnQ6hPv2yrhLORuMejbG5LT5w90lAFJVy.pdf\"]', 'https://dms.licdn.com/playlist/C5610AQE7LczwQdBy8Q/ads-video-crf-mp4_720P/0/comp_CONFORM_LINKEDIN_15_ALT_v010mp4?e=1597654800&v=beta&t=mAF14Xf5H7Xbtxwy-wOl71jD_680FytvrTS02nZsUVc', 'ddddddddddddddddd', 'ssssssssssssssssssssssss', NULL, 1, '2020-08-16 15:53:24', '2020-08-16 15:56:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_student`
--

CREATE TABLE `lesson_student` (
  `lesson_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('4593f73e-121c-4835-8598-50145fc2960e', 'App\\Notifications\\NewNotification', 'App\\User', 1, '{\"message\":\"\\u0642\\u0627\\u0645 \\u0645\\u062f\\u0631\\u0633 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0627\\u0644\\u062a\\u0633\\u062c\\u064a\\u0644\",\"link\":\"http:\\/\\/127.0.0.1:8050\\/admin\\/teachers\"}', '2020-08-16 17:37:28', '2020-08-16 08:16:29', '2020-08-16 08:16:29'),
('57bbd6fa-6b4c-4d5c-b5c7-8f453fbce6d4', 'App\\Notifications\\NewNotification', 'App\\User', 1, '{\"message\":\"test\",\"link\":\"http:\\/\\/localhost:8000\\/admin\\/teachers\"}', '2020-08-16 17:38:17', '2020-08-16 03:02:45', '2020-08-16 03:02:45'),
('92a8fabe-e919-45d2-8ef7-5b01c3f4e3e8', 'App\\Notifications\\NewNotification', 'App\\User', 1, '{\"message\":\"\\u0642\\u0627\\u0645 \\u0645\\u062f\\u0631\\u0633 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0627\\u0644\\u062a\\u0633\\u062c\\u064a\\u0644\",\"link\":\"http:\\/\\/localhost:8000\\/admin\\/teachers\"}', NULL, '2020-08-16 03:15:20', '2020-08-16 03:15:20'),
('990056cd-bfe6-46c5-9f38-2f860f597d2f', 'App\\Notifications\\NewNotification', 'App\\User', 1, '{\"message\":\"\\u0642\\u0627\\u0645 \\u0645\\u062f\\u0631\\u0633 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0627\\u0644\\u062a\\u0633\\u062c\\u064a\\u0644\",\"link\":\"http:\\/\\/127.0.0.1:8050\\/admin\\/teachers\"}', NULL, '2020-08-16 07:11:11', '2020-08-16 07:11:11'),
('aef3cb3d-1b79-4fd9-a8ed-d6db5decb5b7', 'App\\Notifications\\NewNotification', 'App\\User', 1, '{\"message\":\"\\u0642\\u0627\\u0645 \\u0645\\u062f\\u0631\\u0633 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0627\\u0644\\u062a\\u0633\\u062c\\u064a\\u0644\",\"link\":\"http:\\/\\/127.0.0.1:8050\\/admin\\/teachers\"}', NULL, '2020-08-16 07:53:26', '2020-08-16 07:53:26'),
('c177c6e6-fe0f-4b48-a4ed-4b835e0ad98e', 'App\\Notifications\\NewNotification', 'App\\User', 1, '{\"message\":\"\\u0642\\u0627\\u0645 \\u0645\\u062f\\u0631\\u0633 \\u062c\\u062f\\u064a\\u062f \\u0628\\u0627\\u0644\\u062a\\u0633\\u062c\\u064a\\u0644\",\"link\":\"http:\\/\\/127.0.0.1:8050\\/admin\\/teachers\"}', NULL, '2020-08-16 07:54:14', '2020-08-16 07:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user_management_access', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(2, 'user_management_create', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(3, 'user_management_edit', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(4, 'user_management_view', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(5, 'user_management_delete', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(6, 'permission_access', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(7, 'permission_create', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(8, 'permission_edit', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(9, 'permission_view', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(10, 'permission_delete', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(11, 'role_access', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(12, 'role_create', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(13, 'role_edit', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(14, 'role_view', 1, '2020-07-30 06:49:41', '2020-07-30 06:49:41'),
(15, 'role_delete', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(16, 'user_access', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(17, 'user_create', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(18, 'user_edit', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(19, 'user_view', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(20, 'user_delete', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(21, 'course_access', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(22, 'course_create', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(23, 'course_edit', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(24, 'course_view', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(25, 'course_delete', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(26, 'lesson_access', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(27, 'lesson_create', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(28, 'lesson_edit', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(29, 'lesson_view', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(30, 'lesson_delete', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(31, 'question_access', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(32, 'question_create', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(33, 'question_edit', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(34, 'question_view', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(35, 'question_delete', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(36, 'questions_option_access', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(37, 'questions_option_create', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(38, 'questions_option_edit', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(39, 'questions_option_view', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(40, 'questions_option_delete', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(41, 'test_access', 1, '2020-07-30 06:49:42', '2020-07-30 06:49:42'),
(42, 'test_create', 1, '2020-07-30 06:49:43', '2020-07-30 06:49:43'),
(43, 'test_edit', 1, '2020-07-30 06:49:43', '2020-07-30 06:49:43'),
(44, 'test_view', 1, '2020-07-30 06:49:43', '2020-07-30 06:49:43'),
(45, 'test_delete', 1, '2020-07-30 06:49:43', '2020-07-30 06:49:43'),
(46, 'categories', 1, '2020-07-30 06:49:43', '2020-07-30 06:49:43'),
(47, 'category_create', 1, '2020-07-30 07:08:55', '2020-07-30 07:08:55'),
(48, 'category_store', 1, '2020-07-30 07:10:59', '2020-07-30 07:10:59'),
(49, 'category_show', 1, '2020-07-30 07:11:12', '2020-07-30 07:11:12'),
(50, 'category_edit', 1, '2020-07-30 07:11:28', '2020-07-30 07:11:28'),
(51, 'category_update', 1, '2020-07-30 07:11:39', '2020-07-30 07:11:39'),
(52, 'teachers', 1, '2020-08-01 14:05:04', '2020-08-01 14:05:04'),
(53, 'teacher_create', 1, '2020-08-01 14:20:36', '2020-08-01 14:20:36'),
(54, 'teacher_delete', 1, '2020-08-01 14:21:01', '2020-08-01 14:21:01'),
(55, 'teacher_view', 1, '2020-08-01 14:21:36', '2020-08-01 14:21:36'),
(56, 'teacher_edit', 1, '2020-08-01 14:21:56', '2020-08-01 14:21:56'),
(57, 'teacher_delete', 1, '2020-08-01 14:22:04', '2020-08-01 14:22:04'),
(58, 'blogs_access', 1, '2020-08-10 16:49:35', '2020-08-10 16:49:35'),
(59, 'blogs_create', 1, '2020-08-10 16:50:26', '2020-08-10 16:50:26'),
(60, 'blogs_edit', 1, '2020-08-10 16:50:45', '2020-08-10 16:50:45'),
(61, 'blogs_delete', 1, '2020-08-10 16:50:59', '2020-08-10 16:50:59'),
(62, 'blogs_view', 1, '2020-08-10 16:51:25', '2020-08-10 16:51:25'),
(63, 'setting', 1, '2020-08-12 18:42:30', '2020-08-12 18:42:30'),
(64, 'about', 1, '2020-08-12 19:17:10', '2020-08-12 19:17:10'),
(65, 'contactme', 1, '2020-08-12 20:38:38', '2020-08-12 20:38:38'),
(66, 'role_user_profile', 1, '2020-08-13 19:00:52', '2020-08-13 19:00:52'),
(67, 'btn-profile-edit', 1, '2020-08-13 19:12:58', '2020-08-13 19:12:58'),
(68, 'emails', 1, '2020-08-14 17:42:15', '2020-08-14 17:42:15'),
(69, 'subscribe', 1, '2020-08-15 05:24:15', '2020-08-15 05:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(21, 3),
(24, 3),
(26, 3),
(29, 3),
(31, 3),
(34, 3),
(36, 3),
(41, 3),
(44, 3),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 4),
(58, 5),
(58, 6),
(58, 7),
(59, 7),
(60, 7),
(61, 7),
(62, 7),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 2),
(68, 1),
(69, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions_options`
--

CREATE TABLE `questions_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `option_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_test`
--

CREATE TABLE `question_test` (
  `id` int(11) NOT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `test_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_test`
--

INSERT INTO `question_test` (`id`, `question_id`, `test_id`) VALUES
(1, 4, 51),
(2, 5, 51),
(3, 6, 51),
(4, 7, 51),
(5, 8, 51),
(6, 9, 51),
(7, 10, 51),
(8, 11, 51),
(9, 12, 51),
(10, 13, 51),
(11, 14, 51),
(12, 15, 51),
(13, 16, 51),
(14, 17, 51),
(15, 18, 51),
(16, 19, 51),
(17, 20, 51),
(18, 21, 51),
(19, 22, 51),
(20, 23, 51),
(21, 24, 51),
(22, 25, 51),
(23, 26, 51),
(24, 27, 51),
(25, 28, 51),
(26, 29, 51),
(27, 30, 51),
(28, 31, 51),
(29, 32, 51),
(30, 33, 51),
(31, 34, 51),
(32, 35, 51),
(33, 36, 51),
(34, 37, 51),
(35, 38, 51),
(36, 39, 51),
(37, 40, 51),
(38, 41, 51),
(39, 42, 51),
(40, 43, 51),
(41, 44, 51),
(42, 45, 51),
(43, 46, 51),
(44, 47, 51),
(45, 48, 51),
(46, 49, 51),
(47, 50, 51),
(48, 51, 51),
(49, 52, 51),
(50, 53, 51),
(51, 54, 51),
(52, 55, 51),
(53, 56, 51),
(54, 57, 51),
(55, 58, 51),
(56, 59, 51),
(57, 60, 51),
(58, 61, 51),
(59, 62, 51),
(60, 63, 51),
(61, 64, 51),
(62, 65, 51),
(63, 66, 51),
(64, 67, 51),
(65, 68, 51),
(66, 69, 51),
(67, 70, 51),
(68, 71, 51),
(69, 72, 51),
(70, 73, 51),
(71, 74, 51),
(72, 75, 51),
(73, 76, 51),
(74, 77, 51),
(75, 78, 51),
(76, 79, 51),
(77, 80, 51),
(78, 81, 51),
(79, 82, 51),
(80, 83, 51),
(81, 84, 51),
(82, 85, 51),
(83, 86, 51),
(84, 87, 51),
(85, 88, 51),
(86, 89, 51),
(87, 90, 51),
(88, 91, 51),
(89, 92, 51),
(90, 93, 51),
(91, 94, 51),
(92, 95, 51);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2020-07-30 06:49:43', '2020-07-30 07:09:17'),
(2, 'Teacher', '2020-07-30 06:49:43', '2020-07-30 06:49:43'),
(3, 'Student', '2020-07-30 06:49:43', '2020-07-30 06:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(3, 3),
(2, 2),
(2, 5),
(2, 8),
(2, 4),
(1, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 13),
(2, 14),
(3, 15),
(3, 17),
(1, 19),
(2, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(3, 27),
(3, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `facebook`, `twitter`, `instagram`, `address`, `phone`, `email`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'E-Learning System', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com', 'Palestine - Gaza', '00972567777922', 'admin@admin.com', 'kW7V0fuc0A7IPppxSib06FxJGm3hZEF8NwVZNqmk.png', '2020-08-12 19:10:57', '2020-08-15 06:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `lesson_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests_results`
--

CREATE TABLE `tests_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `test_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `test_result` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests_results_answers`
--

CREATE TABLE `tests_results_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `tests_result_id` int(10) UNSIGNED DEFAULT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `option_id` int(10) UNSIGNED DEFAULT NULL,
  `correct` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` int(15) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `facebook`, `mobile`, `description`, `password`, `password_changed_at`, `active`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', '0hLEGPsRMRMaJdbjOk1oPqEh0f3pw820sIJ22PDJ.jpeg', 'https://www.facebook.com/', 592555944, 'Details Details Details Details Details Details Details Details Details Details Details Details Details DetailsDetails Details Details Details Details Details DetailsDetails Details Details Details Details Details DetailsDetails Details Details Details Details Details DetailsDetails Details Details Details Details Details DetailsDetails Details Details Details Details Details DetailsDetails Details Details Details Details Details DetailsDetails Details Details Details Details Details Details', '$2y$10$QxjTwUEuVa9VHhHLIvTjSOA2uyb2pxdv18roFuCB8t29oXrLOIdku', NULL, 1, '', '2020-07-30 06:57:03', '2020-08-11 14:55:02', NULL),
(2, 'Teacher', 'teacher@admin.com', '3pw7yT4uOYUb3E23J91owQO7D7a4oq6VOalUSLZx.jpeg', 'https://www.facebook.com/', 2020, 'details', '$2y$10$XJNX5Bjs6Js9GvcuJNy7iOozdYhiERVuj5sFP28EZPvMeBIfjI8tq', NULL, 1, '', '2020-07-30 06:57:03', '2020-08-01 18:36:59', NULL),
(3, 'Student', 'st@admin.com', '', '', 0, '', '$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.', NULL, 1, '', '2020-07-30 06:57:03', '2020-07-30 06:57:03', NULL),
(9, 'shiren', 'shrin@m.com', 'oMvQfOWz9aOy89TqUZkAcwcrkOgMJ4H0lMOEvz7U.jpeg', 'https://www.facebook.com/', 5566, 'dddddddd', '$2y$10$mAq5QQAh5fdlhvjfshWvxeQN7ZCSSDVrBmczm8l9Xv/sFNgegrefK', NULL, 0, NULL, '2020-08-01 19:16:47', '2020-08-01 19:16:47', NULL),
(10, 'rasmy teacher', 'rasmy_adnan@hotmail.com', 'CeIgFilhakR0KRL1vPb1YEBBGHeSdLQIVwvMh2MH.jpeg', 'https://www.facebook.com/', 225222, 'dddd', '$2y$10$64Yyp.Zc9Fm4TN5GGySGm.EJQqfONyQEhvZipW5So9/A5ZLOWVUPW', NULL, 1, NULL, '2020-08-03 17:59:35', '2020-08-03 17:59:46', NULL),
(11, 'rana', 'rana@rana.com', '1pAUI8IWHeK9cN0dtQKFSEpgo9MkYaVVTZncypXv.png', 'https://www.facebook.com/', 54254, 'asadDS', '$2y$10$OFV4.TOCjz1TVYqqbevABuOcRInRz8ENjM.jATziZz/JHtsiL1REy', NULL, 0, NULL, '2020-08-05 05:11:53', '2020-08-05 05:11:53', NULL),
(13, 'majd student', 'm@e.com', NULL, NULL, NULL, NULL, '$2y$10$Jf.b0d19ZJyZ9mlUNaf28OKL455Y0PrVhbLWb1HrLQCtfoi2CjRGC', NULL, 0, NULL, '2020-08-13 14:14:26', '2020-08-13 14:14:26', NULL),
(14, 'majd', 'majd@tibi.com', 'ItDlDOaus1GlS1K2Y4KqSntyfjioSROHv6boD6J2.png', NULL, NULL, NULL, '$2y$10$iVs.luFHbUwu2B0Hd06BIeXEqMyE71LmmWyFxumLPS6s00xRLdCq2', NULL, 1, NULL, '2020-08-13 14:24:40', '2020-08-13 14:26:46', NULL),
(15, 'student', 's@s.s', NULL, NULL, NULL, NULL, '$2y$10$mLYdZKaLMP6COdHgKQocvup/K/Q5YdcyOOhvwLnG4LmwVgmKB0xGu', NULL, 0, NULL, '2020-08-13 19:31:48', '2020-08-13 19:31:48', NULL),
(16, 'student2', 'info@vfsvisa.net', NULL, NULL, NULL, NULL, '$2y$10$GSaDC1MRC0jL5qA2NxGr1./2NcIPJ49ZtUG75mGL99e6yrW8Y77re', NULL, 0, NULL, '2020-08-13 19:41:23', '2020-08-13 19:41:23', NULL),
(17, 'ss', 'ss@ww.www', NULL, NULL, NULL, NULL, '$2y$10$/BkWWVJcyLVM57k0dajegOTqaKrh.QT4.sWDVKhyrMBXBHTPB2/.W', NULL, 0, NULL, '2020-08-13 19:42:39', '2020-08-13 19:42:39', NULL),
(18, 'b', 'b@b.b', NULL, NULL, NULL, NULL, '$2y$10$H2RK0XVxJRUcAQiibKcJhOZ4l230y95PEIdqRXEy3is8EXXDnAf7S', NULL, 0, NULL, '2020-08-13 19:46:43', '2020-08-13 19:46:43', NULL),
(19, 'v', 'vv@v.v', NULL, NULL, NULL, NULL, '$2y$10$PyqZeIz/sohA2z7bCJexeeczETN9Zi0q8SAWbkVsWk58PKbcQ1qbG', NULL, 0, NULL, '2020-08-13 19:50:40', '2020-08-13 19:50:40', NULL),
(20, 'new teacher', 'g@g.com', '', NULL, NULL, NULL, '$2y$10$V2xJQrzEk4h14jFwu.ehSeKzcoaYO2U6h4fx4vvlE6kLQUq9uvyb2', NULL, 0, NULL, '2020-08-16 05:22:30', '2020-08-16 05:22:30', NULL),
(21, 'student200', 'm@a.c', NULL, NULL, NULL, NULL, '$2y$10$6zSAQnaxqxUiKIvD3N8Cn.B6nE3Ohrnb3YlEaDDpxZdcZVbka3bcO', NULL, 1, NULL, '2020-08-16 05:54:49', '2020-08-16 05:54:49', NULL),
(22, 'majdy', 'gg@rr.com', NULL, NULL, NULL, NULL, '$2y$10$iveTFA9Z04lwCNXKGJT6seeEbI5g6s9uw83bjIm2ZZbwzUTmScE3i', NULL, 1, NULL, '2020-08-16 05:58:42', '2020-08-16 05:58:42', NULL),
(23, 'saji', 'ss@iii.com', NULL, NULL, NULL, NULL, '$2y$10$.SUjowWZRUV4ce5WbbSn0.0z5De5PspEqs9AvNct/G/3oP2VgoQDe', NULL, 1, NULL, '2020-08-16 06:00:12', '2020-08-16 06:00:12', NULL),
(24, 'jjj', 'jj@jj.com', NULL, NULL, NULL, NULL, '$2y$10$YsFnTWwU6OvltlGpEtlJVe/pFtcsnv6BF.S1SS2Y3HW0/v8JUi1Le', NULL, 1, NULL, '2020-08-16 06:03:10', '2020-08-16 06:03:10', NULL),
(25, 'rrrrr', 'ry@uu.com', NULL, NULL, NULL, NULL, '$2y$10$8HKlp2HChcV0OOKT/Q6HC..vGzsZXpq.Y5Rl/6Na5epDDpbP3pTHW', NULL, 1, NULL, '2020-08-16 06:04:25', '2020-08-16 06:04:25', NULL),
(26, 'mmm', 'mmmm@mmn.cnn', NULL, NULL, NULL, NULL, '$2y$10$ZXB.bhGLtRc2dm6hfaJcJej/rOvBHW9GaAMwo1SVlL2wyB1e5W6yu', NULL, 1, NULL, '2020-08-16 06:05:27', '2020-08-16 06:05:27', NULL),
(27, 'kkllk', 'bbb@xx.com', NULL, NULL, NULL, NULL, '$2y$10$1xLWpWLN/sqsxhmfBZVu0.tmTTDiL0DzZ3DiOhyqsM6gUlvvoMJh2', NULL, 1, NULL, '2020-08-16 06:08:40', '2020-08-16 06:08:40', NULL),
(28, 'student6', 'mmn@jj.com', NULL, NULL, NULL, NULL, '$2y$10$8USJmsabp7w6iKerWBulCuMEpbl1DCax1Fsf2bfbpKfBMTXRw4rf6', NULL, 1, NULL, '2020-08-16 06:12:13', '2020-08-16 06:12:13', NULL),
(29, 'hhjhg', 'hashimi@gmail.com', '', NULL, NULL, NULL, '$2y$10$4DjLRCrKMkQ0KcWSSgGLJuVfinsEv7OmPsizlyvomL9sofPs1EDmy', NULL, 0, NULL, '2020-08-16 06:26:30', '2020-08-16 06:26:30', NULL),
(30, 'teacher505', 'y@r.ee', '', NULL, NULL, NULL, '$2y$10$nA3Z1XmS.H0Jr7tfCBAM4OZvqHm0bd.eKUE4GSCcCMRuQxVXQXtCe', NULL, 0, NULL, '2020-08-16 07:11:11', '2020-08-16 07:11:11', NULL),
(31, 'new teacher 22', 'rahaf@g.com', '', NULL, NULL, NULL, '$2y$10$W93v2IFYIK5HN5bm7B.ccetyX5Ek6MS6XQqJcgB7XshA7QlVzzKOa', NULL, 0, NULL, '2020-08-16 07:53:25', '2020-08-16 07:53:25', NULL),
(32, 'majdddd', 'g@k.com', '', NULL, NULL, NULL, '$2y$10$RDdoCiCzPve9YrWTTNirUeTCkiSQKhjBxwa.EEpzXMui/TZewsYCO', NULL, 0, NULL, '2020-08-16 07:54:13', '2020-08-16 07:54:13', NULL),
(33, 'hhjghj', 'hhh@ff.com', '', NULL, NULL, NULL, '$2y$10$q4Vy4e6YLHGgKqx9zDlq0e.VHEa6L69MaKj8XN8SIblklvnpdXglm', NULL, 0, NULL, '2020-08-16 08:16:28', '2020-08-16 08:16:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_subscribe_`
--

CREATE TABLE `_subscribe_` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_subscribe_`
--

INSERT INTO `_subscribe_` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'rasmy_adnan@hotmail.com', '2020-08-14', '2020-08-14'),
(2, 'rtibi86@gmail.com', '2020-08-14', '2020-08-14'),
(5, 'buthainasharaf@gmail.com', '2020-08-16', '2020-08-16'),
(6, 'shawaffatma@gmail.com', '2020-08-16', '2020-08-16'),
(7, 'husssara45@gmail.com', '2020-08-16', '2020-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`),
  ADD KEY `course_student_user_id_foreign` (`user_id`);

--
-- Indexes for table `emailcreat`
--
ALTER TABLE `emailcreat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`),
  ADD KEY `lessons_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `lesson_student`
--
ALTER TABLE `lesson_student`
  ADD KEY `lesson_student_lesson_id_foreign` (`lesson_id`),
  ADD KEY `lesson_student_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `questions_options`
--
ALTER TABLE `questions_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `54421_596eee8745a1e` (`question_id`),
  ADD KEY `questions_options_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `question_test`
--
ALTER TABLE `question_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_p_54420_54422_test_que_596eeef70992f` (`question_id`),
  ADD KEY `fk_p_54422_54420_question_596eeef7099af` (`test_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `fk_p_54416_54417_user_rol_596eec0af3746` (`role_id`),
  ADD KEY `fk_p_54417_54416_role_use_596eec0af37c1` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `54422_596eeef514d00` (`course_id`),
  ADD KEY `54422_596eeef53411a` (`lesson_id`),
  ADD KEY `tests_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `tests_results`
--
ALTER TABLE `tests_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_results_test_id_foreign` (`test_id`),
  ADD KEY `tests_results_user_id_foreign` (`user_id`);

--
-- Indexes for table `tests_results_answers`
--
ALTER TABLE `tests_results_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_results_answers_tests_result_id_foreign` (`tests_result_id`),
  ADD KEY `tests_results_answers_question_id_foreign` (`question_id`),
  ADD KEY `tests_results_answers_option_id_foreign` (`option_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_subscribe_`
--
ALTER TABLE `_subscribe_`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emailcreat`
--
ALTER TABLE `emailcreat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `questions_options`
--
ALTER TABLE `questions_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `question_test`
--
ALTER TABLE `question_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tests_results`
--
ALTER TABLE `tests_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests_results_answers`
--
ALTER TABLE `tests_results_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `_subscribe_`
--
ALTER TABLE `_subscribe_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_student_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lesson_student`
--
ALTER TABLE `lesson_student`
  ADD CONSTRAINT `lesson_student_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lesson_student_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions_options`
--
ALTER TABLE `questions_options`
  ADD CONSTRAINT `54421_596eee8745a1e` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
