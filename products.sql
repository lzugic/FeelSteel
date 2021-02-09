-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2021 at 09:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feelsteel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `galery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `galery`, `created_at`, `updated_at`) VALUES
(1, 'Stolica 1', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/1.png', NULL, NULL),
(2, 'Stolica 2', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/2.png', NULL, NULL),
(3, 'Stolica 3', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/3.png', NULL, NULL),
(4, 'Stolica 4', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/4.jpg', NULL, NULL),
(5, 'Stolica 5', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/5.jpg', NULL, NULL),
(6, 'Stolica 6', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/6.jpg', NULL, NULL),
(7, 'Stolica 7', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/7.jpg', NULL, NULL),
(8, 'Stolica 8', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/8.jpg', NULL, NULL),
(9, 'Stolica 9', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/9.jpg', NULL, NULL),
(10, 'Stolica 10', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/10.jpg', NULL, NULL),
(11, 'Stolica 11', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/11.jpg', NULL, NULL),
(12, 'Stolica 12', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/12.jpg', NULL, NULL),
(13, 'Stolica 13', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/13.jpg', NULL, NULL),
(14, 'Stolica 14', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/14.jpg', NULL, NULL),
(15, 'Stolica 15', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/15.jpg', NULL, NULL),
(16, 'Stolica 16', 1500, 'stolice', 'Praktična stolica koje ce ukrasiti vas enterijer.', '../public/slike/stolice/16.png', NULL, NULL),
(17, 'Sto 1', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/1.jpg', NULL, NULL),
(18, 'Sto 2', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/2.jpg', NULL, NULL),
(19, 'Sto 3', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/3.jpg', NULL, NULL),
(20, 'Sto 4', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/4.jpg', NULL, NULL),
(21, 'Sto 5', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/5.jpg', NULL, NULL),
(22, 'Sto 6', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/6.jpg', NULL, NULL),
(23, 'Sto 7', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/7.jpg', NULL, NULL),
(24, 'Sto 8', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/8.jpg', NULL, NULL),
(25, 'Sto 9', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/9.jpg', NULL, NULL),
(26, 'Sto 10', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/10.jpg', NULL, NULL),
(27, 'Sto 11', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/11.jpg', NULL, NULL),
(28, 'Sto 12', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/12.jpg', NULL, NULL),
(29, 'Sto 13', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/13.png', NULL, NULL),
(30, 'Sto 14', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/14.png', NULL, NULL),
(31, 'Sto 15', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/15.png', NULL, NULL),
(32, 'Sto 16', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/16.png', NULL, NULL),
(33, 'Sto 17', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/17.png', NULL, NULL),
(34, 'Sto 18', 6300, 'stolovi', 'Elegantan stocic za vas lepsi dnevni boravak.', '../public/slike/stolovi/18.png', NULL, NULL),
(35, 'Polica 1', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/1.jpg', NULL, NULL),
(36, 'Polica 2', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/2.jpg', NULL, NULL),
(37, 'Polica 3', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/3.jpg', NULL, NULL),
(38, 'Polica 4', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/4.jpg', NULL, NULL),
(39, 'Polica 5', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/5.jpg', NULL, NULL),
(40, 'Polica 6', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/6.jpg', NULL, NULL),
(41, 'Polica 7', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/7.jpg', NULL, NULL),
(42, 'Polica 8', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/8.jpg', NULL, NULL),
(43, 'Polica 9', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/9.jpg', NULL, NULL),
(44, 'Polica 10', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/10.jpg', NULL, NULL),
(45, 'Polica 11', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/11.jpg', NULL, NULL),
(46, 'Polica 12', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/12.jpg', NULL, NULL),
(47, 'Polica 13', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/13.jpg', NULL, NULL),
(48, 'Polica 14', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/14.jpg', NULL, NULL),
(49, 'Polica 15', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/15.png', NULL, NULL),
(50, 'Polica 16', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/16.png', NULL, NULL),
(51, 'Polica 17', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/17.png', NULL, NULL),
(52, 'Polica 18', 4800, 'police', 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.', '../public/slike/police/18.png', NULL, NULL),
(53, 'Lampa 1', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/1.jpg', NULL, NULL),
(54, 'Lampa 2', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/2.jpg', NULL, NULL),
(55, 'Lampa 3', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/3.jpg', NULL, NULL),
(56, 'Lampa 4', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/4.jpg', NULL, NULL),
(57, 'Lampa 5', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/5.jpg', NULL, NULL),
(58, 'Lampa 6', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/6.jpg', NULL, NULL),
(59, 'Lampa 7', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/7.jpg', NULL, NULL),
(60, 'Lampa 8', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/8.jpg', NULL, NULL),
(61, 'Lampa 9', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/9.jpg', NULL, NULL),
(62, 'Lampa 10', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/10.jpg', NULL, NULL),
(63, 'Lampa 11', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/11.jpg', NULL, NULL),
(64, 'Lampa 12', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/12.jpg', NULL, NULL),
(65, 'Lampa 13', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/13.jpg', NULL, NULL),
(66, 'Lampa 14', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/14.jpg', NULL, NULL),
(67, 'Lampa 15', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/15.jpg', NULL, NULL),
(68, 'Lampa 16', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/16.png', NULL, NULL),
(69, 'Lampa 17', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/17.png', NULL, NULL),
(70, 'Lampa 18', 1400, 'lampe', 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.', '../public/slike/lampe/18.png', NULL, NULL),
(71, 'Ljuljaska 1', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/1.jpg', NULL, NULL),
(72, 'Ljuljaska 2', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/2.jpg', NULL, NULL),
(73, 'Ljuljaska 3', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/3.jpg', NULL, NULL),
(74, 'Ljuljaska 4', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/4.jpg', NULL, NULL),
(75, 'Ljuljaska 5', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/5.jpg', NULL, NULL),
(76, 'Ljuljaska 6', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/6.jpg', NULL, NULL),
(77, 'Ljuljaska 7', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/7.jpg', NULL, NULL),
(78, 'Ljuljaska 8', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/8.jpg', NULL, NULL),
(79, 'Ljuljaska 9', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/9.jpg', NULL, NULL),
(80, 'Ljuljaska 10', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/10.png', NULL, NULL),
(81, 'Ljuljaska 11', 6200, 'ljuljaske', 'Ljuljaska za vase dvoriste.', '../public/slike/ljuljaske/11.png', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
