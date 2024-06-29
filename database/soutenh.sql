-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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


-- Listage de la structure de la base pour find-house
DROP DATABASE IF EXISTS `find-house`;
CREATE DATABASE IF NOT EXISTS `find-house` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `find-house`;

-- Listage de la structure de table find-house. caracteristiques
DROP TABLE IF EXISTS `caracteristiques`;
CREATE TABLE IF NOT EXISTS `caracteristiques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.caracteristiques : ~21 rows (environ)
INSERT INTO `caracteristiques` (`id`, `libelle`, `deleted`, `created_at`, `updated_at`) VALUES
	(1, 'balcon', 0, '2024-06-04 15:16:37', '2024-06-04 15:16:39'),
	(2, 'Jardin', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(3, 'Piscine', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(4, 'Garage', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(5, 'Cuisine équipée', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(6, 'Terrasse', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(7, 'Cheminée', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(8, 'Buanderie', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(9, 'Salle de sport', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(10, 'Cave', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(11, 'Ascenseur', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(12, 'Climatisation', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(13, 'Alarme', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(14, 'Interphone', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(15, 'Balcon', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(16, 'Volets électriques', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(17, 'Chambre de service', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(18, 'Puits', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(19, 'Sous-sol', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(20, 'Vue dégagée', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40'),
	(21, 'Proche transport', 0, '2024-06-06 18:25:40', '2024-06-06 18:25:40');

-- Listage de la structure de table find-house. comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` int DEFAULT NULL,
  `propriete_id` bigint unsigned NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_propriete_id_foreign` (`propriete_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_propriete_id_foreign` FOREIGN KEY (`propriete_id`) REFERENCES `proprietes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.comments : ~6 rows (environ)
