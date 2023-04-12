-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table tubespsi.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_menu` int NOT NULL,
  `id_transaction` int DEFAULT NULL,
  `qty` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CART',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.carts: ~33 rows (approximately)
INSERT INTO `carts` (`id`, `id_user`, `id_menu`, `id_transaction`, `qty`, `status`, `created_at`, `updated_at`) VALUES
	(37, 2, 2, NULL, 2, 'CHECKOUT', '2023-03-27 05:38:40', '2023-03-27 07:58:14'),
	(39, 2, 2, NULL, 2, 'CHECKOUT', '2023-03-27 14:59:52', '2023-03-27 15:03:22'),
	(40, 2, 3, NULL, 1, 'CHECKOUT', '2023-03-27 15:01:01', '2023-03-27 15:03:22'),
	(41, 2, 3, NULL, 1, 'CHECKOUT', '2023-03-27 15:05:54', '2023-03-27 15:06:01'),
	(42, 2, 2, NULL, 1, 'CHECKOUT', '2023-03-27 15:07:21', '2023-03-27 15:07:38'),
	(45, 2, 2, 7, 2, 'CHECKOUT', '2023-03-27 15:44:20', '2023-03-27 15:44:51'),
	(46, 2, 3, 7, 1, 'CHECKOUT', '2023-03-27 15:44:21', '2023-03-27 15:44:51'),
	(47, 2, 2, 8, 2, 'CHECKOUT', '2023-03-27 17:16:15', '2023-03-27 17:17:05'),
	(51, 2, 2, 9, 1, 'CHECKOUT', '2023-03-27 19:49:19', '2023-03-27 19:50:00'),
	(52, 2, 2, 10, 1, 'CHECKOUT', '2023-03-29 00:51:56', '2023-03-29 00:53:20'),
	(54, 20, 2, 11, 2, 'CHECKOUT', '2023-03-29 08:15:17', '2023-03-29 08:16:13'),
	(55, 20, 4, 12, 2, 'CHECKOUT', '2023-03-30 22:13:59', '2023-03-30 22:14:24'),
	(57, 20, 2, 13, 1, 'CHECKOUT', '2023-03-30 23:49:36', '2023-03-30 23:49:55'),
	(58, 20, 2, 14, 1, 'CHECKOUT', '2023-03-30 23:53:17', '2023-03-30 23:53:32'),
	(59, 20, 4, 15, 1, 'CHECKOUT', '2023-04-03 19:22:59', '2023-04-03 19:23:17'),
	(60, 20, 4, 16, 1, 'CHECKOUT', '2023-04-04 06:45:42', '2023-04-04 06:46:04'),
	(61, 2, 4, 17, 1, 'CHECKOUT', '2023-04-04 06:49:52', '2023-04-04 06:50:24'),
	(63, 20, 4, 18, 2, 'CHECKOUT', '2023-04-07 08:11:39', '2023-04-07 08:12:21'),
	(64, 20, 2, 19, 1, 'CHECKOUT', '2023-04-07 08:25:23', '2023-04-07 08:26:10'),
	(65, 20, 2, 20, 1, 'CHECKOUT', '2023-04-10 16:05:04', '2023-04-10 16:05:41'),
	(66, 20, 4, 21, 1, 'CHECKOUT', '2023-04-10 16:07:00', '2023-04-10 16:07:16'),
	(67, 2, 4, 22, 1, 'CHECKOUT', '2023-04-10 18:23:21', '2023-04-10 18:23:38'),
	(68, 20, 2, 23, 1, 'CHECKOUT', '2023-04-10 18:41:38', '2023-04-10 18:42:10'),
	(69, 20, 5, 24, 2, 'CHECKOUT', '2023-04-10 19:43:26', '2023-04-10 19:45:34'),
	(70, 20, 2, 25, 1, 'CHECKOUT', '2023-04-11 05:40:47', '2023-04-11 05:41:17'),
	(71, 20, 6, 26, 1, 'CHECKOUT', '2023-04-11 06:00:58', '2023-04-11 06:01:14'),
	(72, 20, 5, 27, 1, 'CHECKOUT', '2023-04-11 06:05:49', '2023-04-11 06:06:07'),
	(73, 20, 2, 28, 1, 'CHECKOUT', '2023-04-11 06:08:55', '2023-04-11 06:09:13'),
	(74, 20, 2, 29, 1, 'CHECKOUT', '2023-04-12 04:16:23', '2023-04-12 04:16:44'),
	(75, 20, 5, 30, 1, 'CHECKOUT', '2023-04-12 04:20:03', '2023-04-12 04:20:24'),
	(76, 20, 2, 31, 1, 'CHECKOUT', '2023-04-12 04:21:15', '2023-04-12 04:21:29'),
	(77, 20, 2, 32, 1, 'CHECKOUT', '2023-04-12 04:23:40', '2023-04-12 04:23:59'),
	(78, 20, 2, 33, 1, 'CHECKOUT', '2023-04-12 04:25:40', '2023-04-12 04:25:55'),
	(79, 2, 2, 34, 1, 'CHECKOUT', '2023-04-12 06:54:04', '2023-04-12 06:54:39'),
	(80, 2, 5, 35, 1, 'CHECKOUT', '2023-04-12 07:29:34', '2023-04-12 07:30:02'),
	(81, 2, 6, 35, 1, 'CHECKOUT', '2023-04-12 07:29:38', '2023-04-12 07:30:02'),
	(82, 2, 2, 41, 1, 'CHECKOUT', '2023-04-12 08:51:52', '2023-04-12 09:05:10'),
	(83, 2, 2, 37, 1, 'CHECKOUT', '2023-04-12 08:59:05', '2023-04-12 08:59:20'),
	(84, 2, 5, 43, 1, 'CHECKOUT', '2023-04-12 09:00:04', '2023-04-12 09:08:36'),
	(85, 2, 2, 44, 1, 'CHECKOUT', '2023-04-12 09:11:54', '2023-04-12 09:12:08'),
	(86, 2, 5, 44, 1, 'CHECKOUT', '2023-04-12 09:11:55', '2023-04-12 09:12:08');

-- Dumping structure for table tubespsi.checkouts
CREATE TABLE IF NOT EXISTS `checkouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.checkouts: ~2 rows (approximately)
INSERT INTO `checkouts` (`id`, `id_user`, `pembayaran`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
	(32, 20, 'Linkaja', 'Jalan Bunga Merak, Lowokwaru, Malang, Kota Malang, East Java, 65113, Indonesia', 'DIKIRIM', '2023-04-12 04:23:59', '2023-04-12 04:24:26'),
	(33, 20, 'Gopay', 'Jalan Bunga Merak, Lowokwaru, Malang, Kota Malang, East Java, 65113, Indonesia', 'DIKIRIM', '2023-04-12 04:25:55', '2023-04-12 04:26:16'),
	(34, 2, 'Gopay', 'Jalan Gudang Selatan, Merdeka, Sumur Bandung, Bandung, West Java, 40112, Indonesia', 'SELESAI', '2023-04-12 06:54:39', '2023-04-12 07:21:18'),
	(35, 2, 'Gopay', 'Kebon Pisang, Sumur Bandung, Bandung, West Java, 40112, Indonesia', 'SELESAI', '2023-04-12 07:30:02', '2023-04-12 08:16:55'),
	(36, 2, 'Gopay', 'Kebon Pisang, Sumur Bandung, Bandung, West Java, Jawa, 40261, Indonesia', 'CHECKOUT', '2023-04-12 08:57:19', '2023-04-12 08:57:23'),
	(37, 2, 'Shopeepay', 'Babakan Asih, Bojongloa Kaler, Bandung, West Java, 40232, Indonesia', 'CHECKOUT', '2023-04-12 08:59:20', '2023-04-12 08:59:24'),
	(38, 2, 'Gopay', 'SMP BPP, 10, Jalan Kartini, Kebon Pisang, Sumur Bandung, Bandung, West Java, Jawa, 40112, Indonesia', 'PENDING', '2023-04-12 09:02:22', '2023-04-12 09:02:22'),
	(39, 2, 'Gopay', 'SMP BPP, 10, Jalan Kartini, Kebon Pisang, Sumur Bandung, Bandung, West Java, Jawa, 40112, Indonesia', 'PENDING', '2023-04-12 09:03:41', '2023-04-12 09:03:41'),
	(40, 2, 'Gopay', 'SMP BPP, 10, Jalan Kartini, Kebon Pisang, Sumur Bandung, Bandung, West Java, Jawa, 40112, Indonesia', 'PENDING', '2023-04-12 09:04:15', '2023-04-12 09:04:15'),
	(43, 2, 'Gopay', 'SMP BPP, 10, Jalan Kartini, Kebon Pisang, Sumur Bandung, Bandung, West Java, Jawa, 40112, Indonesia', 'SELESAI', '2023-04-12 09:08:36', '2023-04-12 09:09:26'),
	(44, 2, 'Gopay', 'RW 01, Sindangkerta, Bandung Barat, West Java, Indonesia', 'SELESAI', '2023-04-12 09:12:08', '2023-04-12 09:12:34');

-- Dumping structure for table tubespsi.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.contacts: ~0 rows (approximately)

-- Dumping structure for table tubespsi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tubespsi.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_resto` int NOT NULL,
  `makanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.menus: ~4 rows (approximately)
INSERT INTO `menus` (`id`, `id_resto`, `makanan`, `deskripsi`, `harga`, `image`, `created_at`, `updated_at`) VALUES
	(2, 2, 'Lalapan Ayam Crispy', 'Lalapan ayam crispy enak', 50000, '1679962525.jpg', '2023-03-19 09:44:45', '2023-03-27 17:15:25'),
	(4, 4, 'Lalapan Ayam Crispy', 'Special Lalapan', 200000, '1679971688.jpg', '2023-03-27 19:48:08', '2023-03-27 19:48:08'),
	(5, 2, 'Lalapan Ayam Crispy', 'Special Lalapan Enak', 150000, '1681178452.jpg', '2023-03-30 22:10:37', '2023-04-10 19:00:52'),
	(6, 2, 'Chicken Steak', 'Special lalapan ayam, bebek, ikan, dan lainnya', 150000, '1681178466.jpg', '2023-04-10 16:04:41', '2023-04-10 19:01:06');

-- Dumping structure for table tubespsi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_19_153335_create_restos_table', 2),
	(6, '2023_03_19_153901_create_menus_table', 2),
	(7, '2023_03_23_101300_create_contacts_table', 3),
	(8, '2023_03_26_054504_create_carts_table', 3),
	(9, '2023_03_27_145508_create_checkouts_table', 4),
	(10, '2023_04_03_154049_create_reviews_table', 5);

-- Dumping structure for table tubespsi.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tubespsi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.personal_access_tokens: ~6 rows (approximately)
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\User', 1, 'MyApp', '1bce14cb1448b14c167eb32d7afc621d7060bebe456732293decab08c4c1c669', '["*"]', NULL, NULL, '2023-03-04 21:55:22', '2023-03-04 21:55:22'),
	(2, 'App\\Models\\User', 1, 'MyApp', '00ff9e0b8faede4967b998234df31d38221fdc49983a78ba4c34f8ec7ea53ff3', '["*"]', NULL, NULL, '2023-03-04 21:55:39', '2023-03-04 21:55:39'),
	(3, 'App\\Models\\User', 1, 'MyApp', '71fee0281bc0f4fe2a860bad2403cb260bfbaff0a2a91b49dc8bbecb6e8a997b', '["*"]', NULL, NULL, '2023-03-05 04:07:44', '2023-03-05 04:07:44'),
	(4, 'App\\Models\\User', 1, 'MyApp', '4cce36160904387619a2d6526f8b69c816d2685112446b152fa7b79d8349cc6f', '["*"]', NULL, NULL, '2023-03-05 04:11:05', '2023-03-05 04:11:05'),
	(5, 'App\\Models\\User', 2, 'MyApp', '7ca0db248d9660e4650e07e17cec44d07b4580218868bd25e00a18341364364a', '["*"]', NULL, NULL, '2023-03-13 07:39:59', '2023-03-13 07:39:59'),
	(6, 'App\\Models\\User', 2, 'MyApp', '4e9168ea57d9cf2a60085556488fc4af19c233a208991bb958539f6fe5736dd0', '["*"]', NULL, NULL, '2023-03-13 07:40:13', '2023-03-13 07:40:13');

-- Dumping structure for table tubespsi.restos
CREATE TABLE IF NOT EXISTS `restos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.restos: ~4 rows (approximately)
INSERT INTO `restos` (`id`, `nama`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
	(2, 'Resto Dapur Cobek', 'Special Lalapan Enak', '1679962470.jpg', '2023-03-19 09:05:40', '2023-03-27 17:14:30'),
	(4, 'Dapur Dee - Suhat', 'Lalapan yang enak dan dilengkapi dengan sambal tomat yang lezat', '1679971662.jpg', '2023-03-27 19:47:42', '2023-03-27 19:47:42'),
	(5, 'Resto Dapur Emak', 'Special lalapan ayam, bebek, ikan, dan lainnya', '1681179323.jpg', '2023-04-10 19:14:51', '2023-04-10 19:15:23'),
	(6, 'Resto Jepang', 'Spesial makanan jepang', '1681179369.jpg', '2023-04-10 19:16:09', '2023-04-10 19:16:09');

-- Dumping structure for table tubespsi.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_menu` int NOT NULL,
  `id_user` int NOT NULL,
  `value` int NOT NULL,
  `ulasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_transaction` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.reviews: ~8 rows (approximately)
INSERT INTO `reviews` (`id`, `id_menu`, `id_user`, `value`, `ulasan`, `created_at`, `updated_at`, `id_transaction`) VALUES
	(3, 4, 20, 5, 'pppppppppp', '2023-04-07 03:26:14', '2023-04-12 09:10:26', NULL),
	(4, 2, 20, 5, 'abcv', '2023-04-07 08:27:08', '2023-04-11 06:09:47', NULL),
	(5, 5, 20, 5, 'ppppp', '2023-04-10 22:04:56', '2023-04-12 09:09:45', NULL),
	(6, 6, 20, 5, 'bhjgs', '2023-04-11 06:02:53', '2023-04-11 06:02:53', NULL),
	(7, 2, 2, 5, 'Harga sangat murah dan bersahabat', '2023-04-12 07:22:06', '2023-04-12 07:22:06', NULL),
	(8, 5, 2, 5, 'pppppppp', '2023-04-12 09:08:36', '2023-04-12 09:11:38', 43),
	(9, 2, 2, 5, 'baru 1', '2023-04-12 09:12:08', '2023-04-12 09:12:45', 44),
	(10, 5, 2, 4, 'baru 2', '2023-04-12 09:12:08', '2023-04-12 09:12:45', 44);

-- Dumping structure for table tubespsi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubespsi.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
	(2, 'user', 'user@gmail.com', '2023-03-13 10:47:12', '$2y$10$oe0aeSy592gvuCuHnTm6ZuyFbW.ifYMHrrN3Ee7KwDu.NjenF5Qjy', NULL, 'USER', '2023-03-13 07:39:59', '2023-03-13 07:39:59'),
	(5, 'admin', 'admin@gmail.com', '2023-03-13 10:47:12', '$2y$10$OQTba1p.SzWjmQg1hfGpMua7m4V66Qc2KzMQIUPL02Zs.V.nL66ny', 'b1vQdt36lKGvXJGNx10GjltFoxir8HM60LOVxvFnyiXSeRWodSPv4aQlrFNC', 'ADMIN', '2023-03-13 08:48:35', '2023-03-13 10:48:22'),
	(6, 'resto', 'resto@gmail.com', '2023-03-27 15:05:19', '$2y$10$31O/w.iKEqi5YGCHh0Cxq.65dnycftHl5inPyK9hNUHjotHkCcl12', NULL, 'RESTO', '2023-03-27 15:05:19', '2023-03-27 15:05:19'),
	(20, 'Fadia', 'fadiairsania123@gmail.com', '2023-03-29 08:43:57', '$2y$10$cKyyQwdSi7nhN9Vxv1dzveXtdAocYhBWspFyh4z00KcgM134.q97m', NULL, 'USER', '2023-03-29 08:09:52', '2023-03-29 08:43:57');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
