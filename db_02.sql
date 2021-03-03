-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table muh5.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spverify` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '= md5 của pass đầu tiên',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.admins: ~2 rows (approximately)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `spverify`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'test123', 'haprosd5@gmail.com', NULL, '$2y$10$c61FhUNHfnutlrC8W2iq8.Y0crwWedSvMHeWaiaSjOruAEZEPuQ/S', 'ff624fb496c9843e08ef9ebee3139d37', NULL, '2021-02-27 15:09:11', '2021-02-27 15:09:11'),
	(4, 'haprosd', 'tahongha.tn@gmail.com', NULL, '$2y$10$NxwIeKNo.P2Mg5WWKG7z3.xTze6rPmpJIYAe2RFb5NfWoxzib7H1O', 'ff624fb496c9843e08ef9ebee3139d37', NULL, '2021-03-03 06:20:02', '2021-03-03 06:20:02');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table muh5.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.categories: ~0 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table muh5.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table muh5.giftcodes
CREATE TABLE IF NOT EXISTS `giftcodes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.giftcodes: ~0 rows (approximately)
DELETE FROM `giftcodes`;
/*!40000 ALTER TABLE `giftcodes` DISABLE KEYS */;
/*!40000 ALTER TABLE `giftcodes` ENABLE KEYS */;

-- Dumping structure for table muh5.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.migrations: ~3 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table muh5.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.news: ~2 rows (approximately)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `slug`, `descriptions`, `feature_img`, `author`, `content`, `cate_id`, `status`, `created_at`, `updated_at`) VALUES
	(10, 'Máy chủ mới MU H5: Khởi Nguyên 6 | 10h - 19/2/2021', 'may-chu-moi-mu-h5-khoi-nguyen-6-10h-1922021', 'Game Mu H5 Thiên Sứ sẽ khai mở sever mới MU H5: Khởi Nguyên 6 vào 10h T.6 ngày 19/2/2021\r\nCác ưu đãi cực khủng khi tham gia', 'share.jpg', 1, '<p>Game Mu H5 Thi&ecirc;n Sứ&nbsp;sẽ khai mở sever mới MU H5: Khởi Nguy&ecirc;n 6&nbsp;v&agrave;o 10h T.6&nbsp;ng&agrave;y 19/2/2021<br />\r\nC&aacute;c ưu đ&atilde;i cực khủng khi tham gia<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />&nbsp;Tạo nh&acirc;n vật nh&acirc;n ngay VIP 6 + 1.000.000 kc<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />H&agrave;ng tuần c&oacute; sự kiện war guild Pk cực chất<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />&nbsp;️Phần thưởng kim cương nhiều trong c&aacute;c hoạt động, sự kiện, điểm danh vọng.<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />&nbsp;C&aacute;c sự kiện diễn ra hằng ng&agrave;y: Săn Boss, Đấu Trường, Đoạt Bảo.<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />Nhiều event nhận kc, vật phẩm VIP miễn ph&iacute;.<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />Săn boss rơi đồ VIP<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />Ph&aacute;t code miễn ph&iacute; hằng ng&agrave;y<br />\r\nV&agrave; c&ograve;n cực k&igrave; nhiều những ưu đ&atilde;i đang chờ bạn kh&aacute;m ph&aacute;</p>\r\n\r\n<p><img alt="" src="/userfiles/images/share.jpg" style="height:323px; width:500px" /></p>\r\n\r\n<p>Chơi ngay tại:&nbsp;muh5z.com?ref=35<br />\r\nFanpage:&nbsp;https://www.facebook.com/donggameviet/<br />\r\nLink nh&oacute;m:&nbsp;https://www.facebook.com/groups/donggameviet/</p>', 1, 1, '2021-03-02 16:27:16', '2021-03-02 16:27:16'),
	(11, 'Máy chủ mới MU H5: Khởi Nguyên 7 | 10h - 19/2/2021 - sua thanh cong', 'may-chu-moi-mu-h5-khoi-nguyen-7-10h-1922021-sua-thanh-cong', 'Game Mu H5 Thiên Sứ sẽ khai mở sever mới MU H5: Khởi Nguyên 6 vào 10h T.6 ngày 19/2/2021\r\nCác ưu đãi cực khủng khi tham gia', 'share.jpg', 1, '<p>Game Mu H5 Thi&ecirc;n Sứ&nbsp;sẽ khai mở sever mới MU H5: Khởi Nguy&ecirc;n 6&nbsp;v&agrave;o 10h T.6&nbsp;ng&agrave;y 19/2/2021<br />\r\nC&aacute;c ưu đ&atilde;i cực khủng khi tham gia<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />&nbsp;Tạo nh&acirc;n vật nh&acirc;n ngay VIP 6 + 1.000.000 kc<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />H&agrave;ng tuần c&oacute; sự kiện war guild Pk cực chất<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />&nbsp;️Phần thưởng kim cương nhiều trong c&aacute;c hoạt động, sự kiện, điểm danh vọng.<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />&nbsp;C&aacute;c sự kiện diễn ra hằng ng&agrave;y: Săn Boss, Đấu Trường, Đoạt Bảo.<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />Nhiều event nhận kc, vật phẩm VIP miễn ph&iacute;.<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />Săn boss rơi đồ VIP<br />\r\n<img alt="⚔" src="https://cdn.jsdelivr.net/emojione/assets/4.5/png/64/2694.png" title="Crossed swords    :crossed_swords:" />Ph&aacute;t code miễn ph&iacute; hằng ng&agrave;y<br />\r\nV&agrave; c&ograve;n cực k&igrave; nhiều những ưu đ&atilde;i đang chờ bạn kh&aacute;m ph&aacute;</p>', 2, 1, '2021-03-02 16:35:36', '2021-03-02 16:49:36');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table muh5.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table muh5.payment_mobi