INSERT INTO `comments` (`id`, `nom_prenom`, `user_id`, `email`, `comment`, `note`, `propriete_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(1, 'oklm bro', 4, 'expeditlachilo795@gmail.com', 'ojcvm,nb', 5, 31, 1, '2024-06-10 16:02:28', '2024-06-27 14:50:58'),
	(2, 'gg', 4, 'expeditlachilo96@gmail.com', 'dfghjklmù', 3, 31, 0, '2024-06-10 16:05:19', '2024-06-20 10:08:46'),
	(3, 'ghjk', 1, 'expeditlachilo796@gmail.com', 'vv', 3, 7, 0, '2024-06-10 16:05:54', '2024-06-20 10:08:40'),
	(4, 'v', 6, 'osnel@gmail.com', 'ff', 4, 7, 0, '2024-06-10 16:06:36', '2024-06-20 10:07:06'),
	(5, 'expedit lachilo', 3, 'expeditlachilo7w96@gmail.com', 'Lordipisicing elit. ommodi. Perferendis, numquam Lordipisicing elit. ommodi. Perferendis, numquam Lordipisicing elit. ommodi. Perferendis, numquam ', 5, 7, 1, '2024-06-10 16:08:43', '2024-06-20 14:27:54'),
	(6, 'hjkl', 4, 'h@gmail.com', 'sssssssssssss', 3, 7, 0, '2024-06-12 19:40:53', '2024-06-20 10:01:39');

-- Listage de la structure de table find-house. failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
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

-- Listage des données de la table find-house.failed_jobs : ~0 rows (environ)

-- Listage de la structure de table find-house. messages
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proprietaire_id` bigint unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` int DEFAULT NULL,
  `titre_msg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`),
  KEY `messages_proprietaire_id_foreign` (`proprietaire_id`),
  CONSTRAINT `messages_proprietaire_id_foreign` FOREIGN KEY (`proprietaire_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1360 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.messages : ~32 rows (environ)
INSERT INTO `messages` (`id`, `nom_prenom`, `proprietaire_id`, `email`, `telephone`, `titre_msg`, `message`, `user_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(13, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 2557, NULL, 'assou', 4, 0, '2024-06-12 14:47:17', '2024-06-20 10:08:33'),
	(14, 'chao', 6, 'expeditlachilo796@gmail.com', 9878741, NULL, 'Kaigbo', 5, 0, '2024-06-12 14:53:03', '2024-06-20 10:08:25'),
	(1330, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 85205, NULL, 'dfghjkl', 6, 0, '2024-06-18 17:28:03', '2024-06-18 17:28:03'),
	(1331, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 85205, NULL, 'dfghjkl', 6, 0, '2024-06-18 17:28:15', '2024-06-18 17:28:15'),
	(1332, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 85205, NULL, 'dfghjkl', 6, 0, '2024-06-18 17:28:41', '2024-06-18 17:28:41'),
	(1333, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 7858, NULL, 'zdfghjkl', 6, 0, '2024-06-18 17:31:51', '2024-06-18 17:31:51'),
	(1334, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 785252, NULL, 'ghjknbv', 6, 0, '2024-06-18 17:39:02', '2024-06-18 17:39:02'),
	(1335, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 785252, NULL, 'ghjknbv', 6, 0, '2024-06-18 17:39:27', '2024-06-18 17:39:27'),
	(1336, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 8788, NULL, ';,nbv', 6, 0, '2024-06-18 17:45:12', '2024-06-18 17:45:12'),
	(1337, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 8788, NULL, ';,nbv', 6, 0, '2024-06-18 17:47:15', '2024-06-18 17:47:15'),
	(1338, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 255558, NULL, 'ertyuikjb', 6, 0, '2024-06-18 17:48:25', '2024-06-18 17:48:25'),
	(1339, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 8788, NULL, 'rrttt', 6, 0, '2024-06-18 17:48:51', '2024-06-20 09:58:11'),
	(1340, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 789887, NULL, 'zertyuimlkjbv', 6, 1, '2024-06-18 17:49:55', '2024-06-22 15:18:07'),
	(1341, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 8520, NULL, 'zertyuklm', 6, 1, '2024-06-18 18:00:39', '2024-06-22 15:18:04'),
	(1342, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 88888, 'titre vivi', 'xcvbn', 6, 0, '2024-06-19 02:45:42', '2024-06-19 02:45:42'),
	(1343, 'Frejus AGOSSOU', 5, 'expeditlachilo796@gmail.com', 8788, NULL, 'vbn,', 6, 0, '2024-06-19 02:46:17', '2024-06-19 02:46:17'),
	(1344, 'Frejus AGOSSOU', 5, 'expeditlachilo796@gmail.com', 8788, NULL, 'dfvbn,', 6, 0, '2024-06-19 02:46:46', '2024-06-19 02:46:46'),
	(1345, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 8788, 'titre', 'QQS', 6, 0, '2024-06-19 02:47:09', '2024-06-19 02:47:09'),
	(1346, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 8520, 'titre vivi', '525', 6, 0, '2024-06-20 03:34:35', '2024-06-20 03:34:35'),
	(1347, 'Frejus AGOSSOU', 2, 'expeditlachilo796@gmail.com', 8520, NULL, 'fghjk', 6, 0, '2024-06-20 03:39:22', '2024-06-20 03:39:22'),
	(1348, 'Frejus AGOSSOU', 2, 'expeditlachilo796@gmail.com', 85222222, NULL, 'bhn,', 6, 0, '2024-06-20 03:43:23', '2024-06-20 03:43:23'),
	(1349, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 255558, NULL, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 6, 0, '2024-06-20 12:01:34', '2024-06-20 12:01:34'),
	(1350, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 2555555, NULL, 'ssssssssssssss', 6, 0, '2024-06-20 14:20:42', '2024-06-20 14:20:42'),
	(1351, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 255558, NULL, 'yyyyyyyyyyyyyy', 6, 0, '2024-06-20 14:21:01', '2024-06-20 14:21:01'),
	(1352, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 852, NULL, 'qqqqqq', 6, 1, '2024-06-20 14:21:29', '2024-06-22 15:18:00'),
	(1353, 'Frejus AGOSSOU', 5, 'expeditlachilo796@gmail.com', 88888, NULL, 'qqqqqqq', 6, 0, '2024-06-20 14:22:10', '2024-06-20 14:22:10'),
	(1354, 'Frejus AGOSSOU', 5, 'expeditlachilo796@gmail.com', 88888, NULL, 'ertyuik,n', 6, 0, '2024-06-20 14:24:55', '2024-06-20 14:24:55'),
	(1355, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 255558, NULL, 'ssss', 6, 0, '2024-06-20 14:28:32', '2024-06-20 14:28:32'),
	(1356, 'Frejus AGOSSOU', 1, NULL, NULL, NULL, NULL, 6, 0, '2024-06-20 14:30:10', '2024-06-20 14:30:10'),
	(1357, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 88888, NULL, 'sssssssssssss', 8, 0, '2024-06-21 17:20:52', '2024-06-21 17:20:52'),
	(1358, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 8520, NULL, 'ddddddddddddddddd', 6, 0, '2024-06-24 19:12:25', '2024-06-24 19:12:25'),
	(1359, 'Frejus AGOSSOU', 2, 'expeditlachilo796@gmail.com', 5522, NULL, 'ddddddddddd', 6, 0, '2024-06-24 21:30:11', '2024-06-24 21:30:11');

-- Listage de la structure de table find-house. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.migrations : ~17 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_05_31_192734_create_type_proprietes_table', 1),
	(6, '2024_05_31_192839_create_proprietes_table', 1),
	(7, '2024_05_31_194847_create_caracteristiques_table', 1),
	(8, '2024_05_31_195049_create_propriete_caracteristiques_table', 1),
	(9, '2024_05_31_195331_create_propriete_images_table', 1),
	(10, '2024_06_04_125839_add_profile_picture_to_users_table', 2),
	(11, '2024_06_04_132436_create_comments_table', 3),
	(12, '2024_06_04_132745_create_messages_table', 3),
	(13, '2024_06_04_133114_create_newslaters_table', 3),
	(14, '2014_10_12_100000_create_password_resets_table', 4),
	(15, '2024_06_05_192605_add_foreign_key_to_comments_table', 4),
	(16, '2024_06_10_150126_create_office_plateformes_table', 5),
	(17, '2024_06_12_160936_add_proprietaire_id_to_messages_table', 6);

-- Listage de la structure de table find-house. newslaters
DROP TABLE IF EXISTS `newslaters`;
CREATE TABLE IF NOT EXISTS `newslaters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.newslaters : ~20 rows (environ)
INSERT INTO `newslaters` (`id`, `email`, `deleted`, `created_at`, `updated_at`) VALUES
	(23, 'expeditlachilo796@gmail.com', 0, '2024-06-18 18:23:32', '2024-06-18 18:23:32'),
	(24, 'expeditlachiloy796@gmail.com', 0, '2024-06-19 02:40:21', '2024-06-19 02:40:21'),
	(25, 'expeditlachiloy796@gmail.com', 0, '2024-06-19 02:40:33', '2024-06-19 02:40:33'),
	(26, 'expeditlachilo796@gmail.com', 0, '2024-06-19 02:42:21', '2024-06-19 02:42:21'),
	(27, 'expeditlachilo96@gmail.com', 0, '2024-06-19 02:44:12', '2024-06-19 02:44:12'),
	(28, 'oloruncash@mozej.com', 0, '2024-06-19 02:44:29', '2024-06-19 02:44:29'),
	(29, 'expeditlachilo796@gmail.com', 0, '2024-06-19 02:45:14', '2024-06-19 02:45:14'),
	(30, 'expeditlacshilo796@gmail.com', 0, '2024-06-19 12:49:34', '2024-06-19 12:49:34'),
	(31, 'expeditlachiloy796@gmail.com', 0, '2024-06-20 03:32:32', '2024-06-20 03:32:32'),
	(32, 'expeditlachiloy796@gmail.com', 0, '2024-06-20 03:40:26', '2024-06-20 03:40:26'),
	(33, 'expeditlacshilo796@gmail.com', 0, '2024-06-20 03:42:58', '2024-06-20 03:42:58'),
	(34, 'expeditlachilo96@gmail.com', 0, '2024-06-20 14:18:52', '2024-06-20 14:18:52'),
	(35, 'expeditlachilo96@gmail.com', 0, '2024-06-20 14:23:02', '2024-06-20 14:23:02'),
	(36, 'expeditlachilo796@gmail.com', 0, '2024-06-20 14:23:25', '2024-06-20 14:23:25'),
	(37, 'expeditlachilo96@gmail.com', 0, '2024-06-23 13:50:57', '2024-06-23 13:50:57'),
	(38, 'expeditlachilo796@gmail.com', 0, '2024-06-25 08:43:24', '2024-06-25 08:43:24'),
	(39, 'expeditlachilo796@gmail.com', 0, '2024-06-25 08:45:03', '2024-06-25 08:45:03'),
	(40, 'charles@gmail.com', 0, '2024-06-26 06:51:21', '2024-06-26 06:51:21'),
	(41, 'charlecs@gmail.com', 0, '2024-06-26 22:37:58', '2024-06-26 22:37:58'),
	(42, 'expeditlachilo796@gmail.com', 0, '2024-06-27 16:13:09', '2024-06-27 16:13:09');

-- Listage de la structure de table find-house. office_plateformes
DROP TABLE IF EXISTS `office_plateformes`;
CREATE TABLE IF NOT EXISTS `office_plateformes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quartier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixTel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.office_plateformes : ~1 rows (environ)
INSERT INTO `office_plateformes` (`id`, `pays`, `ville`, `quartier`, `email`, `tel`, `fixTel`, `deleted`, `created_at`, `updated_at`) VALUES
	(1, 'Canada', 'villy', 'iuop', 'em@gmaol.com', '8520', '8520', 0, '2024-06-10 15:07:52', '2024-06-10 15:07:53');

-- Listage de la structure de table find-house. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.password_resets : ~0 rows (environ)

-- Listage de la structure de table find-house. password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.password_reset_tokens : ~0 rows (environ)

-- Listage de la structure de table find-house. personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.personal_access_tokens : ~0 rows (environ)

-- Listage de la structure de table find-house. proprietes
DROP TABLE IF EXISTS `proprietes`;
CREATE TABLE IF NOT EXISTS `proprietes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status` enum('Rental','For Sale') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_propriete_id` bigint unsigned NOT NULL,
  `nbPiece` int unsigned DEFAULT NULL,
  `nbChambre` int DEFAULT NULL,
  `nbToillete` int DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `surface` double(8,2) DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `emailContact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomContact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenomContact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telContact` int DEFAULT NULL,
  `vue` int(10) unsigned zerofill DEFAULT '0000000000',
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proprietes_type_propriete_id_foreign` (`type_propriete_id`),
  KEY `proprietes_user_id_foreign` (`user_id`),
  CONSTRAINT `proprietes_type_propriete_id_foreign` FOREIGN KEY (`type_propriete_id`) REFERENCES `type_proprietes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proprietes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.proprietes : ~45 rows (environ)
INSERT INTO `proprietes` (`id`, `titre`, `description`, `status`, `type_propriete_id`, `nbPiece`, `nbChambre`, `nbToillete`, `prix`, `surface`, `adresse`, `pays`, `ville`, `quartier`, `user_id`, `emailContact`, `nomContact`, `prenomContact`, `telContact`, `vue`, `deleted`, `created_at`, `updated_at`) VALUES
	(1, 'single', 'c', 'For Sale', 2, 0, 0, 0, 4, 0.00, '54', 'pgg', 'h', 's', 5, NULL, NULL, NULL, NULL, 0000000008, 0, NULL, '2024-06-24 21:18:04'),
	(2, 'Luxury Villa', 'A luxurious villa with stunning views.', 'For Sale', 2, 6, 6, 3, 1200000, 300.75, '456 Ocean Drive', 'France', 'Nice', 'Promenade des Anglais', 5, NULL, NULL, NULL, NULL, 0000000023, 0, '2024-06-05 12:27:30', '2024-06-27 13:47:54'),
	(3, 'Cozy Cottage', 'A cozy cottage in the countryside.', 'For Sale', 2, 3, 2, 2, 250000, 150.00, '789 Country Road', 'UK', 'New York', 'Somerset', 5, NULL, NULL, NULL, NULL, 0000000168, 0, '2024-06-05 12:27:30', '2024-06-24 21:32:47'),
	(4, 'Modern Condo', 'A modern condo in the heart of the city.', 'For Sale', 2, 2, 1, 1, 300000, 75.20, '101 City Center', 'Canada', 'Toronto', 'Downtown', 5, NULL, NULL, NULL, NULL, 0000000004, 0, '2024-06-05 12:27:30', '2024-06-28 06:39:57'),
	(5, 'Spacious Loft', 'A spacious loft with an open floor plan.', 'For Sale', 5, 3, 1, 1, 180000, 110.40, '202 Industrial Way', 'Germany', 'Berlin', 'Kreuzberg', 7, NULL, NULL, NULL, NULL, 0000000007, 0, '2024-06-05 12:27:30', '2024-06-20 14:21:02'),
	(6, 'Beachfront Bungalow', 'A charming bungalow right on the beach.', 'For Sale', 6, 5, 3, 2, 900000, 200.00, '303 Beach Blvd', 'Australia', 'Sydney', 'Bondi Beach', 5, NULL, NULL, NULL, NULL, 0000000024, 0, '2024-06-05 12:27:30', '2024-06-20 14:23:02'),
	(7, 'Penthouse', 'cest une maison a tokpota de luxe', 'For Sale', 5, 4, 2, 2, 600000, 180.75, '404 Skyline Tower', 'BJ', '2392204', 'Marina Bay', 6, NULL, NULL, NULL, NULL, 0000000042, 0, '2024-06-05 12:27:30', '2024-06-28 15:06:15'),
	(8, 'Urban Studio', 'A trendy studio in a bustling urban area.', 'For Sale', 7, 1, 1, 1, 150000, 45.30, '505 Downtown Ave', 'Japan', 'Tokyo', 'Shibuya', 7, NULL, NULL, NULL, NULL, 0000000033, 0, '2024-06-05 12:27:30', '2024-06-25 06:20:02'),
	(9, 'Mountain Retreat', 'A peaceful retreat in the mountains.', 'For Sale', 3, 4, 0, 2, 700000, 220.50, '606 Mountain Pass', 'Switzerland', 'Zermatt', 'Alps', 6, NULL, NULL, NULL, NULL, 0000000006, 0, '2024-06-05 12:27:30', '2024-06-27 16:15:50'),
	(10, 'Riverside Cabin', 'A quaint cabin by the river.', 'For Sale', 2, 3, 2, 1, 50000, 90.25, '229', 'Norway', 'Oslo', 'Grünerløkka', 6, 'expeditlachilo796@gmail.com', 'AGOSSOU', 'Frejus', 52401574, 0000000025, 0, '2024-06-05 12:27:30', '2024-06-28 09:28:07'),
	(11, 'Historic Mansion', 'A historic mansion with modern amenities.', 'For Sale', 8, 0, 6, 5, 2000000, 500.00, '808 Heritage Ln', 'Italy', 'Rome', 'Trastevere', 7, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(12, 'Downtown Flat', 'A convenient flat in the downtown area.', 'For Sale', 8, 2, 1, 1, 320000, 70.00, '909 Central St', 'Netherlands', 'Amsterdam', 'De Pijp', 5, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(13, 'Countryside Villa', 'A serene villa in the countryside.', 'For Sale', 7, 5, 4, 3, 750000, 250.50, '1010 Country Ln', 'Spain', 'Barcelona', 'Eixample', 7, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(14, 'Charming Duplex', 'A charming duplex with a garden.', 'For Sale', 6, 4, 2, 2, 450000, 160.30, '1111 Elm St', 'USA', 'San Francisco', 'Nob Hill', 6, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 12:27:30', '2024-06-27 11:39:14'),
	(15, 'Modern Office', 'A modern office space in a prime location.', 'For Sale', 5, 0, 0, 2, 5000, 100.00, '1212 Business Park', 'UK', 'London', 'Canary Wharf', 7, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(16, 'Luxury Penthouse', 'dfghjklmù', 'For Sale', 7, 6, 4, 3, 2200000, 350.75, '1313 Skyline Dr', 'France', 'Paris', 'Le Marais', 6, 'dddddddddd', 'ssssssssssss', 'zzzzzzzzzzzzzzzz', 444444444, 0000000064, 1, '2024-06-05 12:27:30', '2024-06-22 09:08:37'),
	(17, 'Seaside Villa', 'A seaside villa with a private beach.', 'For Sale', 4, 0, 3, 3, 1800000, 450.50, '1414 Ocean View', 'Portugal', 'Lisbon', 'Belém', 2, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(18, 'Eco-friendly House', 'An eco-friendly house with solar panels.', 'For Sale', 3, 4, 2, 2, 600000, 200.00, '1515 Green Way', 'Germany', 'Munich', 'Schwabing', 4, NULL, NULL, NULL, NULL, 0000000002, 0, '2024-06-05 12:27:30', '2024-06-23 13:37:25'),
	(19, 'City Loft', 'A city loft with an open floor plan.', 'For Sale', 2, 3, 1, 1, 350000, 120.40, '1616 Industrial Blvd', 'USA', 'Chicago', 'The Loop', 7, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(20, 'Countryside Farmhouse', 'A charming farmhouse in the countryside.', 'For Sale', 7, 0, 4, 3, 900000, 300.50, '1717 Rural Route', 'Canada', 'Vancouver', 'Kitsilano', 6, NULL, NULL, NULL, NULL, 0000000005, 0, '2024-06-05 12:27:30', '2024-06-27 16:16:41'),
	(21, 'Mountain Chalet', 'A cozy chalet in the mountains.', 'For Sale', 5, 5, 3, 2, 800000, 220.50, '1818 Alpine Rd', 'Switzerland', 'Zurich', 'Old Town', 4, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(22, 'Urban Penthouse', 'A luxurious penthouse in the city.', 'For Sale', 2, 4, 0, 2, 1500000, 280.75, '1919 Metropolitan Blvd', 'USA', 'Miami', 'Brickell', 5, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 12:27:30', '2024-06-21 21:00:39'),
	(23, 'Beach House', 'A beautiful house right on the beach.', 'For Sale', 1, 6, 4, 3, 2000000, 400.00, '2020 Oceanfront Ave', 'Australia', 'Gold Coast', 'Surfers Paradise', 6, NULL, NULL, NULL, NULL, 0000000000, 1, '2024-06-05 12:27:30', '2024-06-22 09:34:33'),
	(24, 'Downtown Studio', 'A convenient studio in the heart of downtown.', 'For Sale', 1, 1, 1, 1, 250000, 50.30, '2121 City Plaza', 'Japan', 'Osaka', 'Umeda', 1, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(25, 'Suburban House', 'A spacious house in a suburban neighborhood.', 'For Sale', 7, 5, 0, 2, 600000, 180.00, '2222 Suburbia St', 'USA', 'Los Angeles', 'Beverly Hills', 1, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(26, 'Luxury Mansion', 'A luxurious mansion with a large garden.', 'For Sale', 8, 8, 6, 5, 3000000, 500.00, '2323 Estate Dr', 'Italy', 'Florence', 'Santa Croce', 6, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 12:27:30', '2024-06-28 15:48:32'),
	(27, 'Cozy Apartment', 'A cozy apartment in a quiet area.', 'For Sale', 7, 2, 0, 1, 300000000, 0.00, '2424 Peaceful Ln', 'UK', 'Edinburgh', 'Old Town', 5, NULL, NULL, NULL, NULL, 0000000004, 0, '2024-06-05 12:27:30', '2024-06-14 20:06:48'),
	(28, 'Modern Flat', 'A modern flat in the city center.', 'For Sale', 7, 3, 0, 1, 500000, 85.50, '2525 Central Ave', 'Netherlands', 'Rotterdam', 'City Center', 2, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-05 12:27:30'),
	(29, 'Country House', 'A charming house in the countryside.', 'For Sale', 3, 4, 3, 0, 700000, 200.00, '2626 Country Rd', 'Spain', 'Madrid', 'La Latina', 6, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-05 12:27:30', '2024-06-27 17:15:41'),
	(30, 'Luxury Condo', 'A luxurious condo with city views.', 'For Sale', 7, 5, 0, 2, 900000, 150.75, '2727 Skyline Blvd', 'Canada', 'Toronto', 'Downtown', 5, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 12:27:30', '2024-06-12 18:58:27'),
	(31, 'Beautiful Apartment', 'A beautiful apartment in a prime location.', 'For Sale', 1, 0, 1, 0, 250000, 0.00, '229', 'US', '4699066', 'Manhattan', 6, 'expeditlachilo796@gmail.com', 'Frejus AGOSSOU', NULL, NULL, 0000000071, 0, '2024-06-06 16:28:23', '2024-06-28 15:11:58'),
	(32, 'Luxury Villa', 'A luxurious villa with stunning views.', 'For Sale', 2, 6, 4, 3, 1200000, 300.75, '456 Ocean Drive', 'France', 'Nice', 'Promenade des Anglais', 6, NULL, NULL, NULL, NULL, 0000000003, 0, '2024-06-06 16:28:23', '2024-06-27 11:32:54'),
	(33, 'Cozy Cottage', 'A cozy cottage in the countryside.', 'For Sale', 3, 4, 0, 2, 80000, 150.00, '789 Country Road', 'UK', 'Bath', 'Somerset', 6, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-06 16:28:23', '2024-06-27 11:35:11'),
	(34, 'Modern Condo', 'A modern condo in the heart of the city.', 'For Sale', 4, 2, 1, 1, 300000, 75.20, '101 City Center', 'Canada', 'Toronto', 'Downtown', 4, 's', NULL, NULL, 5, 0000000001, 0, '2024-06-06 16:28:23', '2024-06-28 06:41:58'),
	(35, 'Spacious Loft gouter', 'A spacious loft with an open floor plan.', 'For Sale', 5, 3, 1, 1, 180000, 0.00, '202 Industrial Way', 'AF', '1138958', 'Kreuzberg', 6, 'J', NULL, NULL, 1, 0000000007, 0, '2024-06-06 16:28:23', '2024-06-28 14:43:46'),
	(36, 'Beachfront Bungalow', 'A charming bungalow right on the beach.', 'For Sale', 6, 5, 3, 2, 900000, 200.00, '303 Beach Blvd', 'Australia', 'Sydney', 'Bondi Beach', 2, NULL, NULL, NULL, NULL, 0000000014, 0, '2024-06-06 16:28:23', '2024-06-24 21:25:30'),
	(37, 'Penthouse Suite', 'A luxurious penthouse suite with a private terrace.', 'For Sale', 5, 4, 2, 2, 590000, 180.75, '404 Skyline Tower', 'Singapore', 'Singapore', 'Marina Bay', 1, NULL, NULL, NULL, NULL, 0000000004, 0, '2024-06-06 16:28:23', '2024-06-24 12:24:06'),
	(38, 'Urban Studio', 'A trendy studio in a bustling urban area.', 'For Sale', 4, 1, 1, 1, 150000, 45.30, '505 Downtown Ave', 'Japan', 'Tokyo', 'Shibuya', 6, NULL, NULL, NULL, 1, 0000000000, 0, '2024-06-06 16:28:23', '2024-06-27 11:37:00'),
	(39, 'Mountain Retreat', 'A peaceful retreat in the mountains.', 'For Sale', 3, 4, 0, 2, 700000, 220.50, '606 Mountain Pass', 'Switzerland', 'Zermatt', 'Alps', 6, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-06 16:28:23', '2024-06-27 16:18:15'),
	(40, 'Riverside Cabin', 'A quaint cabin by the river.', 'For Sale', 2, 3, 2, 1, 50000, 90.25, '707 Riverside Dr', 'BJ', '2392087', 'Grünerløkka', 5, '', '', '', 4, 0000000023, 0, '2024-06-06 16:28:23', '2024-06-28 06:36:56'),
	(41, 'Historic Mansion', 'A historic mansion with modern amenities.', 'For Sale', 8, 8, 6, 5, 2000000, 500.00, '808 Heritage Ln', 'Italy', 'Rome', 'Trastevere', 3, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-06 16:28:23', '2024-06-24 18:42:19'),
	(42, 'Downtown Flat', 'A convenient flat in the downtown area.', 'For Sale', 8, 2, 1, 0, 320000, 0.00, '909 Central St', 'Netherlands', 'Amsterdam', 'De Pijp', 3, NULL, NULL, NULL, NULL, 0000000000, 0, '2024-06-06 16:28:23', '2024-06-06 16:28:23'),
	(43, 'Countryside Villa', 'A serene villa in the countryside.', 'For Sale', 7, 0, 4, 3, 750000, 250.50, '1010 Country Ln', 'Spain', 'Barcelona', 'Eixample', 4, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-06 16:28:23', '2024-06-13 06:42:56'),
	(44, 'Charming Duplex', 'A charming duplex with a garden.', 'For Sale', 6, 4, 2, 2, 450000, 0.00, '1111 Elm St', 'USA', 'San Francisco', 'Nob Hill', 6, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-06 16:28:23', '2024-06-27 11:36:02'),
	(264, 'titre', 'description', 'Rental', 2, 3, 2, 3, 520000, 222.00, '229', 'AF', '1140026', 'MIdoigbe taou', 6, 'expeditlachilo796@gmail.com', 'AGOSSOU', 'Frejus', NULL, 0000000000, 0, '2024-06-28 15:01:01', '2024-06-28 15:01:39');

-- Listage de la structure de table find-house. propriete_caracteristiques
DROP TABLE IF EXISTS `propriete_caracteristiques`;
CREATE TABLE IF NOT EXISTS `propriete_caracteristiques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `propriete_id` bigint unsigned NOT NULL,
  `caracteristique_id` bigint unsigned NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `propriete_caracteristiques_propriete_id_foreign` (`propriete_id`),
  KEY `propriete_caracteristiques_caracteristique_id_foreign` (`caracteristique_id`),
  CONSTRAINT `propriete_caracteristiques_caracteristique_id_foreign` FOREIGN KEY (`caracteristique_id`) REFERENCES `caracteristiques` (`id`) ON DELETE CASCADE,
  CONSTRAINT `propriete_caracteristiques_propriete_id_foreign` FOREIGN KEY (`propriete_id`) REFERENCES `proprietes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.propriete_caracteristiques : ~18 rows (environ)
INSERT INTO `propriete_caracteristiques` (`id`, `propriete_id`, `caracteristique_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(85, 16, 1, 0, NULL, NULL),
	(90, 16, 21, 0, NULL, NULL),
	(91, 16, 9, 0, NULL, NULL),
	(92, 16, 10, 0, NULL, NULL),
	(120, 31, 2, 0, NULL, NULL),
	(125, 9, 6, 0, NULL, NULL),
	(126, 9, 9, 0, NULL, NULL),
	(127, 9, 12, 0, NULL, NULL),
	(128, 9, 15, 0, NULL, NULL),
	(129, 7, 1, 0, NULL, NULL),
	(130, 7, 11, 0, NULL, NULL),
	(131, 7, 10, 0, NULL, NULL),
	(157, 14, 20, 0, NULL, NULL),
	(158, 29, 21, 0, NULL, NULL),
	(159, 10, 6, 0, NULL, NULL),
	(160, 10, 11, 0, NULL, NULL),
	(161, 10, 17, 0, NULL, NULL),
	(162, 264, 16, 0, NULL, NULL);

-- Listage de la structure de table find-house. propriete_images
DROP TABLE IF EXISTS `propriete_images`;
CREATE TABLE IF NOT EXISTS `propriete_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `propriete_id` bigint unsigned NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `propriete_images_propriete_id_foreign` (`propriete_id`),
  CONSTRAINT `propriete_images_propriete_id_foreign` FOREIGN KEY (`propriete_id`) REFERENCES `proprietes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=393 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.propriete_images : ~94 rows (environ)
INSERT INTO `propriete_images` (`id`, `url`, `propriete_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(180, '/storage/uploads/1719254914.jpg', 1, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(181, '/storage/uploads/1719254914.jpg', 2, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(182, '/storage/uploads/1719254914.jpg', 3, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(183, '/storage/uploads/1719254914.jpg', 4, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(184, '/storage/uploads/1719254914.jpg', 5, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(185, '/storage/uploads/1719254914.jpg', 6, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(187, '/storage/uploads/1719254914.jpg', 8, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(190, '/storage/uploads/1719254914.jpg', 11, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(191, '/storage/uploads/1719254914.jpg', 12, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(192, '/storage/uploads/1719254914.jpg', 13, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(194, '/storage/uploads/1719254914.jpg', 15, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(195, '/storage/uploads/1719254914.jpg', 16, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(196, '/storage/uploads/1719254914.jpg', 17, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(197, '/storage/uploads/1719254914.jpg', 18, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(198, '/storage/uploads/1719254914.jpg', 19, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(200, '/storage/uploads/1719254914.jpg', 21, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(201, '/storage/uploads/1719254914.jpg', 22, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(202, '/storage/uploads/1719254914.jpg', 23, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(203, '/storage/uploads/1719254914.jpg', 24, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(204, '/storage/uploads/1719254914.jpg', 25, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(206, '/storage/uploads/1719254914.jpg', 27, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(207, '/storage/uploads/1719254914.jpg', 28, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(209, '/storage/uploads/1719254914.jpg', 30, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(213, '/storage/uploads/1719254914.jpg', 34, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(215, '/storage/uploads/1719254914.jpg', 36, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(216, '/storage/uploads/1719254914.jpg', 37, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(219, '/storage/uploads/1719254914.jpg', 40, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(220, '/storage/uploads/1719254914.jpg', 41, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(221, '/storage/uploads/1719254914.jpg', 42, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(222, '/storage/uploads/1719254914.jpg', 43, 0, '2024-06-24 19:20:56', '2024-06-24 19:20:56'),
	(308, '/storage/uploads/1719490585.jpg', 7, 0, '2024-06-27 10:17:24', '2024-06-27 10:17:24'),
	(309, '/storage/uploads/1719490592.jpg', 7, 0, '2024-06-27 10:17:24', '2024-06-27 10:17:24'),
	(310, '/storage/uploads/1719490600.jpg', 7, 0, '2024-06-27 10:17:24', '2024-06-27 10:17:24'),
	(311, '/storage/uploads/1719490632.jpg', 7, 0, '2024-06-27 10:17:24', '2024-06-27 10:17:24'),
	(312, '/storage/uploads/1719490637.jpg', 7, 0, '2024-06-27 10:17:24', '2024-06-27 10:17:24'),
	(318, '/storage/uploads/1719494715.jpg', 31, 0, '2024-06-27 11:25:44', '2024-06-27 11:25:44'),
	(319, '/storage/uploads/1719494718.jpg', 31, 0, '2024-06-27 11:25:44', '2024-06-27 11:25:44'),
	(320, '/storage/uploads/1719494721.jpg', 31, 0, '2024-06-27 11:25:44', '2024-06-27 11:25:44'),
	(321, '/storage/uploads/1719494725.jpg', 31, 0, '2024-06-27 11:25:44', '2024-06-27 11:25:44'),
	(322, '/storage/uploads/1719494734.jpg', 31, 0, '2024-06-27 11:25:44', '2024-06-27 11:25:44'),
	(323, '/storage/uploads/1719495152.jpg', 32, 0, '2024-06-27 11:32:54', '2024-06-27 11:32:54'),
	(324, '/storage/uploads/1719495155.jpg', 32, 0, '2024-06-27 11:32:54', '2024-06-27 11:32:54'),
	(325, '/storage/uploads/1719495158.jpg', 32, 0, '2024-06-27 11:32:54', '2024-06-27 11:32:54'),
	(326, '/storage/uploads/1719495161.jpg', 32, 0, '2024-06-27 11:32:54', '2024-06-27 11:32:54'),
	(327, '/storage/uploads/1719495164.jpg', 32, 0, '2024-06-27 11:32:54', '2024-06-27 11:32:54'),
	(328, '/storage/uploads/1719495289.jpg', 33, 0, '2024-06-27 11:35:11', '2024-06-27 11:35:11'),
	(329, '/storage/uploads/1719495292.jpg', 33, 0, '2024-06-27 11:35:11', '2024-06-27 11:35:11'),
	(330, '/storage/uploads/1719495295.jpg', 33, 0, '2024-06-27 11:35:11', '2024-06-27 11:35:11'),
	(331, '/storage/uploads/1719495299.jpg', 33, 0, '2024-06-27 11:35:11', '2024-06-27 11:35:11'),
	(332, '/storage/uploads/1719495302.jpg', 33, 0, '2024-06-27 11:35:11', '2024-06-27 11:35:11'),
	(333, '/storage/uploads/1719495334.jpg', 44, 0, '2024-06-27 11:36:02', '2024-06-27 11:36:02'),
	(334, '/storage/uploads/1719495337.jpg', 44, 0, '2024-06-27 11:36:02', '2024-06-27 11:36:02'),
	(335, '/storage/uploads/1719495342.jpg', 44, 0, '2024-06-27 11:36:02', '2024-06-27 11:36:02'),
	(336, '/storage/uploads/1719495347.jpg', 44, 0, '2024-06-27 11:36:02', '2024-06-27 11:36:02'),
	(337, '/storage/uploads/1719495387.jpg', 38, 0, '2024-06-27 11:37:01', '2024-06-27 11:37:01'),
	(338, '/storage/uploads/1719495391.jpg', 38, 0, '2024-06-27 11:37:01', '2024-06-27 11:37:01'),
	(339, '/storage/uploads/1719495394.jpg', 38, 0, '2024-06-27 11:37:01', '2024-06-27 11:37:01'),
	(340, '/storage/uploads/1719495397.jpg', 38, 0, '2024-06-27 11:37:01', '2024-06-27 11:37:01'),
	(341, '/storage/uploads/1719495400.jpg', 38, 0, '2024-06-27 11:37:01', '2024-06-27 11:37:01'),
	(342, '/storage/uploads/1719495405.jpg', 38, 0, '2024-06-27 11:37:01', '2024-06-27 11:37:01'),
	(343, '/storage/uploads/1719495538.jpg', 14, 0, '2024-06-27 11:39:14', '2024-06-27 11:39:14'),
	(344, '/storage/uploads/1719495541.jpg', 14, 0, '2024-06-27 11:39:14', '2024-06-27 11:39:14'),
	(345, '/storage/uploads/1719495544.jpg', 14, 0, '2024-06-27 11:39:14', '2024-06-27 11:39:14'),
	(349, '/storage/uploads/1719512138.png', 9, 0, '2024-06-27 16:15:50', '2024-06-27 16:15:50'),
	(350, '/storage/uploads/1719512141.png', 9, 0, '2024-06-27 16:15:50', '2024-06-27 16:15:50'),
	(351, '/storage/uploads/1719512144.png', 9, 0, '2024-06-27 16:15:50', '2024-06-27 16:15:50'),
	(352, '/storage/uploads/1719512181.jpg', 20, 0, '2024-06-27 16:16:41', '2024-06-27 16:16:41'),
	(353, '/storage/uploads/1719512189.jpg', 20, 0, '2024-06-27 16:16:41', '2024-06-27 16:16:41'),
	(354, '/storage/uploads/1719512192.jpg', 20, 0, '2024-06-27 16:16:41', '2024-06-27 16:16:41'),
	(355, '/storage/uploads/1719512196.jpg', 20, 0, '2024-06-27 16:16:41', '2024-06-27 16:16:41'),
	(360, '/storage/uploads/1719512274.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(361, '/storage/uploads/1719512285.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(362, '/storage/uploads/1719512285.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(363, '/storage/uploads/1719512285.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(364, '/storage/uploads/1719512286.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(365, '/storage/uploads/1719512286.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(366, '/storage/uploads/1719512286.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(367, '/storage/uploads/1719512286.jpg', 39, 0, '2024-06-27 16:18:15', '2024-06-27 16:18:15'),
	(368, '/storage/uploads/1719512312.jpg', 26, 0, '2024-06-27 16:18:41', '2024-06-27 16:18:41'),
	(369, '/storage/uploads/1719512312.jpg', 26, 0, '2024-06-27 16:18:41', '2024-06-27 16:18:41'),
	(370, '/storage/uploads/1719512312.jpg', 26, 0, '2024-06-27 16:18:41', '2024-06-27 16:18:41'),
	(371, '/storage/uploads/1719512312.jpg', 26, 0, '2024-06-27 16:18:41', '2024-06-27 16:18:41'),
	(372, '/storage/uploads/1719512313.jpg', 26, 0, '2024-06-27 16:18:41', '2024-06-27 16:18:41'),
	(373, '/storage/uploads/1719512313.jpg', 26, 0, '2024-06-27 16:18:41', '2024-06-27 16:18:41'),
	(374, '/storage/uploads/1719512343.jpg', 29, 0, '2024-06-27 16:19:08', '2024-06-27 16:19:08'),
	(375, '/storage/uploads/1719512344.jpg', 29, 0, '2024-06-27 16:19:08', '2024-06-27 16:19:08'),
	(376, '/storage/uploads/1719512344.jpg', 29, 0, '2024-06-27 16:19:08', '2024-06-27 16:19:08'),
	(377, '/storage/uploads/1719512344.jpg', 29, 0, '2024-06-27 16:19:08', '2024-06-27 16:19:08'),
	(384, '/storage/uploads/1719574083.jpg', 10, 0, '2024-06-28 09:28:07', '2024-06-28 09:28:07'),
	(388, '/storage/uploads/1719593022.jpg', 35, 0, '2024-06-28 14:43:46', '2024-06-28 14:43:46'),
	(389, '/storage/uploads/1719594034.jpg', 264, 0, '2024-06-28 15:01:01', '2024-06-28 15:01:01'),
	(390, '/storage/uploads/1719594037.jpg', 264, 0, '2024-06-28 15:01:01', '2024-06-28 15:01:01'),
	(391, '/storage/uploads/1719594040.jpg', 264, 0, '2024-06-28 15:01:01', '2024-06-28 15:01:01'),
	(392, '/storage/uploads/1719594044.jpg', 264, 0, '2024-06-28 15:01:01', '2024-06-28 15:01:01');

-- Listage de la structure de table find-house. type_proprietes
DROP TABLE IF EXISTS `type_proprietes`;
CREATE TABLE IF NOT EXISTS `type_proprietes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.type_proprietes : ~8 rows (environ)
INSERT INTO `type_proprietes` (`id`, `libelle`, `deleted`, `created_at`, `updated_at`) VALUES
	(1, 'Residential', 0, '2024-06-04 15:21:24', '2024-06-04 15:21:26'),
	(2, 'Commercial', 0, '2024-06-05 08:31:52', '2024-06-05 08:31:53'),
	(3, 'Farm/Agricultural estate', 0, '2024-06-05 08:32:10', '2024-06-05 08:32:11'),
	(4, 'The Land', 0, '2024-06-05 08:32:31', '2024-06-05 08:32:32'),
	(5, 'Du/Tri/Quadriplex', 0, '2024-06-05 08:32:52', '2024-06-05 08:32:52'),
	(6, 'Office', 0, '2024-06-05 08:33:09', '2024-06-05 08:33:11'),
	(7, 'Apartment', 0, '2024-06-05 08:33:27', '2024-06-05 08:33:28'),
	(8, 'Warehouse', 0, '2024-06-05 08:34:04', '2024-06-05 08:34:05');

-- Listage de la structure de table find-house. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telephone` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('client','agent','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.users : ~13 rows (environ)
INSERT INTO `users` (`id`, `nom_prenom`, `sexe`, `telephone`, `email`, `password`, `pays`, `website`, `description`, `ville`, `role`, `profile_img`, `deleted`, `created_at`, `updated_at`, `remember_token`, `email_verified_at`) VALUES
	(1, 'oklm bro', 'Feminin', 252526, 'oklm@gmail.com', '123456789', 'Benin', 'www.oklm.bj', 'je suis un bon demarcheur', 'Porto', 'agent', '', 0, '2024-06-04 15:18:33', '2024-06-04 15:18:35', NULL, '2024-06-04 15:18:40'),
	(2, 'Yelinya Prégo', 'Feminin', 8520, 'expeditlachilo7w96@gmail.com', '$2y$12$QBwk6dSKruPz4Pt77.6daeJMh6umc1YbhEmOqS7p4DTtYvCZjOSUO', 'Cotonou', NULL, NULL, 'Cotonou', 'agent', '', NULL, '2024-06-04 16:55:45', '2024-06-04 16:55:45', NULL, NULL),
	(3, 'Tahs tobou', 'Feminin', 520, 'expeditlachilo795@gmail.com', '$2y$12$fmT9gwbr.aX2ZgNVR5JHrOK4Nx4Y0feLGV4vR0KVBDPmGbB1H30Fy', 'Cotonou', NULL, NULL, 'Abuja', 'agent', '', NULL, '2024-06-04 17:02:43', '2024-06-04 17:02:43', NULL, NULL),
	(4, 'Elyse ASSOU', 'Feminin', 852, 'expeditlachilo96@gmail.com', '$2y$12$t7pAOzrDxhCMgRbw8tfQ..VLwTqlkH2DEJeXS.zO4dUqL3L3hVWJa', 'Abuja', NULL, NULL, 'Cotonou', 'agent', '/storage/uploads/1719254915.jpg', NULL, '2024-06-04 17:25:54', '2024-06-04 17:25:54', NULL, NULL),
	(5, ' Rocky', 'Masculin', 89, 'expeditlachilo7f96@gmail.com', '$2y$12$v1UA46rcM92goldzdQ2tF.6Lt/dREo5EXliZnlFgUAOelDv0Iig.S', 'Cotonou', NULL, 'sdfghjkl', 'Cotonou', 'agent', '/storage/uploads/1719254915.jpg', NULL, '2024-06-04 18:06:33', '2024-06-04 18:06:33', NULL, NULL),
	(6, 'Frejus', 'Masculin', 52401574, 'expeditlachilo796@gmail.com', '$2y$12$boG0NbiZXNIwRg1K57Qei.uUqKcjaFdPEuBE8f9dTLelNWyfoOOGO', 'AG', 'site.web', 'je suis un homme', '3576022', 'agent', '/storage/uploads/1719512080.png', 6, '2024-06-05 06:28:22', '2024-06-27 16:14:40', NULL, NULL),
	(7, 'CHALLA Osnel', 'Masculin', 522555, 'osnel@gmail.com', '$2y$12$9V05Ij8N78EqbQUPuqhrhu1XCUBVrUV2Xbfjd4uPKfYOfSzCJ7Xj6', 'Cotonou', NULL, NULL, 'Abuja', 'agent', '', NULL, '2024-06-09 13:35:10', '2024-06-09 13:35:10', NULL, NULL),
	(8, 'frejuste', 'Masculin', 66064948, 'frejustedankon@gmail.com', '$2y$12$YIq32PS4QAhnpbRK.P3iseMMaHqve9yObh3LqF84dwxVCgDr5NAXa', 'Cote d\'ivoire', 'fghjkl', 'je suis fanc', 'Ctn', 'agent', '', NULL, '2024-06-21 16:48:53', '2024-06-21 20:53:31', NULL, NULL),
	(9, 'charles', 'Masculin', 1525, 'charles@gmail.com', '$2y$12$.DzWrPFuKw9.hh7PVzqjmOq8MVl6nFY4glhVuv1BdMBWHGNWocXNy', 'Cotonou', NULL, NULL, 'Cotonou', 'agent', '', NULL, '2024-06-22 15:25:36', '2024-06-22 15:25:36', NULL, NULL),
	(10, 'charles', 'Masculin', 5256663, 'charles1@gmail.com', '$2y$12$W/R4XhCgwPh5KZvJ.41z6Ofa.pbIYs/Vqn71PCKVRM0U.KjOBWPd2', 'BJ', 'fghjklm', 'fghjklmù', '2392087', 'agent', NULL, NULL, '2024-06-26 06:45:55', '2024-06-26 19:48:55', NULL, NULL),
	(11, 'charlesc', NULL, 85205852, 'charles2@gmail.com', '$2y$12$2cXGU3Va3JNKlkHfNBBVDOwkuBR74HY/ITx.gygR4HR8YCmuPwpWS', 'BJ', NULL, NULL, '2394819', 'agent', NULL, NULL, '2024-06-26 07:24:11', '2024-06-26 07:24:11', NULL, NULL),
	(12, 'masculin796', NULL, 2555555, 'masculin796@gmail.com', '$2y$12$e4Iq4dd5QTgyQPmYCFdWA.nsiHqjgejXNmGzO9sy1lhOb.DWEfCCS', 'BG', NULL, NULL, '727079', 'agent', NULL, NULL, '2024-06-26 21:14:10', '2024-06-26 21:14:10', NULL, NULL),
	(13, 'charlescccccc', 'Masculin', 7852, 'charlecs@gmail.com', '$2y$12$E40RhgSDl2v8XwZ49jHqXO5UWcYTwNGVw8mw8d9aw48RTR3X6Ocoq', 'BJ', 'noooooooooooooo', 'sssssssssssssss', '2395914', 'agent', '/storage/uploads/1719470169.png', NULL, '2024-06-26 21:17:29', '2024-06-27 04:36:09', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
