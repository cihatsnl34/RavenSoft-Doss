-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Nis 2022, 13:24:33
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db-doss`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirdTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirdText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiveTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiveText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sixTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sixText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sevenTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eightTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eightText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nineTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nineText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevenTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevenText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `twelveTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twelveText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirteenTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirteenText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourteenTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourteenText` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `firstTitle`, `firstText`, `secondTitle`, `thirdTitle`, `thirdText`, `fourTitle`, `fourText`, `fiveTitle`, `fiveText`, `sixTitle`, `sixText`, `sevenTitle`, `eightTitle`, `eightText`, `nineTitle`, `nineText`, `tenTitle`, `tenText`, `elevenTitle`, `elevenText`, `twelveTitle`, `twelveText`, `thirteenTitle`, `thirteenText`, `fourteenTitle`, `fourteenText`, `created_at`, `updated_at`) VALUES
(2, '1 Başlık', '1 Başlık', '2 Başlık', '3 Başlık', '3 Başlık', '4 Başlık', '4 Başlık', '5 Başlık', '5 Başlık', '6 Başlık', '6 Başlık', '7 Başlık', '8 Başlık', '8 Başlık', '9 Başlık', '9 Başlık', '10 Başlık', '10 Başlık', '11 Başlık', '11 Başlık', '12 Başlık', '12 Başlık', '13 Başlık', '13 Başlık', '14 Başlık', '14 Başlık', '2022-04-05 19:56:11', '2022-04-05 19:56:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$kZbWtAd6n.5YSf4t6gVGhu8k7YAQP13rv5KIA9V4ZXvo/CCxQZkDC', NULL, '2022-04-04 16:16:27', '2022-04-04 16:16:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `concacts`
--

CREATE TABLE `concacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebookUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedinUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `concacts`
--

INSERT INTO `concacts` (`id`, `email`, `phone`, `facebookUrl`, `twitterUrl`, `instagramUrl`, `linkedinUrl`, `adress`, `created_at`, `updated_at`) VALUES
(2, 'paybull32@paybull.com', '23123211', 'www.google.com/', 'asd', 'asd', 'asd', 'asdasdasdasd', '2022-04-05 16:30:30', '2022-04-05 16:36:15'),
(3, 'deneme@deneme.com', '11111', 'asd', 'asd', 'ads', 'asd', 'asdasd213', '2022-04-05 16:37:15', '2022-04-05 16:37:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(3, 'deneme', 'opet.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` tinyint(1) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `department`, `subject`, `name`, `email`, `message`, `file`, `created_at`, `updated_at`) VALUES
(2, 1, 'cihat', 'test', 'user@user.com', 'asdasd', '1640930333985.jpg', '2022-04-05 17:30:44', '2022-04-05 17:30:44'),
(3, 1, 'cihat', 'test', 'user@user.com', 'asdasd', '1640930333985.jpg', '2022-04-05 18:44:43', '2022-04-05 18:44:43'),
(4, 0, 'dsf', 'sdfsdfsdf', 'sdfsdfsdf@gmail.com', 'sdefsdf', 'CihatSenelCv.pdf', '2022-04-05 18:45:13', '2022-04-05 18:45:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_18_093949_create_admins_table', 1),
(6, '2022_04_04_195202_create_abouts_table', 2),
(7, '2022_04_04_204902_create_resources_table', 2),
(8, '2022_04_04_205306_resource', 2),
(9, '2022_04_04_210017_create_references_table', 3),
(10, '2022_04_04_210100_reference', 3),
(11, '2022_04_05_150150_about', 4),
(12, '2022_04_05_150420_create_abouts_table', 5),
(13, '2022_04_05_150503_about', 5),
(14, '2022_04_05_185002_create_concacts_table', 6),
(15, '2022_04_05_185028_create_messages_table', 6),
(16, '2022_04_05_185648_concact', 6),
(17, '2022_04_05_185709_message', 6),
(18, '2022_04_05_232434_create_images_table', 7),
(19, '2022_04_05_232727_image', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CompanyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CompanyLogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `references`
--

INSERT INTO `references` (`id`, `CompanyName`, `CompanyLogo`, `created_at`, `updated_at`) VALUES
(2, 'logo', 'akbank.svg', NULL, NULL),
(3, 'deneme', 'esenler.svg', NULL, NULL),
(4, 'deneme2', 'meb.svg', NULL, NULL),
(5, 'deneme', 'akbank.svg', NULL, NULL),
(6, 'denem', 'logo.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Tablo için indeksler `concacts`
--
ALTER TABLE `concacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `concacts_email_unique` (`email`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `concacts`
--
ALTER TABLE `concacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