CREATE TABLE IF NOT EXISTS `payment_mobi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) DEFAULT NULL,
  `seri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `amount` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `payment_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.payment_mobi: ~11 rows (approximately)
DELETE FROM `payment_mobi`;
/*!40000 ALTER TABLE `payment_mobi` DISABLE KEYS */;
INSERT INTO `payment_mobi` (`id`, `id_user`, `seri`, `pin`, `type`, `price`, `amount`, `status`, `payment_at`, `created_at`, `updated_at`) VALUES
	(1, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 1, NULL, '2021-02-21 14:52:04', '2021-03-02 15:18:36'),
	(2, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-03-02 14:53:25'),
	(3, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 1, NULL, '2021-02-21 14:52:04', '2021-03-02 15:18:39'),
	(4, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-03-02 14:57:14'),
	(5, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04'),
	(6, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04'),
	(7, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04'),
	(8, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04'),
	(9, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04'),
	(10, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04'),
	(11, 1, '10006390627955', '2000001200696', 'vinaphone', 1000000, 0, 0, NULL, '2021-02-21 14:52:04', '2021-02-21 14:52:04');
/*!40000 ALTER TABLE `payment_mobi` ENABLE KEYS */;

-- Dumping structure for table muh5.payment_momo
CREATE TABLE IF NOT EXISTS `payment_momo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) DEFAULT NULL,
  `momo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.payment_momo: ~0 rows (approximately)
DELETE FROM `payment_momo`;
/*!40000 ALTER TABLE `payment_momo` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_momo` ENABLE KEYS */;

-- Dumping structure for table muh5.server
CREATE TABLE IF NOT EXISTS `server` (
  `id` int(11) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ip` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `port` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.server: ~3 rows (approximately)
DELETE FROM `server`;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
INSERT INTO `server` (`id`, `name`, `ip`, `port`, `created_at`, `updated_at`) VALUES
	(1, 'Huyền thoại 1', '183.81.35.149', '9007', '2021-02-06 22:43:28', '2021-02-06 22:43:28'),
	(2, 'Huyền thoại 2', '183.81.35.149', '9008', '2021-02-06 22:43:48', '2021-02-06 22:43:49'),
	(3, 'Huyền thoại 3', '183.81.35.149', '9009', '2021-02-06 22:44:00', '2021-02-06 22:44:01');
/*!40000 ALTER TABLE `server` ENABLE KEYS */;

-- Dumping structure for table muh5.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spverify` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '= md5 của pass đầu tiên',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xu` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table muh5.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `spverify`, `remember_token`, `xu`, `created_at`, `updated_at`) VALUES
	(1, 'test123456', 'tuan2061996@gmail.com', NULL, '$2y$10$5vGCcjg/MwGKpNKbybNG/.bUOAi7Hy4otRHqOHJ8and7T5mF2rYE6', 'e10adc3949ba59abbe56e057f20f883e', NULL, 5000000, '2021-02-08 09:05:13', '2021-03-02 15:18:39'),
	(2, 'test123', 'haprosd5@gmail.com', NULL, '$2y$10$gFmxz1yab0V56OPQs5PBE.3W7Ye37gu8ibno/lIOK73ppgiL42so6', 'ff624fb496c9843e08ef9ebee3139d37', NULL, 0, '2021-02-27 13:04:56', '2021-02-27 13:04:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
