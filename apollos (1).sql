-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2022 a las 21:17:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apollos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name_album` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sencillo` tinyint(1) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm` tinyint(1) DEFAULT NULL,
  `genre` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`id`, `user_id`, `name_album`, `sencillo`, `duration`, `confirm`, `genre`, `image`, `created_at`, `updated_at`) VALUES
(1, 9, 'sencillos_bbno', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(2, 9, 'Eat ya veggies', 0, '7:37', 1, 'hip hop', '53806cbc-650a-458d-a9ee-614725b5a427.jpg', '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(3, 10, 'sencillos_cuco', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(4, 10, 'Fantasy Gateway', 0, '9:43', 1, 'indie', '05a926af-5cda-4800-8138-441ae5bae12b.jpg', '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(5, 11, 'sencillos_tame_impala', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:32', '2022-09-10 15:00:32'),
(6, 11, 'Currents', 0, '13:42', 1, 'pop', '244ed6e5-94e7-4651-b261-55c0a372e319.png', '2022-09-10 15:00:32', '2022-09-10 17:21:01'),
(7, 11, 'The Slow Rush', 0, '11:09', 1, 'pop', '616dedce-1495-43c6-a74c-22949148d919.jpg', '2022-09-10 15:00:32', '2022-09-10 16:26:33'),
(8, 12, 'sencillos_the_weeknd', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:32', '2022-09-10 15:00:32'),
(9, 12, 'Starboy', 0, '12:01', 1, 'pop', '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg', '2022-09-10 15:00:33', '2022-09-10 16:51:20'),
(10, 13, 'Dream Nostalgia', 0, '14:54', 1, 'pop', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(11, 15, 'sencillos_kanye_west', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(12, 15, 'Graduation', 0, '23:36', 1, 'pop', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', '2022-09-10 15:00:34', '2022-09-10 19:09:54'),
(13, 15, 'The Life of Pablo', 0, '08:48', 1, 'rap', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(14, 14, 'sencillos_tyler_the_creator', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(15, 14, 'IGOR', 0, '19:22', 1, 'pop', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', '2022-09-10 15:00:34', '2022-09-10 16:17:08'),
(16, 14, 'Flower Boy', 0, '13:00', 1, 'pop', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(17, 17, 'sencillos_jnj', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(18, 18, 'sencillos_bad_bunny', 1, NULL, 1, NULL, NULL, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(19, 18, 'Un Verano Sin Ti', 0, '18:25', 1, 'reggaeton', '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg', '2022-09-10 15:00:37', '2022-09-10 16:25:50'),
(20, 1, 'sencillos_elias_mt', 1, NULL, 1, NULL, NULL, '2022-09-10 15:24:53', '2022-09-10 15:24:53'),
(22, 6, 'sencillos_vinilo', 1, NULL, 1, NULL, NULL, '2022-09-10 16:16:04', '2022-09-10 16:16:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `created_at`, `updated_at`) VALUES
(1, 18, 1, NULL, NULL),
(2, 1, 20, NULL, NULL),
(3, 18, 21, NULL, NULL),
(4, 11, 22, NULL, NULL),
(6, 18, 26, NULL, NULL),
(7, 11, 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `song_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `song_id`, `created_at`, `updated_at`) VALUES
(1, 1, 61, '2022-09-10 15:20:03', '2022-09-10 15:20:03'),
(3, 1, 4, '2022-09-10 15:21:46', '2022-09-10 15:21:46'),
(4, 21, 61, '2022-09-10 16:28:05', '2022-09-10 16:28:05'),
(5, 22, 1, '2022-09-10 16:45:02', '2022-09-10 16:45:02'),
(6, 25, 13, '2022-09-10 17:21:22', '2022-09-10 17:21:22'),
(7, 26, 61, '2022-09-10 17:35:15', '2022-09-10 17:35:15'),
(8, 27, 11, '2022-09-10 17:48:01', '2022-09-10 17:48:01'),
(9, 27, 1, '2022-09-10 17:49:28', '2022-09-10 17:49:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `like_albums`
--

CREATE TABLE `like_albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `like_albums`
--

INSERT INTO `like_albums` (`id`, `user_id`, `album_id`, `created_at`, `updated_at`) VALUES
(1, 4, 4, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(2, 4, 6, '2022-09-10 15:00:38', '2022-09-10 15:00:38'),
(3, 4, 7, '2022-09-10 15:00:38', '2022-09-10 15:00:38'),
(4, 4, 9, '2022-09-10 15:00:38', '2022-09-10 15:00:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(267, '2014_10_12_000000_create_users_table', 1),
(268, '2014_10_12_100000_create_password_resets_table', 1),
(269, '2019_08_19_000000_create_failed_jobs_table', 1),
(270, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(271, '2022_07_05_224432_add_data-user_to_users_table', 1),
(272, '2022_07_12_104248_create_albums_table', 1),
(273, '2022_08_04_053954_create_songs_table', 1),
(274, '2022_08_20_203150_create_likes_table', 1),
(275, '2022_08_24_094353_create_followers_table', 1),
(276, '2022_08_27_215539_create_like_albums_table', 1),
(277, '2022_08_28_192006_create_playlists_table', 1),
(278, '2022_08_29_002831_create_playlist_songs_table', 1),
(279, '2022_09_03_221400_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `playlists`
--

CREATE TABLE `playlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name_playlist` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-Pfp.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `playlists`
--

INSERT INTO `playlists` (`id`, `user_id`, `name_playlist`, `duration`, `total`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'playlist_elias_mt', '08:07', 487.75, 'default-Pfp.png', '2022-09-10 15:20:29', '2022-09-10 15:21:14'),
(2, 6, 'playlist_vinilo', '04:52', 292.05, 'default-Pfp.png', '2022-09-10 16:14:42', '2022-09-10 16:14:50'),
(3, 21, 'playlist_dany-sv', '04:58', 298.40, 'default-Pfp.png', '2022-09-10 16:30:15', '2022-09-10 16:30:22'),
(4, 22, 'playlist_vilma', '06:02', 362.79, 'default-Pfp.png', '2022-09-10 16:44:08', '2022-09-10 16:44:24'),
(5, 26, 'playlist_ubitzo', '06:33', 393.64, 'default-Pfp.png', '2022-09-10 17:36:54', '2022-09-10 17:36:57'),
(6, 27, 'playlist_guillehdez', '04:52', 292.05, 'default-Pfp.png', '2022-09-10 17:49:00', '2022-09-10 17:49:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playlist_songs`
--

CREATE TABLE `playlist_songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `playlist_id` bigint(20) UNSIGNED NOT NULL,
  `song_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `playlist_songs`
--

INSERT INTO `playlist_songs` (`id`, `playlist_id`, `song_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-09-10 15:20:30', '2022-09-10 15:20:30'),
(3, 1, 3, '2022-09-10 15:21:12', '2022-09-10 15:21:12'),
(4, 1, 4, '2022-09-10 15:21:13', '2022-09-10 15:21:13'),
(5, 2, 1, '2022-09-10 16:14:42', '2022-09-10 16:14:42'),
(6, 2, 7, '2022-09-10 16:14:48', '2022-09-10 16:14:48'),
(7, 2, 7, '2022-09-10 16:14:50', '2022-09-10 16:14:50'),
(8, 3, 42, '2022-09-10 16:30:15', '2022-09-10 16:30:15'),
(9, 3, 7, '2022-09-10 16:30:21', '2022-09-10 16:30:21'),
(10, 4, 1, '2022-09-10 16:44:08', '2022-09-10 16:44:08'),
(11, 4, 9, '2022-09-10 16:44:23', '2022-09-10 16:44:23'),
(12, 5, 1, '2022-09-10 17:36:54', '2022-09-10 17:36:54'),
(13, 5, 2, '2022-09-10 17:36:56', '2022-09-10 17:36:56'),
(14, 6, 1, '2022-09-10 17:49:00', '2022-09-10 17:49:00'),
(15, 6, 7, '2022-09-10 17:49:10', '2022-09-10 17:49:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','resolved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `reportingUser_id` bigint(20) UNSIGNED NOT NULL,
  `reportedUser_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `song_id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id`, `status`, `reportingUser_id`, `reportedUser_id`, `reason`, `song_id`, `album_id`, `created_at`, `updated_at`) VALUES
(1, 'pending', 1, 9, NULL, 4, 2, '2022-09-10 15:22:09', '2022-09-10 15:22:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `sencillo` tinyint(1) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `name_song` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`id`, `album_id`, `sencillo`, `visibility`, `name_song`, `time`, `genre`, `url`, `image`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Help Herself', '3:09', 'hip hop', 'af9d899e-0e53-43e5-a069-49b9e757c8f0.mp3', 'f759a8c5-493e-4d88-be29-278b60ce8553.jpg', 188.63, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(2, 1, 1, 1, 'I remember', '3:25', 'hip hop', '77feb4d2-a718-4544-96df-f2353e3e91fd.mp3', '0b4366cb-de55-4a13-99e4-96aae5fc4329.jpg', 205.01, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(3, 2, 0, 1, 'Resume', '2:44', 'hip hop', '26c944eb-84f4-441f-a3f2-28b0d8559b15.m4a', '53806cbc-650a-458d-a9ee-614725b5a427.jpg', 164.47, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(4, 2, 0, 1, 'Edamame', '2:15', 'hip hop', 'f6f39231-3a0e-4406-b676-918f3fa1c20f.m4a', '53806cbc-650a-458d-a9ee-614725b5a427.jpg', 134.65, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(5, 2, 0, 1, 'Yoga', '2:38', 'hip hop', 'dcd29a23-016a-4db2-bbed-76e315625c38.m4a', '53806cbc-650a-458d-a9ee-614725b5a427.jpg', 158.43, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(6, 3, 1, 1, 'Under The Sun', '3:39', 'hip hop', '5fe9dc65-b9bd-4342-a27f-cca17834f5e7.mp3', '50063cf7-7722-4b97-a847-77bfbea2c247.jpg', 218.51, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(7, 3, 1, 1, 'Piel Canela', '1:43', 'indie', 'ea7bcf9d-c95f-45c8-a8c3-13b9902c1324.mp3', 'ae201b80-c121-4b3d-aeac-b66d7a970c21.jpg', 103.42, '2022-09-10 15:00:31', '2022-09-10 15:00:31'),
(8, 4, 0, 1, 'Caution', '2:57', 'indie', '56e6c937-8417-4bfa-ae68-40d1806ec834.mp3', '05a926af-5cda-4800-8138-441ae5bae12b.jpg', 177.42, '2022-09-10 15:00:32', '2022-09-10 15:00:32'),
(9, 4, 0, 1, 'Fin Del Mundo', '2:54', 'indie', '6d89c9a8-7224-4890-a9c4-8a35d7456cd9.mp3', '05a926af-5cda-4800-8138-441ae5bae12b.jpg', 174.16, '2022-09-10 15:00:32', '2022-09-10 15:00:32'),
(10, 4, 0, 1, 'Sitting In The Corner', '3:52', 'indie', 'ffa7d712-a8b9-456e-8acd-41467021f89c.mp3', '05a926af-5cda-4800-8138-441ae5bae12b.jpg', 232.33, '2022-09-10 15:00:32', '2022-09-10 15:00:32'),
(11, 5, 1, 1, 'Breathe Deeper ft. Lil Yachty', '4:48', 'pop', 'c24767e7-15bc-42d2-8a37-b0b356d8ad4d.mp3', '5ea6989d-dbba-4e96-bf26-78c11a374927.jpg', 288.10, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(12, 5, 1, 1, 'Patience', '4:52', 'pop', '72bde7d8-ff32-4314-a782-4c07a5808a4d.mp3', 'c82c82f1-9fdf-41ce-a4da-8c2a17c525fb.jpg', 292.36, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(13, 6, 0, 1, 'Yes I\'m Changing', '4:32', 'pop', 'ab2b8a2e-84ba-48cf-a399-0630ad868f09.mp3', '244ed6e5-94e7-4651-b261-55c0a372e319.png', 271.75, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(14, 6, 0, 1, 'Love/Paranoia', '3:07', 'pop', 'b148686b-7cb5-4ff1-b7f1-60bdf2431b27.mp3', '244ed6e5-94e7-4651-b261-55c0a372e319.png', 186.83, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(15, 6, 0, 1, 'New Person, Same Old Mistakes', '6:04', 'pop', '4ac7513a-a7ea-4c50-85d1-07f537ba7f13.mp3', '244ed6e5-94e7-4651-b261-55c0a372e319.png', 364.30, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(16, 7, 0, 1, 'Instant Destiny', '3:14', 'pop', 'b6433863-6ba4-44eb-850d-f10ec247297b.mp3', '616dedce-1495-43c6-a74c-22949148d919.jpg', 193.75, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(17, 7, 0, 1, 'Bordeline', '3:58', 'pop', '0aaa8349-3021-41b8-86be-9e675ecc9274.mp3', '616dedce-1495-43c6-a74c-22949148d919.jpg', 237.87, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(18, 7, 0, 1, 'Is It True', '3:58', 'pop', '4b8ccd7b-b442-4abe-b0a8-f1d1bd592f35.mp3', '616dedce-1495-43c6-a74c-22949148d919.jpg', 238.18, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(19, 8, 1, 1, 'Moth To A Flame', '3:54', 'pop', '5501def9-5c09-4a23-ab34-c77a0b8b3d86.mp3', 'ded98a11-052c-4985-bf2a-a04e22211ad1.jpg', 234.06, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(20, 8, 1, 1, 'King Of The Fall', '5:02', 'pop', '76a584d4-be43-46ea-9dff-035daeebfe07.mp3', '10a042cc-969d-4615-ab40-9ec4a74cc8d8.jpg', 302.39, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(21, 9, 0, 1, 'Starboy', '3:51', 'pop', '48382e21-5018-4f4e-b3f2-2d35d3d08fce.mp3', '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg', 230.50, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(22, 9, 0, 1, 'False alarm', '3:51', 'pop', '5e170f95-b6d7-43b3-95c8-b9087b5cc132.mp3', '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg', 230.58, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(23, 9, 0, 1, 'Die for you', '4:20', 'pop', '9e1069cd-6445-498b-8822-d32ec8a68f27.mp3', '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg', 260.28, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(24, 10, 0, 1, 'Horizons Never Discovered', '2:02', 'pop', 'b449348b-35a7-4338-864a-ef40323b5697.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 121.60, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(25, 10, 0, 1, 'Personal Improvement', '0:17', 'pop', 'fe9e97c6-1504-4c3a-84e3-b03e66f8befe.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 17.35, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(26, 10, 0, 1, 'National Anthem', '3:21', 'pop', '8c519ccd-a732-4d3b-b08a-98c2b28c47e8.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 200.78, '2022-09-10 15:00:33', '2022-09-10 15:00:33'),
(27, 10, 0, 1, 'World\'s Last Hope', '1:44', 'pop', '2abf9cf4-a7f9-434b-b973-46e7aec61e20.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 104.41, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(28, 10, 0, 1, 'New Normality', '1:03', 'pop', '61f4ff96-55a1-4797-bafd-a93996a5cc15.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 230.50, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(29, 10, 0, 1, 'Old Habits Die Hard', '2:55', 'pop', 'df5141c7-d9e7-4bb1-8f1c-79486c6a1981.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 175.31, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(30, 10, 0, 1, 'Better Late Than Never', '3:32', 'pop', '7907b719-8bd3-4fb7-ab7c-1419ba7e3f20.mp3', '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg', 212.06, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(31, 11, 1, 1, 'True Love', '2:29', 'pop', 'b695a8be-5bde-4a50-8d39-3503b8b32f47.mp3', 'c2a57bf7-080b-4947-b7f6-9968d763e496.jpg', NULL, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(32, 12, 0, 1, 'Good Morning', '3:07', 'pop', '495d05a3-7d57-4755-810f-a56e1963fbd5.mp3', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', 187.14, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(33, 12, 0, 1, 'Good Life ft TPain', '3:50', 'pop', 'e3865153-e29f-4b83-88bd-f5d4c02d226b.mp3', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', 229.77, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(34, 12, 0, 1, 'I Wonder', '4:52', 'pop', 'c7508643-c3af-4d29-8529-82964d0b10c2.mp3', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', 291.53, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(35, 13, 0, 1, 'Fade', '3:16', 'rap', 'dee8a8a0-9325-4aa8-8c0e-b2a95f6d3a1c.mp3', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', 196.08, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(36, 13, 0, 1, 'Famous', '3:16', 'rap', '8ae370d8-11cc-40a8-8772-ded78cbc58c4.mp3', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', 291.53, '2022-09-10 15:00:34', '2022-09-10 15:00:34'),
(37, 13, 0, 1, 'Father Stretch My Hands Pt 1', '2:16', 'rap', 'e846c2d0-dd93-4fb5-9040-34650555fd34.mp3', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', 135.97, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(38, 14, 1, 1, 'Cash In Cash Out', '3:38', 'trap', 'a49f9ca8-03de-45e2-be8c-b0bfe2aa6489.mp3', '98d8de88-ca3b-4cd9-a45e-6b1567a577db.jpg', NULL, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(39, 15, 0, 1, 'EARFQUAKE', '3:10', 'pop', '6f169817-3f4f-476a-aa37-88c20477db2f.mp3', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', 190.12, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(40, 15, 0, 1, 'I THINK', '3:32', 'pop', '7d1f9525-4c07-4fbe-869a-2811f3c509ef.mp3', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', 212.06, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(41, 15, 0, 1, 'PUPPET', '2:59', 'pop', '3c778a20-7c97-4e0e-b45f-d3b08d5d1165.mp3', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', 179.07, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(42, 16, 0, 1, 'Where This Flower Blooms', '3:15', 'pop', '83dd5161-d133-4f8f-a650-83c8b0a129bb.mp3', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', 194.98, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(43, 16, 0, 1, 'See You Again', '3:00', 'pop', '0aed4103-b74b-4dca-8a79-3fbabbaa9cec.mp3', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', 180.43, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(44, 16, 0, 1, 'Glitter', '3:45', 'pop', '45b131bd-4444-4dd7-b1ec-0c879cc60d7b.mp3', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', 224.91, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(45, 17, 1, 1, 'New Orizons', '3:14', 'electronic', '9d637819-d144-4348-8067-4f105165015e.m4a', 'ccef8c6c-a7ea-4d58-b906-21dc35fdf534.jpg', NULL, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(46, 11, 1, 1, 'True Love', '2:29', 'pop', 'b695a8be-5bde-4a50-8d39-3503b8b32f47.mp3', 'c2a57bf7-080b-4947-b7f6-9968d763e496.jpg', NULL, '2022-09-10 15:00:35', '2022-09-10 15:00:35'),
(47, 12, 0, 1, 'Good Morning', '3:07', 'pop', '495d05a3-7d57-4755-810f-a56e1963fbd5.mp3', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', 187.14, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(48, 12, 0, 1, 'Good Life ft TPain', '3:50', 'pop', 'e3865153-e29f-4b83-88bd-f5d4c02d226b.mp3', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', 229.77, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(49, 12, 0, 1, 'I Wonder', '4:52', 'pop', 'c7508643-c3af-4d29-8529-82964d0b10c2.mp3', 'c02eba96-1652-43e7-b2c0-037c59226522.jpg', 291.53, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(50, 13, 0, 1, 'Fade', '3:16', 'rap', 'dee8a8a0-9325-4aa8-8c0e-b2a95f6d3a1c.mp3', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', 196.08, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(51, 13, 0, 1, 'Famous', '3:16', 'rap', '8ae370d8-11cc-40a8-8772-ded78cbc58c4.mp3', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', 291.53, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(52, 13, 0, 1, 'Father Stretch My Hands Pt 1', '2:16', 'rap', 'e846c2d0-dd93-4fb5-9040-34650555fd34.mp3', 'f8726b22-8466-49e2-97d0-dba48a82d2c7.jpg', 135.97, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(53, 14, 1, 1, 'Cash In Cash Out', '3:38', 'trap', 'a49f9ca8-03de-45e2-be8c-b0bfe2aa6489.mp3', '98d8de88-ca3b-4cd9-a45e-6b1567a577db.jpg', NULL, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(54, 15, 0, 1, 'EARFQUAKE', '3:10', 'pop', '6f169817-3f4f-476a-aa37-88c20477db2f.mp3', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', 190.12, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(55, 15, 0, 1, 'I THINK', '3:32', 'pop', '7d1f9525-4c07-4fbe-869a-2811f3c509ef.mp3', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', 212.06, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(56, 15, 0, 1, 'PUPPET', '2:59', 'pop', '3c778a20-7c97-4e0e-b45f-d3b08d5d1165.mp3', 'bfb9eef1-f637-45aa-9e3d-9efa1560384f.jpg', 179.07, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(57, 16, 0, 1, 'Where This Flower Blooms', '3:15', 'pop', '83dd5161-d133-4f8f-a650-83c8b0a129bb.mp3', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', 194.98, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(58, 16, 0, 1, 'See You Again', '3:00', 'pop', '0aed4103-b74b-4dca-8a79-3fbabbaa9cec.mp3', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', 180.43, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(59, 16, 0, 1, 'Glitter', '3:45', 'pop', '45b131bd-4444-4dd7-b1ec-0c879cc60d7b.mp3', '98d69c06-5b4f-477d-825f-f4ed19fb1248.jpg', 224.91, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(60, 17, 1, 1, 'New Orizons', '3:14', 'electronic', '9d637819-d144-4348-8067-4f105165015e.m4a', 'ccef8c6c-a7ea-4d58-b906-21dc35fdf534.jpg', NULL, '2022-09-10 15:00:36', '2022-09-10 15:00:36'),
(61, 18, 1, 1, 'Yonaguni', '3:28', 'reggaeton', '35b56f83-19ae-4103-bf9f-09563e0e00b2.mp3', 'b2b1e80c-d047-48f4-8bd2-9b2d50686a00.png', 208.07, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(62, 19, 0, 1, 'Después de la playa', '3:50', 'reggaeton', '24c3b35e-d040-49c0-a12d-ae4028542cea.mp3', '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg', 230.45, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(63, 19, 0, 1, 'Tití me preguntó', '4:04', 'reggaeton', 'a6798ad3-a2a7-4592-8835-f60c0faf4ade.mp3', '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg', 243.85, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(64, 19, 0, 1, 'Yo no soy celoso', '3:51', 'reggaeton', 'c850d563-099a-403c-87da-85f9619f5cd5.mp3', '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg', 230.74, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(65, 19, 0, 1, 'Neverita', '2:53', 'reggaeton', '364d8d3e-32d4-40a8-9153-7c8ae2db9901.mp3', '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg', 173.17, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(66, 19, 0, 1, 'Party', '3:48', 'reggaeton', 'd8349cda-a0a1-47ea-af44-74f7f1cdffd2.mp3', '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg', 227.66, '2022-09-10 15:00:37', '2022-09-10 15:00:37'),
(67, 20, 1, 1, 'My heart', '2:57', 'metal', 'f9a02484-e9fd-4879-8c9a-18a40a3eefcb.mp3', 'a7a37913-54b5-465f-9876-fe6451d6b83c.jpg', 177.42, '2022-09-10 15:24:53', '2022-09-10 15:24:53'),
(70, 22, 1, 1, 'Sech', '2:57', 'rock', 'b6891735-f948-4c71-b49b-cc574dab816c.mp3', '43940e9f-d2b0-4bf2-852c-6f42dbb32dd2.jpg', 177.42, '2022-09-10 16:16:04', '2022-09-10 16:16:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` enum('artist','user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `age` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_artist` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT 'default-Pfp.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `rol`, `email`, `username`, `status`, `age`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `name_artist`, `gender`, `birth_date`, `image`) VALUES
(1, 'Juan', 'Elías', 'artist', 'oscar@correo.com', 'El_Osito', 'active', 17, NULL, '$2y$10$7owWBnW/rga3pznaOA7H7.qrhODBh.eDWvUxpuooER6y8Fn1mt//G', NULL, '2022-09-10 15:00:25', '2022-09-10 15:00:25', 'elias_mt', 0, '2004-10-23', '55bc5e3f-18d1-431a-9483-ec2404475a6c.jpg'),
(2, 'William', 'Orellana', 'artist', 'william@correo.com', 'Willito234', 'active', 17, NULL, '$2y$10$RgnvUY8xrBPF/xoReag6CeAdO8yQx2kykSqCwU3SpesAJqwWcADVy', NULL, '2022-09-10 15:00:26', '2022-09-10 15:00:26', 'willito234', 0, '2004-12-30', 'ac0a0d63-c397-42d5-bb78-2a77047f2dad.jpg'),
(3, 'Eleazar', 'Amaya', 'artist', 'aero@correo.com', 'Aerium', 'active', 17, NULL, '$2y$10$tlEik0y5P/X/bwoLG0DpmOAZZMx7wl.r0Tv2/ITJSNIcVs2opX3JS', NULL, '2022-09-10 15:00:27', '2022-09-10 15:00:27', 'aerium', 0, '2004-08-31', 'c3cf38c7-e997-4f50-864c-eb8e4f3e1719.jpg'),
(4, 'Marjori', 'Arguera', 'user', 'marjo@correo.com', 'Majowo', 'active', 17, NULL, '$2y$10$tZ5fb3.hV6yKS4BZ9rAmweed3Fk5aOjbtadUcCfYRVNQcyk1I3hGC', NULL, '2022-09-10 15:00:27', '2022-09-10 15:00:27', 'majowo', 0, '2005-02-23', '9f2d5f6e-9c90-43ee-909a-b758a71fbd0e.jpg'),
(5, 'Alvin', 'Meléndez', 'user', 'album@correo.com', 'Albumneitor', 'active', 16, NULL, '$2y$10$QLB/6V0bZitrvdeq9bywN.Tr3D7Af8ht8pJjQcsEA/drpq7OdsizO', NULL, '2022-09-10 15:00:28', '2022-09-10 15:00:28', 'albumneitor', 0, '2005-11-09', 'bcc4d798-3da3-4cf5-be78-68103c19f43f.jpg'),
(6, 'Victor', 'García', 'artist', 'vini@correo.com', 'Vinilo', 'active', 16, NULL, '$2y$10$atSwBrfZ2h5gs3Kn2DKnc.3BiqVFXqFLYsJ3BTrYWJKoQRS8bOzNC', NULL, '2022-09-10 15:00:28', '2022-09-10 15:00:28', 'vinilo', 0, '2005-08-16', 'b59ebcf0-af5f-4d07-ac15-82908ee86f1e.jpg'),
(7, 'Marcelo', 'Cruz', 'artist', 'floppa@correo.com', 'Floppenko', 'active', 16, NULL, '$2y$10$Q4.jQtAQS5aXSDtrRwMPJORweodJa4idCKfll1BPL8Yog4qX5Epca', NULL, '2022-09-10 15:00:28', '2022-09-10 15:00:28', 'floppenko', 0, '2006-08-19', '3526eb1d-501a-4245-b33e-23823a3eee97.jpg'),
(8, 'Juan', 'Escobar', 'artist', 'juanpa@correo.com', 'Juanzpa', 'active', 17, NULL, '$2y$10$v58qrb2LspqdPkLYfAT18.A52/jBVXv3bbtstRf2DZg55WBuKjySe', NULL, '2022-09-10 15:00:29', '2022-09-10 15:00:29', 'matador', 0, '2005-07-01', '4c76e35a-1a47-438e-895d-072b50e64eac.jpg'),
(9, 'Alexander', 'Gumuchian', 'artist', 'Bbno@correo.com', 'Bbno$', 'active', 27, NULL, '$2y$10$z7aWB/./i7fzVberk7OszOrYD0bdiwbrZk/aIOq6n.AYUK6ROIML2', NULL, '2022-09-10 15:00:29', '2022-09-10 15:00:29', 'bbno', 0, '1995-06-30', 'a13a928a-5103-4a76-8b6d-96ca2c2d3c42.jpg'),
(10, 'Omar', 'Banos', 'artist', 'Cuco@correo.com', 'Cuco', 'active', 24, NULL, '$2y$10$kmT.KJhDwl50oKajq9jSZ.vSIq5M0Y02fgwCL1GVExDvuQ4PCDnX.', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'cuco', 0, '1998-06-26', 'a077f7dd-82b0-4671-b000-eb51fb3a3846.jpg'),
(11, 'Kevin', 'Parker', 'artist', 'TamImp@correo.com', 'Tame Impala', 'active', 36, NULL, '$2y$10$DtkDq5xxKsnX/4WD9en6AOZ.pylIm/YsO.KmdYdj7JTpymfriCxsm', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'tame-impala', 0, '1986-01-20', 'b709b455-25e0-481c-8b48-da1203e2824e.jpg'),
(12, 'Abel', 'Makkonen', 'artist', 'weeknd@correo.com', 'The Weeknd', 'active', 32, NULL, '$2y$10$FChx1q7u5a5P0UKVO5jdyuGbtJJPRfqFnECM5ET.U0U4Yyb4MtD4O', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'the-weeknd', 0, '1990-02-16', '8e17d442-457f-4324-99e3-b8afcff89a6c.jpg'),
(13, 'Javier', 'Mejía', 'artist', 'mateonintendo123@gmail.com', 'Javithor', 'active', 17, NULL, '$2y$10$PxazqGhNS5xoRuSodE0qyeQuY7nrU5jmRlWuOxg654ndo8EGx23uC', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'javithor', 0, '2004-11-15', '468b9316-f27a-40d8-b758-3e1071392ea3.jpg'),
(14, 'Tyler', 'Okonma', 'artist', 'creator@correo.com', 'Tyler the Creator', 'active', 31, NULL, '$2y$10$sraFTRHi8bVzXC9TwjPDMenv.0oaiUVjsTFLgZEEf.xlWsepzOSju', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'tyler-the-creator', 0, '1991-03-06', 'd90a2013-a0d6-4775-b8e4-b63c245bc6cd.jpg'),
(15, 'YE', 'WEST', 'artist', 'kanyew@correo.com', 'Kanye West', 'active', 45, NULL, '$2y$10$sQ0f8QFPBj4kO.vK.xzxzOyBvl8bj8VMBuNfb6MPohXvTpe7BP3/u', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'kanye-west', 0, '1977-06-05', 'cb75620d-ba57-4178-be07-9b24cef9cd49.jpg'),
(16, 'Javier', 'Pereira', 'artist', 'javier2316@hotmail.com', 'Javier Pereira', 'active', 26, NULL, '$2y$10$q.0zdTFPqKKd4kmDYrk8XOW5dDfdlOh6O98NnECG2.FEPJ5oPdAee', NULL, '2022-09-10 15:00:30', '2022-09-10 15:00:30', 'Javier Pereira', 0, '1997-05-26', 'default-Pfp.png'),
(17, 'Jesus', 'Flores', 'artist', 'jnj6032@gmail.com', 'JnJ', 'active', 18, NULL, '$2y$10$erWLJJX1TicrzHtOUhBtueTC77wrz5fV9HEv.HtoKtP0a4dfxzWwy', NULL, '2022-09-10 15:00:31', '2022-09-10 15:00:31', 'jnj', 0, '2004-08-19', '1704617d-ce59-4dfd-9bbd-79b8a273a311.jpg'),
(18, 'Benito', 'Antonio', 'artist', 'badbunny@correo.com', 'Bad Bunny', 'active', 28, NULL, '$2y$10$iofD9POH43MKYRhMSTtqAupai7rJZtuS11MCXTT6nmKgnWaC5BH0K', NULL, '2022-09-10 15:00:31', '2022-09-10 15:00:31', 'bad-bunny', 0, '1994-03-10', '6edc0a3e-10ff-4dd6-9a95-ea2bd537c36d.jpg'),
(19, 'Mateo', NULL, 'admin', 'oscarmateoelias@gmail.com', 'Admin01', 'active', NULL, NULL, '$2y$10$jVQbh2GLPu.kUkTUdCbjgeVF2dtdDuK7NjSECDyN/w2mtfP8gxAM.', NULL, '2022-09-10 15:00:38', '2022-09-10 15:00:38', NULL, NULL, NULL, 'default-Pfp.png'),
(20, 'Norman', 'asdasd', 'user', 'asdasdasd@asdasd.com', 'asdasdasd@gmasds.com', 'active', 22, NULL, '$2y$10$WgTXWMHsu/bVNIi5Y40vROrjR9/6OhMzqbXWwSHxAcb06M7SAXoQy', NULL, '2022-09-10 15:38:28', '2022-09-10 15:38:28', 'asdasdasd-at-gmasdscom', 0, '2000-03-12', 'default-Pfp.png'),
(21, 'Rogers', 'Deleon', 'user', 'rogrsdeleon@gmail.com', 'Dany_SV', 'active', 22, NULL, '$2y$10$KziCzO.q41xL6ikmzBd7IuLjt9ExU2AreQ/mT01JTbjBrbTXlwVIm', NULL, '2022-09-10 16:24:40', '2022-09-10 16:24:40', 'dany-sv', 0, '2000-01-27', '4edd2040-d43a-439e-8c01-3ed6ab01f9eb.jpg'),
(22, 'vilma', 'de tomasino', 'user', 'vnavarro05@gmail.com', 'vilma', 'active', 41, NULL, '$2y$10$/ImoQXqjGLgGfKqhjKAc4.TXYXoekHWcMTOGhFeOlYUb3dmcTUY6.', NULL, '2022-09-10 16:41:51', '2022-09-10 16:41:51', 'vilma', 1, '1981-08-06', 'default-Pfp.png'),
(23, 'Ernesto', 'Márquez', 'user', 'luisernestomr1503@gmail.com', 'Akilelk', 'active', 17, NULL, '$2y$10$P3w1iA22OaaW3grHAJhFhOrtu..iH3KGvgFtMULPIFMj5113FjVO6', NULL, '2022-09-10 16:49:46', '2022-09-10 16:49:46', 'akilelk', 0, '2005-03-15', '45e60172-5ebf-4bb9-9687-eb7de0496444.png'),
(24, 'CARLOS', 'Toledo', 'user', 'toledomenendez999@hptmail.com', 'carlos', 'active', 48, NULL, '$2y$10$20Rcn1trN8PcVCuvFFszteyVyiefT/yfekUc.FimiNr954L31BgD6', NULL, '2022-09-10 17:01:36', '2022-09-10 17:01:36', 'carlos', 0, '1974-02-23', 'default-Pfp.png'),
(25, 'Alcides', 'Navarro', 'artist', 'orquestaricaldonesv@gmail.com', 'Ricaldone@correo.com', 'active', 22, NULL, '$2y$10$RS3EPWl9O1ISSs.Axxs7A.IceeyfnBNPDsGTdW/2nPYMxQSUNZuBe', NULL, '2022-09-10 17:15:00', '2022-09-10 17:15:00', 'ricaldone-at-correocom', 0, '2000-01-27', 'default-Pfp.png'),
(26, 'Noel', 'Escobar', 'user', 'transporteescobar.sv@gmail.com', 'ubitzo', 'active', 21, NULL, '$2y$10$DrcRkRdrVu401UsHYIlQA.7zrtlX5pjd.0a1DmIL9HfK6rPp3KWo6', NULL, '2022-09-10 17:33:10', '2022-09-10 17:33:10', 'ubitzo', 0, '2000-11-28', '9082d450-33ea-48f3-bfce-f96d06cb854d.jpg'),
(27, 'carlos', 'hernández', 'user', 'cguillermohdezmolina@gmail.com', 'guillehdez', 'active', 20, NULL, '$2y$10$wmWr6Mxhn5UvZ3efGT2F/OsqyyR16PHE9xdCBStYhurCSyhumG43q', NULL, '2022-09-10 17:45:31', '2022-09-10 17:45:31', 'guillehdez', 0, '2002-06-22', '484252cf-096a-44d4-a6d0-78dafd8e88e5.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followers_user_id_foreign` (`user_id`),
  ADD KEY `followers_follower_id_foreign` (`follower_id`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_song_id_foreign` (`song_id`);

--
-- Indices de la tabla `like_albums`
--
ALTER TABLE `like_albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_albums_user_id_foreign` (`user_id`),
  ADD KEY `like_albums_album_id_foreign` (`album_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlists_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `playlist_songs`
--
ALTER TABLE `playlist_songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlist_songs_playlist_id_foreign` (`playlist_id`),
  ADD KEY `playlist_songs_song_id_foreign` (`song_id`);

--
-- Indices de la tabla `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_reportinguser_id_foreign` (`reportingUser_id`),
  ADD KEY `reports_reporteduser_id_foreign` (`reportedUser_id`),
  ADD KEY `reports_song_id_foreign` (`song_id`),
  ADD KEY `reports_album_id_foreign` (`album_id`);

--
-- Indices de la tabla `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `songs_album_id_foreign` (`album_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `like_albums`
--
ALTER TABLE `like_albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `playlist_songs`
--
ALTER TABLE `playlist_songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `like_albums`
--
ALTER TABLE `like_albums`
  ADD CONSTRAINT `like_albums_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `like_albums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `playlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `playlist_songs`
--
ALTER TABLE `playlist_songs`
  ADD CONSTRAINT `playlist_songs_playlist_id_foreign` FOREIGN KEY (`playlist_id`) REFERENCES `playlists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `playlist_songs_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_reporteduser_id_foreign` FOREIGN KEY (`reportedUser_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_reportinguser_id_foreign` FOREIGN KEY (`reportingUser_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
