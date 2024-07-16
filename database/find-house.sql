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
  `approuver` tinyint DEFAULT NULL,
  `updateAdmin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_propriete_id_foreign` (`propriete_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_propriete_id_foreign` FOREIGN KEY (`propriete_id`) REFERENCES `proprietes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.comments : ~6 rows (environ)
INSERT INTO `comments` (`id`, `nom_prenom`, `user_id`, `email`, `comment`, `note`, `propriete_id`, `deleted`, `created_at`, `updated_at`, `approuver`, `updateAdmin`) VALUES
	(1, 'oklm bro', 4, 'expeditlachilo795@gmail.com', 'ojcvm,nb', 1, 31, 0, '2024-06-10 14:02:28', '2024-06-10 14:02:29', 1, '2024-07-13 19:07:35'),
	(2, 'gg', 4, 'expeditlachilo96@gmail.com', 'dfghjklmù', 4, 31, 0, '2024-06-10 14:05:19', '2024-07-13 15:10:35', 0, '2024-07-13 17:10:35'),
	(3, 'ghjk', 1, 'expeditlachilo796@gmail.com', 'vv', 4, 31, 0, '2024-06-10 14:05:54', '2024-06-10 14:05:55', 1, '2024-07-13 19:07:35'),
	(4, 'v', 6, 'osnel@gmail.com', 'ff', 2, 31, 0, '2024-06-10 14:06:36', '2024-06-10 14:06:37', 1, '2024-07-13 19:07:35'),
	(5, 'expedit lachilo', 3, 'expeditlachilo7w96@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, placeat! Perspiciatis sunt quos, perferendis cumque velit commodi. Perferendis, numquam', 3, 31, 0, '2024-06-10 14:08:43', '2024-06-10 14:08:44', 1, '2024-07-13 19:07:35'),
	(6, 'hjkl', 4, 'h@gmail.com', 'sssssssssssss', 2, 149, 0, '2024-06-12 17:40:53', '2024-06-12 17:40:54', 1, '2024-07-13 19:07:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=1304 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.messages : ~8 rows (environ)
INSERT INTO `messages` (`id`, `nom_prenom`, `proprietaire_id`, `email`, `telephone`, `titre_msg`, `message`, `user_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(13, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 2557, NULL, 'assou', 4, 0, '2024-06-12 12:47:17', '2024-06-12 12:47:17'),
	(14, 'chao', 6, 'expeditlachilo796@gmail.com', 9878741, NULL, 'Kaigbo', 5, 0, '2024-06-12 12:53:03', '2024-06-12 12:53:03'),
	(15, 'Frejus AGOSSOU', 6, 'expeditlachilo796@gmail.com', 8555555, 'titre', 'messagerie', 1, 1, '2024-06-12 17:21:04', '2024-07-13 15:12:57'),
	(16, 'Frejus AGOSSOU', 7, 'expeditlachilo796@gmail.com', 88888, 'titre', 'rtyuiop', 3, 0, '2024-06-12 19:03:53', '2024-06-12 19:03:53'),
	(1300, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 255558, 'titre', 'xxxxxxxxxxxxxxxxxxxxx', 6, 0, '2024-06-15 10:40:38', '2024-06-15 10:40:38'),
	(1301, 'cc prisco', 14, 'expeditlachilo796@gmail.com', NULL, NULL, 'ddd', 14, 0, '2024-07-16 02:37:02', '2024-07-16 03:15:43'),
	(1302, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 88888, 'titre', 'zzzzzzzzzzzzzzzzz', 14, 0, '2024-07-16 02:41:14', '2024-07-16 02:41:14'),
	(1303, 'Frejus AGOSSOU', 1, 'expeditlachilo796@gmail.com', 555555, NULL, 'dit tout', 14, 0, '2024-07-16 03:22:23', '2024-07-16 03:22:23');

-- Listage de la structure de table find-house. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
	(17, '2024_06_12_160936_add_proprietaire_id_to_messages_table', 6),
	(18, '2024_07_13_155935_create_villes_table', 7),
	(19, '2024_07_13_160307_add_ville_id_to_users_table', 7),
	(20, '2024_07_13_160636_add_ville_id_to_proprietes_table', 7);

-- Listage de la structure de table find-house. newslaters
DROP TABLE IF EXISTS `newslaters`;
CREATE TABLE IF NOT EXISTS `newslaters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.newslaters : ~14 rows (environ)
INSERT INTO `newslaters` (`id`, `email`, `deleted`, `created_at`, `updated_at`) VALUES
	(1, 'royalolo@mozej.com', 0, '2024-06-15 12:58:27', '2024-06-15 12:58:27'),
	(2, 'expeditlachiloy796@gmail.com', 0, '2024-06-15 13:17:22', '2024-06-15 13:17:22'),
	(3, 'expeditlaciiiii796@gmail.com', 0, '2024-06-15 13:25:29', '2024-06-15 13:25:29'),
	(4, 'expeditlaciiiii796@gmail.com', 0, '2024-06-15 13:28:42', '2024-06-15 13:28:42'),
	(5, 'expeditlachilo96@gmail.com', 0, '2024-06-15 13:28:48', '2024-06-15 13:28:48'),
	(6, 'royalolo@mozej.com', 0, '2024-06-15 13:29:14', '2024-06-15 13:29:14'),
	(7, 'oloruncash@mozej.com', 0, '2024-06-15 13:29:33', '2024-06-15 13:29:33'),
	(8, 'oloruncash@mozej.com', 0, '2024-06-15 14:09:00', '2024-06-15 14:09:00'),
	(9, 'expeditlachilo796@gmail.com', 0, '2024-06-15 14:09:21', '2024-06-15 14:09:21'),
	(10, 'expeditlachilo796@gmail.com', 0, '2024-06-15 14:10:18', '2024-06-15 14:10:18'),
	(11, 'expeditlachilo796@gmail.com', 0, '2024-06-15 14:11:49', '2024-06-15 14:11:49'),
	(12, 'expeditlachilo96@gmail.com', 0, '2024-06-15 14:12:11', '2024-06-15 14:12:11'),
	(13, 'expeditlachilo796@gmail.com', 0, '2024-07-16 02:37:48', '2024-07-16 02:37:48'),
	(14, 'expeditlachilo797@gmail.com', 0, '2024-07-16 02:40:36', '2024-07-16 02:40:36');

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

-- Listage des données de la table find-house.office_plateformes : ~0 rows (environ)
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
  `quartier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `emailContact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomContact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenomContact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telContact` int DEFAULT NULL,
  `vue` int(10) unsigned zerofill DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ville_id` bigint unsigned NOT NULL,
  `masquer` tinyint DEFAULT NULL,
  `mettreAvant` datetime DEFAULT NULL,
  `updateAdmin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proprietes_type_propriete_id_foreign` (`type_propriete_id`),
  KEY `proprietes_user_id_foreign` (`user_id`),
  KEY `proprietes_ville_id_foreign` (`ville_id`),
  CONSTRAINT `proprietes_type_propriete_id_foreign` FOREIGN KEY (`type_propriete_id`) REFERENCES `type_proprietes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proprietes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proprietes_ville_id_foreign` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.proprietes : ~62 rows (environ)
INSERT INTO `proprietes` (`id`, `titre`, `description`, `status`, `type_propriete_id`, `nbPiece`, `nbChambre`, `nbToillete`, `prix`, `surface`, `adresse`, `quartier`, `user_id`, `emailContact`, `nomContact`, `prenomContact`, `telContact`, `vue`, `deleted`, `created_at`, `updated_at`, `ville_id`, `masquer`, `mettreAvant`, `updateAdmin`) VALUES
	(1, 'single', 'c', 'Rental', 2, 1, 1, 1, 4, 0.00, '54', 's', 5, NULL, NULL, NULL, NULL, 0000000004, 0, NULL, '2024-07-14 00:31:27', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(2, 'Luxury Villa', 'A luxurious villa with stunning views.', 'Rental', 2, 1, 1, 1, 1200000, 300.75, '456 Ocean Drive', 'Promenade des Anglais', 5, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(3, 'Cozy Cottage', 'A cozy cottage in the countryside.', 'Rental', 2, 1, 1, 1, 250000, 150.00, '789 Country Road', 'Somerset', 5, NULL, NULL, NULL, NULL, 0000000004, 0, '2024-06-05 10:27:30', '2024-06-13 01:41:59', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(4, 'Modern Condo', 'A modern condo in the heart of the city.', 'Rental', 2, 1, 1, 1, 300000, 75.20, '101 City Center', 'Downtown', 5, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(5, 'Spacious Loft', 'A spacious loft with an open floor plan.', 'Rental', 5, 1, 1, 1, 180000, 110.40, '202 Industrial Way', 'Kreuzberg', 7, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(6, 'Beachfront Bungalow', 'A charming bungalow right on the beach.', 'Rental', 6, 1, 1, 1, 900000, 200.00, '303 Beach Blvd', 'Bondi Beach', 5, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(7, 'Penthouse Suite', 'A luxurious penthouse suite with a private terrace.', 'Rental', 5, 1, 1, 1, 600000, 180.75, '404 Skyline Tower', 'Marina Bay', 6, NULL, NULL, NULL, NULL, 0000000027, 0, '2024-06-05 10:27:30', '2024-07-16 02:26:58', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(8, 'Urban Studio', 'A trendy studio in a bustling urban area.', 'Rental', 7, 1, 1, 1, 150000, 45.30, '505 Downtown Ave', 'Shibuya', 7, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 10:27:30', '2024-06-15 06:03:19', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(9, 'Mountain Retreat', 'A peaceful retreat in the mountains.', 'Rental', 3, 1, 1, 1, 700000, 220.50, '606 Mountain Pass', 'Alps', 6, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 10:27:30', '2024-06-14 18:05:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(10, 'Riverside Cabin', 'A quaint cabin by the river.', 'Rental', 2, 1, 1, 1, 50000, 90.25, '707 Riverside Dr', 'Grünerløkka', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(11, 'Historic Mansion', 'A historic mansion with modern amenities.', 'Rental', 8, 1, 1, 1, 2000000, 500.00, '808 Heritage Ln', 'Trastevere', 7, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(12, 'Downtown Flat', 'A convenient flat in the downtown area.', 'Rental', 8, 1, 1, 1, 320000, 70.00, '909 Central St', 'De Pijp', 5, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(13, 'Countryside Villa', 'A serene villa in the countryside.', 'Rental', 7, 1, 1, 1, 750000, 250.50, '1010 Country Ln', 'Eixample', 7, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(14, 'Charming Duplex', 'A charming duplex with a garden.', 'Rental', 6, 1, 1, 1, 450000, 160.30, '1111 Elm St', 'Nob Hill', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(15, 'Modern Office', 'A modern office space in a prime location.', 'Rental', 5, 1, 1, 1, 5000, 100.00, '1212 Business Park', 'Canary Wharf', 7, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(16, 'Luxury Penthouse', 'A luxury penthouse with stunning views.', 'Rental', 7, 1, 1, 1, 2200000, 350.75, '1313 Skyline Dr', 'Le Marais', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(17, 'Seaside Villa', 'A seaside villa with a private beach.', 'Rental', 4, 1, 1, 1, 1800000, 450.50, '1414 Ocean View', 'Belém', 2, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(18, 'Eco-friendly House', 'An eco-friendly house with solar panels.', 'Rental', 3, 1, 1, 1, 600000, 200.00, '1515 Green Way', 'Schwabing', 4, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(19, 'City Loft', 'A city loft with an open floor plan.', 'Rental', 2, 1, 1, 1, 350000, 120.40, '1616 Industrial Blvd', 'The Loop', 7, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(20, 'Countryside Farmhouse', 'A charming farmhouse in the countryside.', 'Rental', 7, 1, 1, 1, 900000, 300.50, '1717 Rural Route', 'Kitsilano', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(21, 'Mountain Chalet', 'A cozy chalet in the mountains.', 'Rental', 1, 1, 1, 1, 800000, 220.50, '1818 Alpine Rd', 'Old Town', 4, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(22, 'Urban Penthouse', 'A luxurious penthouse in the city.', 'Rental', 2, 1, 1, 1, 1500000, 280.75, '1919 Metropolitan Blvd', 'Brickell', 5, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(23, 'Beach House', 'A beautiful house right on the beach.', 'Rental', 1, 1, 1, 1, 2000000, 400.00, '2020 Oceanfront Ave', 'Surfers Paradise', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(24, 'Downtown Studio', 'A convenient studio in the heart of downtown.', 'Rental', 1, 1, 1, 1, 250000, 50.30, '2121 City Plaza', 'Umeda', 1, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(25, 'Suburban House', 'A spacious house in a suburban neighborhood.', 'Rental', 7, 1, 1, 1, 600000, 180.00, '2222 Suburbia St', 'Beverly Hills', 1, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(26, 'Luxury Mansion', 'A luxurious mansion with a large garden.', 'Rental', 8, 1, 1, 1, 3000000, 500.00, '2323 Estate Dr', 'Santa Croce', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(27, 'Cozy Apartment', 'A cozy apartment in a quiet area.', 'Rental', 7, 1, 1, 1, 300000000, 0.00, '2424 Peaceful Ln', 'Old Town', 5, NULL, NULL, NULL, NULL, 0000000004, 0, '2024-06-05 10:27:30', '2024-06-14 18:06:48', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(28, 'Modern Flat', 'A modern flat in the city center.', 'Rental', 7, 1, 1, 1, 500000, 85.50, '2525 Central Ave', 'City Center', 2, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(29, 'Country House', 'A charming house in the countryside.', 'Rental', 3, 1, 1, 1, 700000, 200.00, '2626 Country Rd', 'La Latina', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-05 10:27:30', '2024-06-05 10:27:30', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(30, 'Luxury Condo', 'A luxurious condo with city views.', 'Rental', 7, 1, 1, 1, 900000, 150.75, '2727 Skyline Blvd', 'Downtown', 5, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-05 10:27:30', '2024-06-12 16:58:27', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(31, 'Beautiful Apartment', 'A beautiful apartment in a prime location.', 'Rental', 1, 1, 1, 1, 250000, 0.00, '123 Main St', 'Manhattan', 6, NULL, NULL, NULL, NULL, 0000000011, 0, '2024-06-06 14:28:23', '2024-07-13 20:53:28', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(32, 'Luxury Villa', 'A luxurious villa with stunning views.', 'Rental', 2, 1, 1, 1, 1200000, 300.75, '456 Ocean Drive', 'Promenade des Anglais', 6, NULL, NULL, NULL, NULL, 0000000002, 0, '2024-06-06 14:28:23', '2024-06-14 17:50:06', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(33, 'Cozy Cottage', 'A cozy cottage in the countryside.', 'Rental', 3, 1, 1, 1, 80000, 150.00, '789 Country Road', 'Somerset', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(34, 'Modern Condo', 'A modern condo in the heart of the city.', 'Rental', 4, 1, 1, 1, 300000, 75.20, '101 City Center', 'Downtown', 4, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(35, 'Spacious Loft', 'A spacious loft with an open floor plan.', 'Rental', 5, 1, 1, 1, 180000, 0.00, '202 Industrial Way', 'Kreuzberg', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(36, 'Beachfront Bungalow', 'A charming bungalow right on the beach.', 'Rental', 6, 1, 1, 1, 900000, 200.00, '303 Beach Blvd', 'Bondi Beach', 2, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(37, 'Penthouse Suite', 'A luxurious penthouse suite with a private terrace.', 'Rental', 5, 1, 1, 1, 590000, 180.75, '404 Skyline Tower', 'Marina Bay', 1, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-06 14:28:23', '2024-06-14 17:50:34', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(38, 'Urban Studio', 'A trendy studio in a bustling urban area.', 'Rental', 4, 1, 1, 1, 150000, 45.30, '505 Downtown Ave', 'Shibuya', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(39, 'Mountain Retreat', 'A peaceful retreat in the mountains.', 'Rental', 3, 1, 1, 1, 700000, 220.50, '606 Mountain Pass', 'Alps', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(40, 'Riverside Cabin', 'A quaint cabin by the river.', 'Rental', 2, 1, 1, 1, 50000, 90.25, '707 Riverside Dr', 'Grünerløkka', 5, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(41, 'Historic Mansion', 'A historic mansion with modern amenities.', 'Rental', 8, 1, 1, 1, 2000000, 500.00, '808 Heritage Ln', 'Trastevere', 3, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(42, 'Downtown Flat', 'A convenient flat in the downtown area.', 'Rental', 8, 1, 1, 1, 320000, 0.00, '909 Central St', 'De Pijp', 3, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(43, 'Countryside Villa', 'A serene villa in the countryside.', 'Rental', 7, 1, 1, 1, 750000, 250.50, '1010 Country Ln', 'Eixample', 4, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-06 14:28:23', '2024-06-13 04:42:56', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(44, 'Charming Duplex', 'A charming duplex with a garden.', 'Rental', 6, 1, 1, 1, 450000, 0.00, '1111 Elm St', 'Nob Hill', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-06 14:28:23', '2024-06-06 14:28:23', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(114, 'nerveux moi faché', NULL, 'Rental', 1, 1, 1, 1, 55, 21.00, NULL, 'h', 6, 'expeditlachilo796@gmail.com', 'Frejus AGOSSOU', NULL, NULL, NULL, 0, '2024-06-14 11:24:44', '2024-06-14 11:24:45', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(115, 'first property mrcher', 'fghjklm', 'Rental', 1, 1, 1, 1, 11111, 1.00, 'fghjkl', 'j', 6, 'expeditlachilo796@gmail.com', 'trnsfert', 'h', 85, 0000000002, 0, '2024-06-14 11:26:35', '2024-06-14 17:31:42', 2, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(116, 'oklm second', NULL, 'Rental', 1, 1, 1, 1, 1, 21.00, NULL, 'hj', 6, 'expeditlachilo796@gmail.com', 'Frejus', NULL, NULL, NULL, 0, '2024-06-14 11:28:43', '2024-06-14 11:28:53', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(117, 'Propriete privee', 'ma belle', 'Rental', 1, 1, 1, 1, 520000, 785.00, NULL, 'QW', 6, 'bak796@gmail.com', 'Bakinde', 'Merveille', 7896562, NULL, 0, '2024-06-14 11:34:51', '2024-06-14 11:37:52', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(118, 'test', 'test', 'Rental', 1, 1, 1, 1, 2, 21.00, NULL, 'n', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 11:44:50', '2024-06-14 11:45:27', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(119, 'test2', NULL, 'Rental', 2, 1, 1, 1, 21, 21.00, NULL, 'h', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 11:47:05', '2024-06-14 11:47:22', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(120, 'fghjkl', NULL, 'Rental', 3, 1, 1, 1, 520, 21.00, NULL, 'QW', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 13:21:51', '2024-06-14 13:28:11', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(121, 'Propriete priveekjj', 'ghjkl', 'Rental', 2, 1, 1, 1, 52000000, 21.00, NULL, 'QWfghjk', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 13:30:17', '2024-06-14 13:30:17', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(122, 'ssssssss', NULL, 'Rental', 3, 1, 1, 1, 52000, 300.75, NULL, 'QWfghjk', 6, NULL, NULL, NULL, NULL, 0000000001, 0, '2024-06-14 13:36:12', '2024-07-14 00:07:12', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(123, 'fghjkl', 'fbn,', 'Rental', 2, 1, 1, 1, 520, 300.75, NULL, 'QWfghjk', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 15:46:53', '2024-06-14 15:46:54', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(124, 'marche stp', NULL, 'Rental', 3, 1, 1, 1, 52008, 2.00, NULL, 'echangeur', 6, NULL, NULL, NULL, NULL, 0000000004, 0, '2024-06-14 16:45:24', '2024-06-14 17:18:19', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(125, 'sauvage', 'sauvagerie', 'Rental', 5, 1, 1, 1, 52898, 785.00, NULL, 'echangeurre godome', 6, 'expeditlachilo796@gmail.com', 'Frejus AGOSSOU', 'MerveilleUSE', 88887, 0000000004, 0, '2024-06-14 17:23:43', '2024-07-13 20:52:26', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(138, 'first property', NULL, 'Rental', 6, 1, 1, 1, 5205, 3.00, NULL, 'echangeurj', 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 21:18:38', '2024-06-14 21:21:31', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(146, NULL, '0', 'Rental', 1, 1, 1, 1, 2, 44.00, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 0, '2024-06-14 23:08:59', '2024-06-14 23:08:59', 1, 0, '2024-07-13 19:05:00', '2024-07-13 19:05:18'),
	(147, 'ssssssss', 's', 'Rental', 1, 2, 2, 2, 52000000, 520.00, '229', 'MIdoigbe taou', 6, 'expeditlachilo796@gmail.com', 'AGOSSOU', 'Frejus', 52401574, NULL, 0, '2024-07-14 00:05:42', '2024-07-14 00:05:42', 1, NULL, NULL, NULL),
	(148, 'Propriete privee', 'w', 'Rental', 2, 3, 2, 1, 52000000, 8520.00, '229', 'MIdoigbe taou', 14, 'expeditlachilo796@gmail.com', 'AGOSSOU', 'Frejus', 88888, 0000000001, 0, '2024-07-14 00:11:37', '2024-07-16 03:05:03', 1, NULL, NULL, NULL),
	(149, 'w', 'w', 'For Sale', 2, 2, 3, 2, 5205, 222.00, '229', 'MIdoigbe taou', 14, 'expeditlachilo796@gmail.com', 'AGOSSOU', 'Frejus', 52401574, 0000000008, 0, '2024-07-14 00:13:37', '2024-07-16 03:00:31', 2, NULL, NULL, NULL),
	(150, 'test w', 'test w', 'For Sale', 5, 1, 2, 3, 520000, 8520.00, '229', 'QW', 14, 'expeditlachilo796@gmail.com', 'AGOSSOU', 'Frejus', 52401574, NULL, 0, '2024-07-16 03:12:27', '2024-07-16 03:12:27', 2, 0, '2024-07-16 05:12:27', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.propriete_caracteristiques : ~30 rows (environ)
INSERT INTO `propriete_caracteristiques` (`id`, `propriete_id`, `caracteristique_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(25, 5, 2, 0, NULL, NULL),
	(26, 124, 3, 0, NULL, NULL),
	(27, 124, 4, 0, NULL, NULL),
	(28, 125, 1, 0, NULL, NULL),
	(29, 125, 2, 0, NULL, NULL),
	(30, 146, 3, 0, NULL, NULL),
	(31, 125, 4, 0, NULL, NULL),
	(32, 125, 5, 0, NULL, NULL),
	(33, 125, 6, 0, NULL, NULL),
	(34, 125, 7, 0, NULL, NULL),
	(35, 125, 8, 0, NULL, NULL),
	(36, 125, 9, 0, NULL, NULL),
	(37, 125, 10, 0, NULL, NULL),
	(38, 125, 11, 0, NULL, NULL),
	(39, 125, 12, 0, NULL, NULL),
	(40, 125, 13, 0, NULL, NULL),
	(41, 125, 14, 0, NULL, NULL),
	(42, 125, 15, 0, NULL, NULL),
	(43, 125, 16, 0, NULL, NULL),
	(44, 125, 17, 0, NULL, NULL),
	(45, 125, 18, 0, NULL, NULL),
	(46, 125, 19, 0, NULL, NULL),
	(47, 125, 20, 0, NULL, NULL),
	(48, 125, 21, 0, NULL, NULL),
	(49, 138, 15, 0, NULL, NULL),
	(50, 138, 21, 0, NULL, NULL),
	(51, 147, 12, 0, NULL, NULL),
	(52, 147, 17, 0, NULL, NULL),
	(53, 148, 11, 0, NULL, NULL),
	(54, 148, 17, 0, NULL, NULL),
	(55, 149, 13, 0, NULL, NULL),
	(56, 149, 20, 0, NULL, NULL),
	(57, 149, 19, 0, NULL, NULL),
	(58, 150, 7, 0, NULL, NULL),
	(59, 150, 8, 0, NULL, NULL),
	(60, 150, 14, 0, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.propriete_images : ~68 rows (environ)
INSERT INTO `propriete_images` (`id`, `url`, `propriete_id`, `deleted`, `created_at`, `updated_at`) VALUES
	(25, '/storage/uploads/1720922698.jpg', 114, 0, '2024-06-14 11:26:35', '2024-06-14 11:26:35'),
	(26, '/storage/uploads/1720923038.jpg', 115, 0, '2024-06-14 11:26:41', '2024-06-14 11:26:41'),
	(27, '/storage/uploads/1720923108.jpg', 116, 0, '2024-06-14 11:28:44', '2024-06-14 11:28:44'),
	(28, '/storage/uploads/1720923121.jpg', 117, 0, '2024-06-14 11:34:52', '2024-06-14 11:34:52'),
	(29, '/storage/uploads/1720923125.jpg', 118, 0, '2024-06-14 11:44:50', '2024-06-14 11:44:50'),
	(30, '/storage/uploads/1720923128.jpg', 119, 0, '2024-06-14 11:47:05', '2024-06-14 11:47:05'),
	(31, '/storage/uploads/1720923132.jpg', 120, 0, '2024-06-14 13:21:53', '2024-06-14 13:21:53'),
	(32, '/storage/uploads/1720923134.jpg', 121, 0, '2024-06-14 13:25:54', '2024-06-14 13:25:54'),
	(33, '/storage/uploads/1720923149.jpg', 122, 0, '2024-06-14 13:27:38', '2024-06-14 13:27:38'),
	(34, '/storage/uploads/1720923155.jpg', 123, 0, '2024-06-14 16:45:27', '2024-06-14 16:45:27'),
	(35, '/storage/uploads/1720922698.jpg', 124, 0, '2024-06-14 16:45:30', '2024-06-14 16:45:30'),
	(36, '/storage/uploads/1720923038.jpg', 125, 0, '2024-06-14 17:23:47', '2024-06-14 17:23:47'),
	(37, '/storage/uploads/1720923108.jpg', 38, 0, '2024-06-14 17:23:53', '2024-06-14 17:23:53'),
	(54, '/storage/uploads/1720923155.jpg', 138, 0, '2024-06-14 21:18:39', '2024-06-14 21:18:39'),
	(55, '/storage/uploads/1720922698.jpg', 138, 0, '2024-06-14 21:18:58', '2024-06-14 21:18:58'),
	(56, '/storage/uploads/1720923038.jpg', 138, 0, '2024-06-14 21:20:44', '2024-06-14 21:20:44'),
	(57, '/storage/uploads/1720923108.jpg', 138, 0, '2024-06-14 21:20:51', '2024-06-14 21:20:51'),
	(58, '/storage/uploads/1720923121.jpg', 138, 0, '2024-06-14 21:20:55', '2024-06-14 21:20:55'),
	(68, '/storage/uploads/1720923121.jpg', 146, 0, '2024-06-14 23:09:00', '2024-06-14 23:09:00'),
	(69, '/storage/uploads/1720923125.jpg', 1, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(70, '/storage/uploads/1720923128.jpg', 2, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(71, '/storage/uploads/1720923132.jpg', 3, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(72, '/storage/uploads/1720923134.jpg', 4, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(73, '/storage/uploads/1720923149.jpg', 5, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(74, '/storage/uploads/1720923155.jpg', 6, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(75, '/storage/uploads/1720922698.jpg', 7, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(76, '/storage/uploads/1720923038.jpg', 8, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(77, '/storage/uploads/1720923108.jpg', 9, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(78, '/storage/uploads/1720923121.jpg', 10, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(79, '/storage/uploads/1720923125.jpg', 11, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(80, '/storage/uploads/1720923128.jpg', 12, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(81, '/storage/uploads/1720923132.jpg', 13, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(82, '/storage/uploads/1720923134.jpg', 14, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(83, '/storage/uploads/1720923149.jpg', 15, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(84, '/storage/uploads/1720923155.jpg', 16, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(85, '/storage/uploads/1720922698.jpg', 17, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(86, '/storage/uploads/1720923038.jpg', 18, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(87, '/storage/uploads/1720923108.jpg', 19, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(88, '/storage/uploads/1720923121.jpg', 20, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(89, '/storage/uploads/1720923125.jpg', 21, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(90, '/storage/uploads/1720923128.jpg', 22, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(91, '/storage/uploads/1720923132.jpg', 23, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(92, '/storage/uploads/1720923134.jpg', 24, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(93, '/storage/uploads/1720923149.jpg', 25, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(94, '/storage/uploads/1720923155.jpg', 26, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(95, '/storage/uploads/1720922698.jpg', 27, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(96, '/storage/uploads/1720923038.jpg', 28, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(97, '/storage/uploads/1720923108.jpg', 29, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(98, '/storage/uploads/1720923121.jpg', 30, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(99, '/storage/uploads/1720923125.jpg', 31, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(100, '/storage/uploads/1720923128.jpg', 32, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(101, '/storage/uploads/1720923132.jpg', 33, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(102, '/storage/uploads/1720923134.jpg', 34, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(103, '/storage/uploads/1720923149.jpg', 35, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(104, '/storage/uploads/1720923155.jpg', 36, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(105, '/storage/uploads/1720922698.jpg', 37, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(106, '/storage/uploads/1720923038.jpg', 38, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(107, '/storage/uploads/1720923108.jpg', 39, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(108, '/storage/uploads/1720923121.jpg', 40, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(109, '/storage/uploads/1720923125.jpg', 41, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(110, '/storage/uploads/1720923128.jpg', 42, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(111, '/storage/uploads/1720923132.jpg', 43, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(112, '/storage/uploads/1720923134.jpg', 44, 0, '2024-07-13 18:39:05', '2024-07-13 18:39:05'),
	(113, '/storage/uploads/1720923149.jpg', 147, 0, '2024-07-14 00:05:42', '2024-07-14 00:05:42'),
	(114, '/storage/uploads/1720923155.jpg', 148, 0, '2024-07-14 00:11:37', '2024-07-14 00:11:37'),
	(115, '/storage/uploads/1720922698.jpg', 149, 0, '2024-07-14 00:13:37', '2024-07-14 00:13:37'),
	(116, '/storage/uploads/1720923038.jpg', 149, 0, '2024-07-14 00:13:37', '2024-07-14 00:13:37'),
	(123, '/storage/uploads/1720925371.jpg', 149, 0, '2024-07-14 00:51:18', '2024-07-14 00:51:18'),
	(124, '/storage/uploads/1721106724.jpg', 150, 0, '2024-07-16 03:12:27', '2024-07-16 03:12:27');

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
	(1, 'Residential', 2, '2024-06-04 15:21:24', '2024-06-04 15:21:26'),
	(2, 'Commercial', 2, '2024-06-05 08:31:52', '2024-06-05 08:31:53'),
	(3, 'Farm/Agricultural estate', 2, '2024-06-05 08:32:10', '2024-06-05 08:32:11'),
	(4, 'The Land', 2, '2024-06-05 08:32:31', '2024-06-05 08:32:32'),
	(5, 'Du/Tri/Quadriplex', 2, '2024-06-05 08:32:52', '2024-06-05 08:32:52'),
	(6, 'Office', 2, '2024-06-05 08:33:09', '2024-06-05 08:33:11'),
	(7, 'Apartment', 2, '2024-06-05 08:33:27', '2024-06-05 08:33:28'),
	(8, 'Warehouse', 2, '2024-06-05 08:34:04', '2024-06-05 08:34:05');

-- Listage de la structure de procédure find-house. update_urls
DROP PROCEDURE IF EXISTS `update_urls`;
DELIMITER //
CREATE PROCEDURE `update_urls`()
BEGIN
    DECLARE i INT DEFAULT 25;
    DECLARE url_index INT DEFAULT 0;
    DECLARE url1 VARCHAR(255) DEFAULT '/storage/uploads/1720922698.jpg';
    DECLARE url2 VARCHAR(255) DEFAULT '/storage/uploads/1720923038.jpg';
    DECLARE url3 VARCHAR(255) DEFAULT '/storage/uploads/1720923108.jpg';
    DECLARE url4 VARCHAR(255) DEFAULT '/storage/uploads/1720923121.jpg';
    DECLARE url5 VARCHAR(255) DEFAULT '/storage/uploads/1720923125.jpg';
    DECLARE url6 VARCHAR(255) DEFAULT '/storage/uploads/1720923128.jpg';
    DECLARE url7 VARCHAR(255) DEFAULT '/storage/uploads/1720923132.jpg';
    DECLARE url8 VARCHAR(255) DEFAULT '/storage/uploads/1720923134.jpg';
    DECLARE url9 VARCHAR(255) DEFAULT '/storage/uploads/1720923149.jpg';
    DECLARE url10 VARCHAR(255) DEFAULT '/storage/uploads/1720923155.jpg';

    WHILE i <= 122 DO
        SET @url = CASE
            WHEN url_index = 0 THEN url1
            WHEN url_index = 1 THEN url2
            WHEN url_index = 2 THEN url3
            WHEN url_index = 3 THEN url4
            WHEN url_index = 4 THEN url5
            WHEN url_index = 5 THEN url6
            WHEN url_index = 6 THEN url7
            WHEN url_index = 7 THEN url8
            WHEN url_index = 8 THEN url9
            WHEN url_index = 9 THEN url10
        END;

        SET @sql = CONCAT('UPDATE propriete_images SET url = "', @url, '" WHERE id = ', i);
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;

        SET url_index = (url_index + 1) % 10;
        SET i = i + 1;
    END WHILE;
END//
DELIMITER ;

-- Listage de la structure de table find-house. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `telephone` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('client','agent','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `bloquer` tinyint DEFAULT NULL,
  `activer` tinyint DEFAULT NULL,
  `updateAdmin` datetime DEFAULT NULL,
  `ville_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_ville_id_foreign` (`ville_id`),
  CONSTRAINT `users_ville_id_foreign` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.users : ~14 rows (environ)
INSERT INTO `users` (`id`, `nom_prenom`, `sexe`, `telephone`, `email`, `password`, `website`, `description`, `role`, `profile_img`, `deleted`, `created_at`, `updated_at`, `remember_token`, `email_verified_at`, `bloquer`, `activer`, `updateAdmin`, `ville_id`) VALUES
	(1, 'oklm bro', 'Feminin', 252526, 'oklm@gmail.com', '123456789', 'www.oklm.bj', 'je suis un bon demarcheur', 'agent', '', 0, '2025-06-04 13:18:33', '2024-07-10 05:43:01', NULL, '2024-06-04 13:18:40', 0, 0, '2024-07-10 09:43:01', 1),
	(2, 'oklm bro', 'Masculin', 8520, 'expeditlachilo7w96@gmail.com', '$2y$12$QBwk6dSKruPz4Pt77.6daeJMh6umc1YbhEmOqS7p4DTtYvCZjOSUO', NULL, NULL, 'agent', '', 0, '2025-06-04 14:55:45', '2024-07-10 05:42:58', NULL, NULL, 0, 1, '2024-07-10 09:42:58', 1),
	(3, 'Tahs tobou', 'Feminin', 520, 'expeditlachilo795@gmail.com', '$2y$12$fmT9gwbr.aX2ZgNVR5JHrOK4Nx4Y0feLGV4vR0KVBDPmGbB1H30Fy', NULL, NULL, 'agent', '', 0, '2024-06-04 15:02:43', '2024-07-11 11:21:45', NULL, NULL, 0, 1, '2024-07-11 15:21:45', 1),
	(4, 'Elyse ASSOU', 'Feminin', 852, 'expeditlachilo96@gmail.com', '$2y$12$t7pAOzrDxhCMgRbw8tfQ..VLwTqlkH2DEJeXS.zO4dUqL3L3hVWJa', NULL, NULL, 'agent', '/storage/uploads/1719254915.jpg', 0, '2024-06-04 15:25:54', '2024-07-10 04:24:34', NULL, NULL, 1, 1, '2024-07-10 08:24:34', 1),
	(5, ' Rocky', 'Masculin', 89, 'expeditlachilo7f96@gmail.com', '$2y$12$v1UA46rcM92goldzdQ2tF.6Lt/dREo5EXliZnlFgUAOelDv0Iig.S', NULL, 'sdfghjkl', 'agent', '/storage/uploads/1719254915.jpg', 0, '2024-06-04 16:06:33', '2024-07-03 04:55:47', NULL, NULL, 0, 0, '2024-07-03 08:55:47', 1),
	(6, 'Frejus', 'Masculin', 52401574, 'expeditlachilo796@gmail.com', '$2y$12$0ZqbWGxdZs0yeJBZwEZ3G.HEzUOTm11QrlnKEgJ9LBDpBurVrzFma', 'site.web', 'je suis un homme', 'admin', '/storage/uploads/1719512080.png', 0, '2024-06-05 04:28:22', '2024-07-13 15:14:25', NULL, NULL, 1, 1, '2024-07-10 08:24:31', 1),
	(7, 'CHALLA Osnel', 'Masculin', 522555, 'osnel@gmail.com', '$2y$12$9V05Ij8N78EqbQUPuqhrhu1XCUBVrUV2Xbfjd4uPKfYOfSzCJ7Xj6', NULL, NULL, 'agent', '', 0, '2024-06-09 11:35:10', '2024-07-09 16:11:06', NULL, NULL, 0, 1, '2024-07-09 20:11:06', 1),
	(8, 'frejuste', 'Masculin', 66064948, 'frejustedankon@gmail.com', '$2y$12$YIq32PS4QAhnpbRK.P3iseMMaHqve9yObh3LqF84dwxVCgDr5NAXa', 'fghjkl', 'je suis fanc', 'agent', '', 0, '2024-06-21 14:48:53', '2024-07-04 14:54:29', NULL, NULL, 0, 1, '2024-07-04 18:54:29', 1),
	(9, 'charles', 'Masculin', 1525, 'charles@gmail.com', '$2y$12$.DzWrPFuKw9.hh7PVzqjmOq8MVl6nFY4glhVuv1BdMBWHGNWocXNy', NULL, NULL, 'agent', '', 0, '2024-06-22 13:25:36', '2024-07-04 22:18:22', NULL, NULL, 0, 1, '2024-07-05 02:18:22', 1),
	(10, 'charles', 'Masculin', 5256663, 'charles1@gmail.com', '$2y$12$W/R4XhCgwPh5KZvJ.41z6Ofa.pbIYs/Vqn71PCKVRM0U.KjOBWPd2', 'fghjklm', 'fghjklmù', 'agent', NULL, 0, '2024-06-26 04:45:55', '2024-07-09 16:11:09', NULL, NULL, 1, 1, '2024-07-09 20:11:09', 1),
	(11, 'charlesc', NULL, 85205852, 'charles2@gmail.com', '$2y$12$2cXGU3Va3JNKlkHfNBBVDOwkuBR74HY/ITx.gygR4HR8YCmuPwpWS', NULL, NULL, 'agent', NULL, 0, '2024-06-26 05:24:11', '2024-07-11 11:21:42', NULL, NULL, 0, 1, '2024-07-11 15:21:42', 1),
	(12, 'masculin796', NULL, 2555555, 'masculin796@gmail.com', '$2y$12$e4Iq4dd5QTgyQPmYCFdWA.nsiHqjgejXNmGzO9sy1lhOb.DWEfCCS', NULL, NULL, 'agent', NULL, 0, '2024-06-26 19:14:10', '2024-07-13 15:09:51', NULL, NULL, 0, 0, '2024-07-13 17:09:51', 1),
	(13, 'charlescccccc', 'Masculin', 7852, 'charlecs@gmail.com', '$2y$12$E40RhgSDl2v8XwZ49jHqXO5UWcYTwNGVw8mw8d9aw48RTR3X6Ocoq', 'noooooooooooooo', 'sssssssssssssss', 'agent', '/storage/uploads/1719470169.png', 0, '2024-06-26 19:17:29', '2024-07-03 17:17:54', NULL, NULL, 0, 0, '2024-07-03 21:17:54', 1),
	(14, 'Prisca Olachilo', 'Feminin', 644573866, 'priscaolachilo796@gmail.com', '$2y$12$312w.mL5KnXLZMrraycKSO/ofTsjysslKDayizLlBcIJIR.BG9d62', 'ooo', NULL, 'agent', '/storage/uploads/1720690443.jpg', 0, '2024-07-10 13:53:06', '2024-07-16 03:26:14', NULL, NULL, 0, 1, NULL, 2);

-- Listage de la structure de table find-house. villes
DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table find-house.villes : ~0 rows (environ)
INSERT INTO `villes` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
	(1, 'oklm', '2024-07-13 16:41:26', '2024-07-13 16:41:27'),
	(2, 'bro', '2024-07-13 23:02:49', '2024-07-13 23:02:50');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
