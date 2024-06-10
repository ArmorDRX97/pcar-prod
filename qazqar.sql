-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 22 2024 г., 17:43
-- Версия сервера: 8.0.30
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `qazqar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ad_spaces`
--

CREATE TABLE `ad_spaces` (
  `id` bigint UNSIGNED NOT NULL,
  `ad_spaces` int NOT NULL,
  `ad_view` int NOT NULL,
  `ad_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ad_spaces`
--

INSERT INTO `ad_spaces` (`id`, `ad_spaces`, `ad_view`, `ad_url`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(2, 2, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(3, 2, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(4, 3, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(5, 3, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(6, 4, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(7, 4, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(8, 5, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(9, 6, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(10, 6, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(11, 7, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(12, 7, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(13, 8, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(14, 8, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(15, 9, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(16, 9, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(17, 10, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(18, 10, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(19, 11, 0, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(20, 11, 1, 'https://codecanyon.net/item/infynews-laravel-news-and-magazines-blog-articles-php-script/38138839', NULL, '2024-02-19 02:38:41', '2024-02-19 02:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `album_categories`
--

CREATE TABLE `album_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `album_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `analytics`
--

CREATE TABLE `analytics` (
  `id` bigint UNSIGNED NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_post`
--

CREATE TABLE `article_post` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `article_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `audio_post`
--

CREATE TABLE `audio_post` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `audio_content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `bulk_mails`
--

CREATE TABLE `bulk_mails` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_in_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_in_home_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'etert', 'etert@sdgdg.dgd', 'weagdgsdfgdg', '242343244324', '2024-02-19 08:28:59', '2024-02-19 08:28:59');

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint UNSIGNED NOT NULL,
  `currency_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `currency_name`, `currency_icon`, `currency_code`, `created_at`, `updated_at`) VALUES
(1, 'USD US Dollar', '$', 'USD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(2, 'EUR Euro', '€', 'EUR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(3, 'HKD Hong Kong Dollar', '$', 'HKD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(4, 'INR Indian Rupee', '₹', 'INR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(5, 'AUD Australian Dollar', '$', 'AUD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(6, 'JMD Jamaican Dollar', 'J$', 'JMD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(7, 'CAD Canadian Dollar', '$', 'CAD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(8, 'AED United Arab Emirates Dirham', 'د.إ', 'AED', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(9, 'AFN Afghanistan Afghani', '؋', 'AFN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(10, 'ALL Albania Lek', 'Lek', 'ALL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(11, 'AMD Armenian Dram', '֏', 'AMD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(12, 'ANG Netherlands Antilles Guilder', 'ƒ', 'ANG', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(13, 'AOA Angola kwanza', 'Kz', 'AOA', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(14, 'ARS Argentina Peso', '$', 'ARS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(15, 'AWG Aruba Guilder', 'ƒ', 'AWG', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(16, 'AZN Azerbaijan Manat', '₼', 'AZN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(17, 'BAM Bosnia and Herzegovina Convertible Marka', 'KM', 'BAM', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(18, 'BBD Barbados Dollar', '$', 'BBD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(19, 'BDT Bangladesh Taka', '৳', 'BDT', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(20, 'BGN Bulgaria Lev', 'лв', 'BGN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(21, 'BMD Bermuda Dollar', '$', 'BMD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(22, 'BND Brunei Darussalam Dollar', '$', 'BND', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(23, 'BOB Bolivia Boliviano', '$b', 'BOB', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(24, 'BRL Brazil Real', 'R$', 'BRL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(25, 'BSD Bahamas Dollar', '$', 'BSD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(26, 'BWP Botswana Pula', 'P', 'BWP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(27, 'BZD Belize Dollar', 'BZ$', 'BZD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(28, 'CDF Congo Congolese franc', 'FC', 'CDF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(29, 'CHF Switzerland Franc', 'CHF', 'CHF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(30, 'CNY China Yuan Renminbi', '¥', 'CNY', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(31, 'COP Colombia Peso', '$', 'COP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(32, 'CRC Costa Rica Colon', '₡', 'CRC', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(33, 'CVE Cape Verde Escudo', '$', 'CVE', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(34, 'CZK Czech Republic Koruna', 'Kč', 'CZK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(35, 'DKK Denmark Krone', 'kr', 'DKK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(36, 'DOP Dominican Republic Peso', 'RD$', 'DOP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(37, 'DZD Algeria Dinar', 'دج', 'DZD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(38, 'EGP Egypt Pound', '£', 'EGP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(39, 'ETB Ethiopia Birr', 'ብር', 'ETB', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(40, 'FJD Fiji Dollar', '$', 'FJD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(41, 'FKP Falkland Islands Pound', '£', 'FKP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(42, 'GBP United Kingdom Pound', '£', 'GBP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(43, 'GEL Georgia Lari', '₾', 'GEL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(44, 'GIP Gibraltar Pound', '£', 'GIP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(45, 'GMD Gambia Dalasi', 'D', 'GMD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(46, 'GTQ Guatemala Quetzal', 'Q', 'GTQ', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(47, 'GYD Guyana Dollar', '$', 'GYD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(48, 'HNL Honduras Lempira', 'L', 'HNL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(49, 'HRK Croatia Kuna', 'kn', 'HRK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(50, 'HTG Haiti Gourde', 'G', 'HTG', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(51, 'HUF Hungary Forint', 'Ft', 'HUF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(52, 'IDR Indonesia Rupiah', 'Rp', 'IDR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(53, 'ILS Israel Shekel', '₪', 'ILS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(54, 'ISK Iceland Krona', 'kr', 'ISK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(55, 'KES Kenya Shilling', '/=', 'KES', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(56, 'KGS Kyrgyzstan Som', 'лв', 'KGS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(57, 'KHR Cambodia Riel', '៛', 'KHR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(58, 'KYD Cayman Dollar', '$', 'KYD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(59, 'KZT Kazakhstan Tenge', 'лв', 'KZT', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(60, 'LAK Laos Kip', '₭', 'LAK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(61, 'LBP Lebanon Pound', '£', 'LBP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(62, 'LKR Sri Lanka Rupee', '₨', 'LKR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(63, 'LRD Liberia Dollar', '$', 'LRD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(64, 'LSL Lesotho Loti', 'L', 'LSL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(65, 'MAD Morocco Dirham', 'MAD', 'MAD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(66, 'MDL Moldova Leu', 'L', 'MDL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(67, 'MKD Macedonia Denar', 'ден', 'MKD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(68, 'MMK Myanmar Kyat', 'K', 'MMK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(69, 'MNT Mongolia Tughrik', '₮', 'MNT', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(70, 'MOP Macau P ataca', 'MOP$', 'MOP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(71, 'MRO Mauritania Ouguiya', 'MRU', 'MRO', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(72, 'MUR Mauritius Rupee', '₨', 'MUR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(73, 'MVR Maldives Rufiyaa', '.ރ', 'MVR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(74, 'MWK Malawi Kwacha', 'MK', 'MWK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(75, 'MXN Mexico Peso', '$', 'MXN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(76, 'MYR Malaysia Ringgit', 'RM', 'MYR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(77, 'MZN Mozambique Metical', 'MT', 'MZN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(78, 'NAD Namibia Dollar', '$', 'NAD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(79, 'NGN Nigeria Naira', '₦', 'NGN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(80, 'NIO Nicaragua Cordoba', 'C$', 'NIO', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(81, 'NOK Norway Krone', 'kr', 'NOK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(82, 'NPR Nepal Rupee', '₨', 'NPR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(83, 'NZD New Zealand Dollar', '$', 'NZD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(84, 'PAB Panama Balboa', 'B/.', 'PAB', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(85, 'PEN Peru Nuevo Sol', 'S/.', 'PEN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(86, 'PGK Papua New Guinea Kina', 'K', 'PGK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(87, 'PHP Philippines Peso', '₱', 'PHP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(88, 'PKR Pakistan Rupee', '₨', 'PKR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(89, 'PLN Poland Zloty', 'zł', 'PLN', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(90, 'QAR Qatar Riyal', '﷼', 'QAR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(91, 'RON Romania New Leu', 'lei', 'RON', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(92, 'RSD Serbia Dinar', 'Дин.', 'RSD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(93, 'RUB Russia Ruble', '₽', 'RUB', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(94, 'SAR Saudi Arabia Riyal', '﷼', 'SAR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(95, 'SBD Solomon Islands Dollar', '$', 'SBD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(96, 'SCR Seychelles Rupee', '₨', 'SCR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(97, 'SEK Sweden Krona', 'kr', 'SEK', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(98, 'SGD Singapore Dollar', '$', 'SGD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(99, 'SHP Saint Helena Pound', '£', 'SHP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(100, 'SLL Sierra Leone Leone', 'Le', 'SLL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(101, 'SOS Somalia Shilling', 'S', 'SOS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(102, 'SRD Suriname Dollar', '$', 'SRD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(103, 'STD São Tomé and Príncipe Dobra', 'Db', 'STD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(104, 'SZL Eswatini lilangeni', 'L', 'SZL', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(105, 'THB Thailand Baht', '฿', 'THB', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(106, 'TJS Tajikistan Somoni', 'ЅM', 'TJS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(107, 'TOP Tonga Pa’anga', 'T$', 'TOP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(108, 'TRY Turkey Lira', '₺', 'TRY', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(109, 'TTD Trinidad and Tobago Dollar', 'TT$', 'TTD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(110, 'TWD Taiwan New Dollar', 'NT$', 'TWD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(111, 'TZS Tanzania Shiling', 'TSh', 'TZS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(112, 'UAH Ukraine Hryvna', '₴', 'UAH', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(113, 'UYU Uruguay Peso', '$U', 'UYU', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(114, 'UZS Uzbekistan Som', 'лв', 'UZS', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(115, 'WST Samoa  Tālā', 'WS$', 'WST', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(116, 'XCD Eastern Caribbean States Dollar', '$', 'XCD', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(117, 'YER Yemen Rial', '﷼', 'YER', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(118, 'ZAR South Africa Rand', 'R', 'ZAR', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(119, 'ZMW Zambia Kwacha', 'ZK', 'ZMW', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(120, 'BIF Burundi Franc', 'FBu', 'BIF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(121, 'CLP Chile Peso', '$', 'CLP', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(122, 'DJF Djibouti Franc', 'Fdj', 'DJF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(123, 'GNF Guinea Franc', 'GFr', 'GNF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(124, 'JPY Japan Yen', '¥', 'JPY', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(125, 'KMF Comoros Franc', 'CF', 'KMF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(126, 'KRW Korea Won', '₩', 'KRW', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(127, 'MGA Madagascar Ariary ', 'Ar', 'MGA', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(128, 'PYG Paraguay Guarani', 'Gs', 'PYG', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(129, 'RWF Rwanda Franc', 'R₣', 'RWF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(130, 'UGX Uganda Shilling', 'USh', 'UGX', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(131, 'VND Viet Nam Dong', '₫', 'VND', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(132, 'VUV Vanuatu Vatu', 'VT', 'VUV', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(133, 'XAF Central Africa Central African CFA Franc', 'FCFA', 'XAF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(134, 'XOF West Africa West African CFA Franc', 'CFA', 'XOF', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(135, 'XPF France Franc', '₣', 'XPF', '2024-02-19 02:38:41', '2024-02-19 02:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `emoji`
--

CREATE TABLE `emoji` (
  `id` bigint UNSIGNED NOT NULL,
  `emoji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `emoji`
--

INSERT INTO `emoji` (`id`, `emoji`, `name`, `status`, `created_at`, `updated_at`) VALUES
(8, '&#128077;', 'like', 1, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(9, '&#128078;', 'dislike', 1, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(10, '&#128525;', 'love', 1, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(11, '&#128545;', 'angry', 1, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(12, '&#128557;', 'sad', 1, '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(13, '&#128514;', 'funny', 1, '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(14, '&#128561;', 'wow', 1, '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(15, '&#128591;', 'pray', 0, '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(16, '&#128076;', 'super', 0, '2024-02-19 02:38:42', '2024-02-19 02:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `followers`
--

CREATE TABLE `followers` (
  `id` bigint UNSIGNED NOT NULL,
  `following` bigint UNSIGNED NOT NULL,
  `followers` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `album_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_post`
--

CREATE TABLE `gallery_post` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` text COLLATE utf8mb4_unicode_ci,
  `gallery_content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_code` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `front_language_status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `name`, `iso_code`, `is_default`, `created_at`, `updated_at`, `front_language_status`) VALUES
(1, 'English', 'en', 0, '2024-02-19 02:38:42', '2024-02-19 02:38:42', 1),
(6, 'Русский', 'ru', 1, '2024-02-19 02:54:46', '2024-02-19 02:55:32', 1),
(7, 'Казахский', 'kz', 0, '2024-02-19 02:55:19', '2024-02-19 02:55:19', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `mail_settings`
--

CREATE TABLE `mail_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `mail_protocol` int NOT NULL,
  `mail_library` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` int NOT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification` int NOT NULL,
  `contact_messages` int DEFAULT NULL,
  `contact_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mail_settings`
--

INSERT INTO `mail_settings` (`id`, `mail_protocol`, `mail_library`, `encryption`, `mail_port`, `mail_host`, `mail_username`, `mail_password`, `mail_title`, `reply_to`, `email_verification`, `contact_messages`, `contact_mail`, `send_mail`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1', 587, 'mail@codingest.com', 'info@codingest.com', 'mail@123', 'Varient', 'info2@codingest.com', 1, 1, 'info3@codingest.com', 'info4@codingest.com', '2024-02-19 02:38:42', '2024-02-19 02:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(170) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(170) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(170) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(170) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `generated_conversions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsive_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(4, 'App\\Models\\PostGallery', 9, '812a6777-7b23-4f26-a6f3-0a7c7b586331', 'post_gallery_images', 'IMG_1553', 'IMG_1553.jpeg', 'image/jpeg', 'public', 'public', 4304555, '[]', '[]', '[]', '[]', 1, '2024-02-19 08:47:30', '2024-02-19 08:47:30'),
(5, 'App\\Models\\PostGallery', 10, '960293d6-fc6b-4f38-b5a9-13e29bbba2dc', 'post_gallery_images', 'IMG_1553', 'IMG_1553.jpeg', 'image/jpeg', 'public', 'public', 4304555, '[]', '[]', '[]', '[]', 1, '2024-02-19 08:47:30', '2024-02-19 08:47:30'),
(6, 'App\\Models\\Gallery', 1, 'b0ddbd7f-6a45-46c6-a6ad-95018e18e395', 'gallery_images', 'IMG_1539', 'IMG_1539.JPG', 'image/jpeg', 'public', 'public', 4157005, '[]', '[]', '[]', '[]', 1, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(7, 'App\\Models\\Gallery', 1, '0ad90506-d2cc-4a3b-b409-5cd9f5975f2f', 'gallery_images', 'IMG_1540', 'IMG_1540.JPG', 'image/jpeg', 'public', 'public', 4792474, '[]', '[]', '[]', '[]', 2, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(8, 'App\\Models\\Gallery', 1, '209f27d7-a182-4f9c-abbe-3c44f48618bd', 'gallery_images', 'IMG_1541', 'IMG_1541.JPG', 'image/jpeg', 'public', 'public', 5367859, '[]', '[]', '[]', '[]', 3, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(9, 'App\\Models\\Gallery', 1, '3d92d732-a76f-4be6-ba65-13721b7b61f2', 'gallery_images', 'IMG_1542', 'IMG_1542.JPG', 'image/jpeg', 'public', 'public', 4820440, '[]', '[]', '[]', '[]', 4, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(10, 'App\\Models\\Gallery', 1, 'e76a9949-43cf-4008-8b11-c874b2ed3e8a', 'gallery_images', 'IMG_1543', 'IMG_1543.JPG', 'image/jpeg', 'public', 'public', 4747657, '[]', '[]', '[]', '[]', 5, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(11, 'App\\Models\\Gallery', 1, '4a93a99c-c830-4506-a675-84343a00d991', 'gallery_images', 'IMG_1544', 'IMG_1544.JPG', 'image/jpeg', 'public', 'public', 4197496, '[]', '[]', '[]', '[]', 6, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(12, 'App\\Models\\Gallery', 1, 'e9eb6183-99ef-49f8-955d-6b41bea500ba', 'gallery_images', 'IMG_1545', 'IMG_1545.JPG', 'image/jpeg', 'public', 'public', 4844191, '[]', '[]', '[]', '[]', 7, '2024-02-19 13:34:28', '2024-02-19 13:34:28'),
(14, 'App\\Models\\Setting', 39, 'c8361e7b-7965-4f7e-8d63-e36668f8e66f', 'logo', 'logo', 'logo.png', 'image/png', 'public', 'public', 6432, '[]', '[]', '[]', '[]', 1, '2024-02-21 17:20:21', '2024-02-21 17:20:21'),
(15, 'App\\Models\\Setting', 40, '04199b10-56d9-44b0-ad67-5dfc4c71a3f7', 'favicon', 'favicon-32x32', 'favicon-32x32.png', 'image/png', 'public', 'public', 1867, '[]', '[]', '[]', '[]', 1, '2024-02-21 17:20:21', '2024-02-21 17:20:21'),
(16, 'App\\Models\\Gallery', 2, '404e3dd1-2e53-4a75-988d-de137e478703', 'gallery_images', 'ssd 1', 'ssd-1.jpg', 'image/jpeg', 'public', 'public', 1428963, '[]', '[]', '[]', '[]', 1, '2024-02-22 05:47:55', '2024-02-22 05:47:55'),
(17, 'App\\Models\\Gallery', 2, 'f8fe4372-4ea9-496f-9203-df90f991ac3d', 'gallery_images', '20240221_153913', '20240221_153913.jpg', 'image/jpeg', 'public', 'public', 3322694, '[]', '[]', '[]', '[]', 2, '2024-02-22 05:47:55', '2024-02-22 05:47:55'),
(18, 'App\\Models\\Gallery', 2, '4b088bb2-ac95-42b5-93a7-e1f0f4becd74', 'gallery_images', 'IMG_4022', 'IMG_4022.jpg', 'image/jpeg', 'public', 'public', 4342047, '[]', '[]', '[]', '[]', 3, '2024-02-22 05:47:55', '2024-02-22 05:47:55'),
(19, 'App\\Models\\Gallery', 2, '5f0a21c4-1c0a-441c-b062-2f5522958cd9', 'gallery_images', '1000_F_555029422_vCUaE2sbcyVtH4n6lqcavGrwZnpL2VPF', '1000_F_555029422_vCUaE2sbcyVtH4n6lqcavGrwZnpL2VPF.jpg', 'image/jpeg', 'public', 'public', 404273, '[]', '[]', '[]', '[]', 4, '2024-02-22 05:47:55', '2024-02-22 05:47:55');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_menu_id` bigint UNSIGNED DEFAULT NULL,
  `order` int DEFAULT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_26_044558_create_media_table', 1),
(5, '2021_07_28_114939_create_settings_table', 1),
(6, '2021_08_05_085326_create_permission_tables', 1),
(7, '2022_03_09_073651_creat_languages_table', 1),
(8, '2022_03_09_090704_create_categories_table', 1),
(9, '2022_03_09_120141_create_albums_table', 1),
(10, '2022_03_09_120142_create_album_categories_table', 1),
(11, '2022_03_10_054126_create_sub_categories_table', 1),
(12, '2022_03_10_055607_create_menus_table', 1),
(13, '2022_03_10_105057_create_polls_table', 1),
(14, '2022_03_11_054720_create_pages_table', 1),
(15, '2022_03_11_105713_create_navigation_table', 1),
(16, '2022_03_11_121526_create_mail_settings_table', 1),
(17, '2022_03_12_062921_create_seo_tools_table', 1),
(18, '2022_03_14_060718_create_galleries_table', 1),
(19, '2022_03_15_060007_create_posts_table', 1),
(20, '2022_03_17_122201_create_gallery_post', 1),
(21, '2022_03_19_050520_create_article_post', 1),
(22, '2022_03_21_065053_create_sort_list_post', 1),
(23, '2022_03_24_043738_add_parent_menu_id_to_menus_table', 1),
(24, '2022_03_24_111534_change_column_to_article_post_table', 1),
(25, '2022_03_24_123132_create_subscribers', 1),
(26, '2022_03_30_043655_create_analytics_table', 1),
(27, '2022_03_30_085103_create_poll_result_table', 1),
(28, '2022_04_01_062431_create_comments_table', 1),
(29, '2022_04_09_062145_create_contacts_table', 1),
(30, '2022_05_18_103900_change_media_table', 1),
(31, '2022_06_06_075009_add_slug_sub_categories_table', 1),
(32, '2022_07_08_074541_add_dark_mode_field_to_users_table', 1),
(33, '2022_08_24_085555_update_field_type_in_article_post_table', 1),
(34, '2022_12_05_053847_create_video_post', 1),
(35, '2022_12_05_092203_create_rss_feeds_table', 1),
(36, '2022_12_06_064321_create_audio_post', 1),
(37, '2022_12_06_072438_add_rss_feed_to_posts_table', 1),
(38, '2022_12_08_085841_create_ad_spaces_table', 1),
(39, '2022_12_10_052005_add_rss_feed_seeder_to_setting_table', 1),
(40, '2022_12_12_120235_add_ad_spaces_seeder_to_setting_table', 1),
(41, '2022_12_13_043816_add_default_ad_seeder_to_ad_spaces_table', 1),
(42, '2022_12_14_042144_add_default_ad_permission_to_ad_spaces_table', 1),
(43, '2022_12_30_043615_create_currencies_table', 1),
(44, '2022_12_30_044834_create_plans_table', 1),
(45, '2022_12_31_094536_add_customer_role_permission_table', 1),
(46, '2023_01_02_055032_create_transactions_table', 1),
(47, '2023_01_02_055033_create_subscriptions_table', 1),
(48, '2023_01_03_095117_create_post_reactions_table', 1),
(49, '2023_01_04_070136_create_social_accounts_table', 1),
(50, '2023_01_05_051819_add_payment_guide_setting_seeder_table', 1),
(51, '2023_01_16_062238_create_payment_gateways_table', 1),
(52, '2023_01_17_105551_add_payment_rejected_notes_to_subscriptions_table', 1),
(53, '2023_01_18_065211_add_code_in_ad_spaces_table', 1),
(54, '2023_01_24_073135_create_emoji_table', 1),
(55, '2023_01_26_041021_add_default_emojis_on_emoji_table', 1),
(56, '2023_02_08_123737_add_front_language_status_to_languages_table', 1),
(57, '2023_02_16_041456_add_default_emaji_seeder_to_emoji_table', 1),
(58, '2023_02_17_060213_add_emoji_permission_to_emoji_table', 1),
(59, '2023_03_03_043038_create_followers_table', 1),
(60, '2023_03_03_063723_add_about_us_to_users_table', 1),
(61, '2023_03_04_040933_add_social_media_sharing_to_settings_table', 1),
(62, '2023_04_01_072129_add_posts_auto_post_deletion_to_posts_table', 1),
(63, '2023_04_07_050212_add_advanced_setting_seeder_to_settings_table', 1),
(64, '2023_04_07_054635_add_username_to_users_table', 1),
(65, '2023_04_12_124143_add_post_delete_to_posts_table', 1),
(66, '2023_04_13_111805_add_rss_tag_and_date_to_rss_feeds_table', 1),
(67, '2023_05_19_074931_add_index_for_post_id_on_analytics_table', 1),
(68, '2023_05_22_063220_add_show_captcha_on_registration_to_settings', 1),
(69, '2023_06_12_062723_create_email_sending', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `navigation`
--

CREATE TABLE `navigation` (
  `id` bigint UNSIGNED NOT NULL,
  `navigationable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navigationable_id` int DEFAULT NULL,
  `order_id` int DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `navigation`
--

INSERT INTO `navigation` (`id`, `navigationable_type`, `navigationable_id`, `order_id`, `parent_id`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\Category', 3, 3, NULL, '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(4, 'App\\Models\\Category', 4, 4, NULL, '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(7, 'App\\Models\\SubCategory', 2, 1, 3, '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(10, 'App\\Models\\SubCategory', 5, 1, 4, '2024-02-19 02:38:42', '2024-02-19 02:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` int NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `show_title` tinyint(1) NOT NULL,
  `show_right_column` tinyint(1) NOT NULL,
  `show_breadcrumb` tinyint(1) NOT NULL,
  `permission` tinyint(1) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `parent_menu_link` bigint UNSIGNED DEFAULT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` bigint UNSIGNED NOT NULL,
  `payment_gateway_id` int NOT NULL,
  `payment_gateway` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage_ad', 'Manage Ad', 'web', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(2, 'manage_plans', 'Manage Plans', 'web', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(3, 'cash_payment', 'Cash Payment', 'web', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(4, 'manage_menu', 'Manage Menu', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(5, 'manage_categories', 'Manage Categories', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(6, 'manage_sub_categories', 'Manage Sub Categories', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(7, 'manage_albums', 'Manage Albums', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(8, 'manage_albums_category', 'Manage Albums Category', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(9, 'manage_gallery', 'Manage Gallery', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(10, 'manage_pages', 'Manage Pages', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(11, 'manage_settings', 'Manage Settings', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(12, 'manage_staff', 'Manage Staff', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(13, 'manage_roles_permission', 'Manage Roles Permission', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(14, 'manage_add_post', 'Manage Add Post ', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(15, 'manage_all_post', 'Manage All Post', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(16, 'manage_rss_feeds', 'Manage Rss Feeds', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(17, 'manage_mail_setting', 'Manage Mail Setting', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(18, 'manage_polls', 'Manage polls', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(19, 'manage_all_user_can_vote', 'Manage All User Can Vote', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(20, 'manage_only_register_user_vote', 'Manage Only Register User Vote', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(21, 'manage_gallery_image', 'Manage Gallery Image', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(22, 'manage_language', 'Manage Language', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(23, 'manage_navigation', 'Manage Navigation', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(24, 'manage_seo_tools', 'Manage SEO Tools', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(25, 'manage_news_letter', 'Manage News Letter', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(26, 'manage_comment', 'Manage Comment', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(27, 'manage_contacts', 'Manage Contacts', 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `plans`
--

CREATE TABLE `plans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_count` int NOT NULL,
  `price` double(8,2) NOT NULL,
  `currency_id` bigint UNSIGNED NOT NULL,
  `frequency` int NOT NULL,
  `trial_days` int DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `plans`
--

INSERT INTO `plans` (`id`, `name`, `post_count`, `price`, `currency_id`, `frequency`, `trial_days`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'Standard', 7, 10.00, 1, 1, 7, 1, '2024-02-19 02:38:41', '2024-02-19 02:38:41');

-- --------------------------------------------------------

--
-- Структура таблицы `polls`
--

CREATE TABLE `polls` (
  `id` bigint UNSIGNED NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `question` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option5` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option6` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option7` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option8` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option9` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option10` varchar(181) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `vote_permission` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `poll_result`
--

CREATE TABLE `poll_result` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poll_id` bigint UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `breaking` tinyint(1) NOT NULL,
  `slider` tinyint(1) NOT NULL,
  `recommended` tinyint(1) NOT NULL,
  `show_on_headline` tinyint(1) NOT NULL,
  `show_registered_user` tinyint(1) NOT NULL,
  `optional_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_types` int NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_category_id` bigint UNSIGNED DEFAULT NULL,
  `scheduled_post` int NOT NULL DEFAULT '0',
  `scheduled_post_time` timestamp NULL DEFAULT NULL,
  `scheduled_post_delete` int DEFAULT NULL,
  `scheduled_delete_post_time` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `rss_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_rss` tinyint(1) NOT NULL DEFAULT '0',
  `rss_id` bigint UNSIGNED DEFAULT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `post_reactions`
--

CREATE TABLE `post_reactions` (
  `id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emoji_id` int NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rentals`
--

CREATE TABLE `rentals` (
  `id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `car_name` varchar(255) DEFAULT NULL,
  `base_price` decimal(8,2) DEFAULT NULL,
  `period` int DEFAULT NULL,
  `services` json DEFAULT NULL,
  `pickup_location` varchar(255) DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `pickup_time` time DEFAULT NULL,
  `return_location` varchar(255) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `return_time` time DEFAULT NULL,
  `customer_type` varchar(255) DEFAULT NULL,
  `customer_first_name` varchar(255) DEFAULT NULL,
  `customer_last_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `rentals`
--

INSERT INTO `rentals` (`id`, `created_at`, `updated_at`, `car_name`, `base_price`, `period`, `services`, `pickup_location`, `pickup_date`, `pickup_time`, `return_location`, `return_date`, `return_time`, `customer_type`, `customer_first_name`, `customer_last_name`, `customer_email`, `customer_phone`, `status`) VALUES
(1, '2024-02-21 13:49:26', '2024-02-21 13:49:26', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'dsgsg', '2024-02-21', '09:00:00', 'sdgdsg', '2024-02-28', '09:00:00', 'fiz', 'sdgsdg', 'sgsdg', 'sgdsg@sdgs.gsdg', '+7(212)414-14-41', 'new'),
(2, '2024-02-21 14:10:48', '2024-02-21 14:10:48', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'dsgsg', '2024-02-21', '09:00:00', 'sdgdsg', '2024-02-28', '09:00:00', 'fiz', 'sdgsdg', 'sgsdg', 'sgdsg@sdgs.gsdg', '+7(212)414-14-41', 'new'),
(3, '2024-02-21 14:12:59', '2024-02-21 14:12:59', 'Huyndai Elantra - 2023', '22000.00', 20, '123', 'sdgads', '2024-02-21', '09:00:00', 'adsg', '2024-02-28', '09:00:00', 'fiz', 'asdg', 'asdg', 'asdg@asf.asf', '+7(213)512-51-25', 'new'),
(4, '2024-02-21 14:41:09', '2024-02-21 14:41:09', 'Huyndai Elantra - 2023', '22000.00', 14, '123', 'sdsagasd', '2024-02-24', '09:00:00', 'asdgasdg', '2024-03-09', '09:00:00', 'fiz', 'asdgd', 'asdg', 'adsga@sds.dsg', '+7(412)421-42-14', 'new'),
(5, '2024-02-21 14:41:12', '2024-02-21 14:41:12', 'Huyndai Elantra - 2023', '22000.00', 14, '123', 'sdsagasd', '2024-02-24', '09:00:00', 'asdgasdg', '2024-03-09', '09:00:00', 'fiz', 'asdgd', 'asdg', 'adsga@sds.dsg', '+7(412)421-42-14', 'new'),
(6, '2024-02-21 14:42:34', '2024-02-21 14:42:34', 'Huyndai Accent - 2023', '19000.00', 35, '123', 's2  ffwfwf wq', '2024-02-24', '09:00:00', 'qfff423f fwqfqwf', '2024-03-30', '09:00:00', 'fiz', 'asdf', 'asdf', 'aasdf@sd.dsg', '+7(241)242-12-41', 'new'),
(7, '2024-02-21 14:42:35', '2024-02-21 14:42:35', 'Huyndai Accent - 2023', '19000.00', 35, '123', 's2  ffwfwf wq', '2024-02-24', '09:00:00', 'qfff423f fwqfqwf', '2024-03-30', '09:00:00', 'fiz', 'asdf', 'asdf', 'aasdf@sd.dsg', '+7(241)242-12-41', 'new'),
(8, '2024-02-21 14:43:37', '2024-02-21 14:43:37', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asfa', '2024-02-21', '09:00:00', 'asf', '2024-02-28', '09:00:00', 'fiz', 'asf', 'afasf', 'asf@sdgsd.sdg', '+7(235)253-25-23', 'new'),
(9, '2024-02-21 14:43:39', '2024-02-21 14:43:39', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asfa', '2024-02-21', '09:00:00', 'asf', '2024-02-28', '09:00:00', 'fiz', 'asf', 'afasf', 'asf@sdgsd.sdg', '+7(235)253-25-23', 'new'),
(10, '2024-02-21 14:44:02', '2024-02-21 14:44:02', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'sadgdasg', '2024-02-21', '09:00:00', 'asdgadsg', '2024-02-28', '09:00:00', 'fiz', 'asdg', 'asdg', 'asdg@sdg.sdg', '+7(241)242-14-12', 'new'),
(11, '2024-02-21 14:55:10', '2024-02-21 14:55:10', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asf', '2024-02-21', '09:00:00', 'asf', '2024-02-28', '09:00:00', 'fiz', 'asf', 'asf', 'asfa@sdgds.gs', '+7(241)412-14-41', 'new'),
(12, '2024-02-21 14:55:11', '2024-02-21 14:55:11', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asf', '2024-02-21', '09:00:00', 'asf', '2024-02-28', '09:00:00', 'fiz', 'asf', 'asf', 'asfa@sdgds.gs', '+7(241)412-14-41', 'new'),
(13, '2024-02-21 14:55:12', '2024-02-21 14:55:12', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asf', '2024-02-21', '09:00:00', 'asf', '2024-02-28', '09:00:00', 'fiz', 'asf', 'asf', 'asfa@sdgds.gs', '+7(241)412-14-41', 'new'),
(14, '2024-02-21 14:57:51', '2024-02-21 14:57:51', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'фыафыа', '2024-02-21', '09:00:00', 'фыафыфыа', '2024-02-28', '09:00:00', 'fiz', 'фыа', 'фыа', 'sdgdsg@sdgdsg.sdgsd', '+7(214)141-41-24', 'new'),
(15, '2024-02-21 15:03:40', '2024-02-21 15:03:40', 'Toyota Camry 50-55 - 2016', '21000.00', 14, '123', 'asfafa', '2024-02-24', '09:00:00', 'asfsaf', '2024-03-09', '09:00:00', 'fiz', 'asfa', 'fasf', 'asf@sdg.dsgdsg', '+7(214)241-24-24', 'new'),
(16, '2024-02-21 15:03:41', '2024-02-21 15:03:41', 'Toyota Camry 50-55 - 2016', '21000.00', 14, '123', 'asfafa', '2024-02-24', '09:00:00', 'asfsaf', '2024-03-09', '09:00:00', 'fiz', 'asfa', 'fasf', 'asf@sdg.dsgdsg', '+7(214)241-24-24', 'new'),
(17, '2024-02-21 15:03:42', '2024-02-21 15:03:42', 'Toyota Camry 50-55 - 2016', '21000.00', 14, '123', 'asfafa', '2024-02-24', '09:00:00', 'asfsaf', '2024-03-09', '09:00:00', 'fiz', 'asfa', 'fasf', 'asf@sdg.dsgdsg', '+7(214)241-24-24', 'new'),
(18, '2024-02-21 15:05:06', '2024-02-21 15:05:06', 'Huyndai Accent - 2015', '14000.00', 41, '123', 'saadsgas', '2024-03-02', '09:00:00', 'asdgasdgadsg', '2024-04-12', '09:00:00', 'fiz', 'saaa', 'asdg', 'asdgas@sdgds.gds', '+7(214)122-42-14', 'new'),
(19, '2024-02-21 15:05:08', '2024-02-21 15:05:08', 'Huyndai Accent - 2015', '14000.00', 41, '123', 'saadsgas', '2024-03-02', '09:00:00', 'asdgasdgadsg', '2024-04-12', '09:00:00', 'fiz', 'saaa', 'asdg', 'asdgas@sdgds.gds', '+7(214)122-42-14', 'new'),
(20, '2024-02-21 15:05:09', '2024-02-21 15:05:09', 'Huyndai Accent - 2015', '14000.00', 41, '123', 'saadsgas', '2024-03-02', '09:00:00', 'asdgasdgadsg', '2024-04-12', '09:00:00', 'fiz', 'saaa', 'asdg', 'asdgas@sdgds.gds', '+7(214)122-42-14', 'new'),
(21, '2024-02-21 15:13:42', '2024-02-21 15:13:42', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'фыа', '2024-02-21', '09:00:00', 'фыа', '2024-02-28', '09:00:00', 'fiz', 'фыа', 'фыа', 'sd@sd.sdg', '+7(235)325-32-53', 'new'),
(22, '2024-02-21 15:13:43', '2024-02-21 15:13:43', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'фыа', '2024-02-21', '09:00:00', 'фыа', '2024-02-28', '09:00:00', 'fiz', 'фыа', 'фыа', 'sd@sd.sdg', '+7(235)325-32-53', 'new'),
(23, '2024-02-21 15:26:21', '2024-02-21 15:26:21', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asfas', '2024-02-21', '09:00:00', 'asfas', '2024-02-28', '09:00:00', 'fiz', 'asfas', 'asfas', 'asfasf@sdgdsg.dsg', '+7(214)124-24-21', 'new'),
(24, '2024-02-21 15:26:42', '2024-02-21 15:26:42', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asfsaf', '2024-02-21', '09:00:00', 'asfasf', '2024-02-28', '09:00:00', 'fiz', 'asfasf', 'asfsafas', 'afasfasf@sdg.dsgd', '+7(124)214-21-42', 'new'),
(25, '2024-02-21 15:26:43', '2024-02-21 15:26:43', 'Huyndai Accent - 2015', '14000.00', 7, '123', 'asfsaf', '2024-02-21', '09:00:00', 'asfasf', '2024-02-28', '09:00:00', 'fiz', 'asfasf', 'asfsafas', 'afasfasf@sdg.dsgd', '+7(124)214-21-42', 'new'),
(26, '2024-02-21 16:18:34', '2024-02-21 18:56:04', 'Huyndai Accent - 2015', '14000.00', 12, '123', 'ыфафыва', '2024-02-23', '09:00:00', 'afsf', '2024-03-06', '09:00:00', 'fiz', 'фыа', 'ыфаыфа', 'sfsff@sdgds.gds', '+7(242)342-44-14', 'canceled');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `guard_name` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `is_default`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'Customer', 1, 'web', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(2, 'admin', 'Admin', 1, 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(3, 'staff', 'Staff', 1, 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(4, 'moderator', 'Moderator', 1, 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(5, 'author', 'Author', 1, 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(6, 'user', 'User', 1, 'web', '2024-02-19 02:38:42', '2024-02-19 02:38:42');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(15, 3),
(18, 3),
(21, 3),
(5, 4),
(8, 4),
(9, 4),
(10, 4),
(15, 4),
(16, 5),
(15, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `rss_feeds`
--

CREATE TABLE `rss_feeds` (
  `id` bigint UNSIGNED NOT NULL,
  `feed_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feed_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_post` int NOT NULL,
  `language_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `subcategory_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `auto_update` tinyint(1) NOT NULL DEFAULT '1',
  `show_btn` tinyint(1) NOT NULL DEFAULT '1',
  `post_draft` tinyint(1) NOT NULL DEFAULT '0',
  `scheduled_delete_post_time` timestamp NULL DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `seo_tools`
--

CREATE TABLE `seo_tools` (
  `id` bigint UNSIGNED NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `seo_tools`
--

INSERT INTO `seo_tools` (`id`, `lang_id`, `site_title`, `home_title`, `site_description`, `keyword`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 6, 'Прокат автомобилей без водителей в Астане | Самые низкие цены<', 'Прокат автомобилей без водителей в Астане | Самые низкие цены<', 'Прокат автомобилей без водителей по городу Астана с самыми низкими ценами. У нас широкий выбор автомобилей разных классов. Бронируйте онлайн прямо сейчас и экономьте на прокате автомобиля', 'прокат автомобилей, без водителей, город Астана, низкие цены, бронирование онлайн', '', '2024-02-19 02:38:42', '2024-02-21 14:24:16');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'rss_feed_update_time', '3', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(2, 'header', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(3, 'index_top', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(4, 'index_bottom', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(5, 'post_details', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(6, 'details_side', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(7, 'categories', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(8, 'trending_post', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(9, 'popular_news', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(10, 'trending_post_index_page', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(11, 'popular_news_index_page', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(12, 'recommended_post_index_page', '0', '2024-02-19 02:38:41', '2024-02-21 02:47:47'),
(13, 'manual_payment_guide', '', '2024-02-19 02:38:41', '2024-02-19 02:38:41'),
(14, 'facebook', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(15, 'twitter', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(16, 'linkedin', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(17, 'reddit', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(18, 'whatsapp', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(19, 'registration_system', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(20, 'emoji_system', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(21, 'show_captcha_on_registration', '0', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(22, 'application_name', 'Qazqar', '2024-02-19 02:38:42', '2024-02-21 17:19:00'),
(23, 'contact_no', '+91 70963 36561', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(24, 'email', 'test@email.com', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(25, 'copy_right_text', 'All Rights Reserved ©2022', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(26, 'site_key', ' ', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(27, 'secret_key', ' ', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(28, 'show_captcha', '0', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(29, 'facebook_url', 'https://www.facebook.com/infyom/', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(30, 'twitter_url', 'https://twitter.com/infyom?lang=en', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(31, 'instagram_url', 'https://www.instagram.com/?hl=en', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(32, 'pinterest_url', 'https://www.pinterest.com/', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(33, 'linkedin_url', 'https://www.linkedin.com/organization-guest/company/infyom-technologies?challengeId=AQFgQaMxwSxCdAAAAXOA_wosiB2vYdQEoITs6w676AzV8cu8OzhnWEBNUQ7LCG4vds5-A12UIQk1M4aWfKmn6iM58OFJbpoRiA&submissionId=0088318b-13b3-2416-9933-b463017e531e', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(34, 'vk_url', 'https://vk.com/?lang=en', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(35, 'telegram_url', 'https://www.telegram.org/k/', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(36, 'youtube_url', 'https://www.youtube.com/', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(37, 'show_cookie', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(38, 'cookie_warning', 'Your experience on this site will be improved by allowing cookies.', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(39, 'logo', 'http://localhost/uploads/logo\\14\\logo.png', '2024-02-19 02:38:42', '2024-02-21 17:20:21'),
(40, 'favicon', 'http://localhost/uploads/favicon\\15\\favicon-32x32.png', '2024-02-19 02:38:42', '2024-02-21 17:20:21'),
(41, 'contact_address', 'C-303, Atlanta Shopping Mall,Nr.Sudama Chowk, Mota Varachha,Surat-394101, Gujarat, India.', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(42, 'about_text', 'Leading Web & Mobile Development Company with proven expertise, India\'s Leading Laravel Open-Source contributor with over 3 million+ Downloads.', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(43, 'terms&conditions', '', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(44, 'privacy', '', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(45, 'support', '', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(46, 'comment_approved', '1', '2024-02-19 02:38:42', '2024-02-19 02:38:42'),
(47, 'front_language', '6', '2024-02-19 02:38:42', '2024-02-21 17:20:21');

-- --------------------------------------------------------

--
-- Структура таблицы `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sort_list_post`
--

CREATE TABLE `sort_list_post` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `sort_list_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` text COLLATE utf8mb4_unicode_ci,
  `sort_list_content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `plan_id` bigint UNSIGNED NOT NULL,
  `transaction_id` bigint UNSIGNED DEFAULT NULL,
  `plan_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `payable_amount` double(8,2) NOT NULL,
  `plan_frequency` int NOT NULL,
  `starts_at` date NOT NULL,
  `ends_at` date NOT NULL,
  `trial_ends_at` date DEFAULT NULL,
  `no_of_post` int NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `payment_type` text COLLATE utf8mb4_unicode_ci,
  `reject_notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_in_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `parent_category_id` bigint UNSIGNED NOT NULL,
  `lang_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `type` int NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` int DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about_us` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `contact`, `dob`, `gender`, `status`, `language`, `dark_mode`, `email_verified_at`, `password`, `type`, `blood_group`, `remember_token`, `created_at`, `updated_at`, `about_us`) VALUES
(1, 'Super', 'Admin', 'admin@admin.com', NULL, '1234567890', NULL, 1, 1, 'ru', 0, '2024-02-19 02:38:42', '$2y$10$OeCIVGNW9wLPKfBXL7rHX.Kz4c0V2kBm9UGi3/RJWq3sKkJmugHke', 1, NULL, NULL, '2024-02-19 02:38:42', '2024-02-19 08:41:05', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `video_post`
--

CREATE TABLE `video_post` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `video_content` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail_image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_embed_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ad_spaces`
--
ALTER TABLE `ad_spaces`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `album_categories`
--
ALTER TABLE `album_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_categories_album_id_foreign` (`album_id`),
  ADD KEY `album_categories_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `analytics_post_id_index` (`post_id`);

--
-- Индексы таблицы `article_post`
--
ALTER TABLE `article_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_post_post_id_foreign` (`post_id`);

--
-- Индексы таблицы `audio_post`
--
ALTER TABLE `audio_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audio_post_post_id_foreign` (`post_id`);

--
-- Индексы таблицы `bulk_mails`
--
ALTER TABLE `bulk_mails`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `emoji`
--
ALTER TABLE `emoji`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emoji_name_unique` (`name`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followers_following_foreign` (`following`),
  ADD KEY `followers_followers_foreign` (`followers`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_title_unique` (`title`),
  ADD KEY `galleries_lang_id_foreign` (`lang_id`),
  ADD KEY `galleries_album_id_foreign` (`album_id`),
  ADD KEY `galleries_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `gallery_post`
--
ALTER TABLE `gallery_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_post_post_id_foreign` (`post_id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_iso_code_unique` (`iso_code`);

--
-- Индексы таблицы `mail_settings`
--
ALTER TABLE `mail_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_menu_id_foreign` (`parent_menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_parent_menu_link_foreign` (`parent_menu_link`),
  ADD KEY `pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plans_name_unique` (`name`),
  ADD KEY `plans_currency_id_foreign` (`currency_id`);

--
-- Индексы таблицы `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `polls_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `poll_result`
--
ALTER TABLE `poll_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_result_user_id_foreign` (`user_id`),
  ADD KEY `poll_result_poll_id_foreign` (`poll_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_created_by_foreign` (`created_by`),
  ADD KEY `posts_lang_id_foreign` (`lang_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `posts_rss_id_foreign` (`rss_id`);

--
-- Индексы таблицы `post_reactions`
--
ALTER TABLE `post_reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_reactions_post_id_foreign` (`post_id`);

--
-- Индексы таблицы `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `rss_feeds`
--
ALTER TABLE `rss_feeds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rss_feeds_feed_url_unique` (`feed_url`),
  ADD KEY `rss_feeds_language_id_foreign` (`language_id`),
  ADD KEY `rss_feeds_user_id_foreign` (`user_id`),
  ADD KEY `rss_feeds_category_id_foreign` (`category_id`),
  ADD KEY `rss_feeds_subcategory_id_foreign` (`subcategory_id`);

--
-- Индексы таблицы `seo_tools`
--
ALTER TABLE `seo_tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_tools_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`),
  ADD KEY `social_accounts_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `sort_list_post`
--
ALTER TABLE `sort_list_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sort_list_post_post_id_foreign` (`post_id`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_plan_id_foreign` (`plan_id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `subscriptions_transaction_id_foreign` (`transaction_id`);

--
-- Индексы таблицы `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_parent_category_id_foreign` (`parent_category_id`),
  ADD KEY `sub_categories_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Индексы таблицы `video_post`
--
ALTER TABLE `video_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_post_post_id_foreign` (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ad_spaces`
--
ALTER TABLE `ad_spaces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `album_categories`
--
ALTER TABLE `album_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `article_post`
--
ALTER TABLE `article_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `audio_post`
--
ALTER TABLE `audio_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `bulk_mails`
--
ALTER TABLE `bulk_mails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT для таблицы `emoji`
--
ALTER TABLE `emoji`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `gallery_post`
--
ALTER TABLE `gallery_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `mail_settings`
--
ALTER TABLE `mail_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT для таблицы `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `poll_result`
--
ALTER TABLE `poll_result`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `post_reactions`
--
ALTER TABLE `post_reactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `rss_feeds`
--
ALTER TABLE `rss_feeds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `seo_tools`
--
ALTER TABLE `seo_tools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sort_list_post`
--
ALTER TABLE `sort_list_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `video_post`
--
ALTER TABLE `video_post`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `album_categories`
--
ALTER TABLE `album_categories`
  ADD CONSTRAINT `album_categories_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `album_categories_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article_post`
--
ALTER TABLE `article_post`
  ADD CONSTRAINT `article_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `audio_post`
--
ALTER TABLE `audio_post`
  ADD CONSTRAINT `audio_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_followers_foreign` FOREIGN KEY (`followers`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_following_foreign` FOREIGN KEY (`following`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `album_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `gallery_post`
--
ALTER TABLE `gallery_post`
  ADD CONSTRAINT `gallery_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_menu_id_foreign` FOREIGN KEY (`parent_menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pages_parent_menu_link_foreign` FOREIGN KEY (`parent_menu_link`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `poll_result`
--
ALTER TABLE `poll_result`
  ADD CONSTRAINT `poll_result_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poll_result_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_rss_id_foreign` FOREIGN KEY (`rss_id`) REFERENCES `rss_feeds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `post_reactions`
--
ALTER TABLE `post_reactions`
  ADD CONSTRAINT `post_reactions_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rss_feeds`
--
ALTER TABLE `rss_feeds`
  ADD CONSTRAINT `rss_feeds_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rss_feeds_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rss_feeds_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rss_feeds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `seo_tools`
--
ALTER TABLE `seo_tools`
  ADD CONSTRAINT `seo_tools_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`);

--
-- Ограничения внешнего ключа таблицы `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sort_list_post`
--
ALTER TABLE `sort_list_post`
  ADD CONSTRAINT `sort_list_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscriptions_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_categories_parent_category_id_foreign` FOREIGN KEY (`parent_category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `video_post`
--
ALTER TABLE `video_post`
  ADD CONSTRAINT `video_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
