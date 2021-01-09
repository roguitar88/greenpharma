-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para green_pharma
CREATE DATABASE IF NOT EXISTS `green_pharma` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `green_pharma`;

-- Copiando estrutura para tabela green_pharma.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela green_pharma.migrations: ~10 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
	(6, '2020_10_30_190035_create_sessions_table', 3),
	(8, '2020_05_21_200000_create_team_user_table', 4),
	(9, '2020_05_21_100000_create_teams_table', 5),
	(13, '2021_01_07_132608_create_sales_table', 6),
	(16, '2021_01_08_130851_create_spreadsheets_table', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(200) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela green_pharma.notifications: ~0 rows (aproximadamente)
DELETE FROM `notifications`;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` (`id`, `notification`, `timestamp`) VALUES
	(3, 'Olá, mundo', '2021-01-03 11:53:36');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela green_pharma.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('rogeriobsoares5@gmail.com', '$2y$10$gAVUg5I0r2UeAOjc3BuGtuHVYx/36iOsCamU9OdzSGLVv3iAugJlq', '2020-11-03 16:30:34');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela green_pharma.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product` bigint(20) NOT NULL,
  `ean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jan_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feb_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mar_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apr_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `may_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jun_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jul_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aug_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sep_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oct_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nov_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dec_20` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jan_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feb_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mar_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apr_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `may_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jun_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jul_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aug_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sep_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oct_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nov_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dec_21` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela green_pharma.sales: ~0 rows (aproximadamente)
DELETE FROM `sales`;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela green_pharma.sessions: ~1 rows (aproximadamente)
DELETE FROM `sessions`;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('7KxyJVMrC32VdyCx7ir2eExkfkdW5u4rzZ1gihSC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZDQ2ZmJEWDdleXhhOU90RTJLTGlHNXg3azM0YVJYaWNuWThwTGhRbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sYXJhdmVsLWdyZWVucGhhcm1hLnRlc3QvZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGR0M29zenhtcDlzVkJhOXpDUzlNbmVlUEgwbDJNZ2I1cWQ1MzhqWkJ1cnpJemd4dXpid0ltIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRkdDNvc3p4bXA5c1ZCYTl6Q1M5TW5lZVBIMGwyTWdiNXFkNTM4alpCdXJ6SXpneHV6YndJbSI7fQ==', 1610146330);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.spreadsheets
CREATE TABLE IF NOT EXISTS `spreadsheets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela green_pharma.spreadsheets: ~1 rows (aproximadamente)
DELETE FROM `spreadsheets`;
/*!40000 ALTER TABLE `spreadsheets` DISABLE KEYS */;
/*!40000 ALTER TABLE `spreadsheets` ENABLE KEYS */;

-- Copiando estrutura para tabela green_pharma.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_photo_path` text,
  `credential` int(11) NOT NULL DEFAULT '0',
  `username` varchar(191) NOT NULL DEFAULT '',
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) NOT NULL DEFAULT '',
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text,
  `two_factor_recovery_codes` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reset_password_code` varchar(100) NOT NULL DEFAULT '',
  `activationcode` varchar(100) NOT NULL DEFAULT '',
  `activated` int(11) NOT NULL DEFAULT '0',
  `canceled` int(11) NOT NULL DEFAULT '0',
  `deactivate` int(11) NOT NULL DEFAULT '0',
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userip` varchar(200) NOT NULL DEFAULT '',
  `hostname` varchar(200) NOT NULL DEFAULT '',
  `category` varchar(200) NOT NULL DEFAULT '',
  `plan` int(11) NOT NULL DEFAULT '0',
  `plan_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lead_id` int(11) DEFAULT NULL,
  `converted` int(11) NOT NULL DEFAULT '0',
  `last_activity_update` datetime DEFAULT NULL,
  `st_online` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`,`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela green_pharma.users: ~3 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `profile_photo_path`, `credential`, `username`, `email`, `email_verified_at`, `name`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `reset_password_code`, `activationcode`, `activated`, `canceled`, `deactivate`, `register_date`, `userip`, `hostname`, `category`, `plan`, `plan_date`, `lead_id`, `converted`, `last_activity_update`, `st_online`) VALUES
	(1, NULL, 2, 'admin', 'admin@gmail.com', NULL, 'Rogério Brito Soares', '$2y$10$dt3oszxmp9sVBa9zCS9MneePH0l2Mgb5qd538jZBurzIzgxuzbwIm', NULL, NULL, NULL, NULL, '2021-01-06 22:42:55', '', '83152f45', 0, 0, 0, '2020-06-24 10:37:48', '::1', 'Rogerio-PC', 'puts', 0, '2020-09-06 22:04:30', 0, 0, '2021-01-03 22:04:39', 1),
	(3, NULL, 1, 'admin2', 'admin2@gmail.com', NULL, 'Joilson Carvalho', '$2y$10$Kxy9kd5CeWHlNSd9tCT.Au1AWV6qC1DbxubOowzX3C0SOOBKs2rN6', NULL, NULL, NULL, NULL, NULL, '', '', 1, 0, 0, '2020-07-28 17:01:36', '', '', '', 0, '2020-09-06 22:04:30', 0, 0, NULL, 0),
	(5, NULL, 0, 'anal', 'anal@gmail.com', NULL, 'Marcos', '$2y$10$zMjTe8Rs2XVt2MKw1O8ibOZmtxRsSedvbx2Tkts8PQnOqCIOooMv.', NULL, NULL, NULL, '2020-10-31 13:26:24', '2020-11-02 15:16:08', '', '', 0, 0, 0, '2020-10-31 12:26:24', '', '', '', 0, '2020-10-31 12:26:24', 0, 0, NULL, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
