-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2025 at 03:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `favorite_count` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`, `favorite_count`) VALUES
(1, 'Itaque sed debitis fugit architecto.', 'Harum et ipsum et iure numquam. Quia earum qui libero dolores qui. Qui officiis aut velit adipisci. In dolore hic voluptates rerum et maxime esse. Molestiae ut maxime consequatur excepturi maiores nostrum consequatur harum. Vel voluptate sunt quas non quos consequatur. Eius autem porro laborum beatae culpa suscipit.', 'blogs/uw0FtTAizfyFzbDgb4On7BXRGPpdpyUGvCIJsk4N.png', 'itaque-sed-debitis-fugit-architecto', NULL, '2025-12-12 10:01:13', '2025-12-12 10:21:17', 0),
(2, 'Vitae et minus libero laborum et dolorum voluptatibus quod.', 'Sed eius ad et delectus. Unde consequatur veniam veritatis. Impedit itaque eaque facere eveniet. Inventore voluptatem optio velit id vel. Cum nihil vero et aut. Est sed neque aut et porro sint. Quisquam illum nihil officia neque voluptatum magni enim.', 'blog/default.jpg', 'vitae-et-minus-libero-laborum-et-dolorum-voluptatibus-quod', NULL, '2025-12-12 10:01:13', '2025-12-12 10:16:40', 1),
(3, 'Quia iste eaque et.', 'Est molestiae ut quis quidem dolorum. Sint est similique suscipit ut et. Deleniti sapiente odio quo non. Vel facere quia ut tenetur. Pariatur quia et dolore eligendi aut possimus. Dolorem doloribus harum omnis autem. Accusamus assumenda vel excepturi voluptatem.', 'blog/default.jpg', 'quia-iste-eaque-et', NULL, '2025-12-12 10:01:13', '2025-12-12 11:46:29', 0),
(4, 'Necessitatibus velit voluptas hic.', 'Omnis distinctio fuga aut qui consequatur perferendis. Officiis eum nihil consequatur ipsam ut aut ratione. Dolorum mollitia quibusdam incidunt. Eum eaque atque quas aut libero. Est voluptatem ut earum fugit et inventore in iste. Ut provident repellendus quaerat ipsum fuga fugit corporis. Et ut et assumenda dolorem officia voluptas sequi.', 'blog/default.jpg', 'necessitatibus-velit-voluptas-hic', '2025-12-12 11:45:58', '2025-12-12 10:01:13', '2025-12-12 11:45:58', 1),
(5, 'Nisi reiciendis quis et accusamus.', 'Ad et labore tenetur qui laudantium quidem. Perferendis voluptatibus alias ratione et laudantium minima. Incidunt omnis ea voluptas et. Repudiandae molestias iusto consequatur ut laboriosam ut repudiandae.', 'blog/default.jpg', 'nisi-reiciendis-quis-et-accusamus', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(6, 'Eum doloribus nesciunt libero tempora est.', 'Sit aut deserunt odio officia. Expedita tempore occaecati repudiandae aut qui. Consequatur dolore doloremque est hic laudantium optio rerum. Laudantium aut ea non libero animi cupiditate cumque.', 'blog/default.jpg', 'eum-doloribus-nesciunt-libero-tempora-est', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(7, 'Blanditiis facere nesciunt ut impedit facere vel.', 'Dolor occaecati nemo nihil eius dolorem fugit aliquid. Velit possimus beatae ut neque voluptatem incidunt a et. Numquam ut aut assumenda quisquam architecto autem. Sequi odit aut aliquam culpa unde occaecati dolores. Omnis tempore qui laborum quia eum velit. Saepe consectetur est aut accusantium qui quia consequatur. Et optio quae aut sit placeat illo magni quia.', 'blog/default.jpg', 'blanditiis-facere-nesciunt-ut-impedit-facere-vel', NULL, '2025-12-12 10:01:13', '2025-12-12 11:43:57', 1),
(8, 'Illo cumque tempora magnam corporis.', 'Omnis fugiat veritatis natus iusto totam consequatur. Ex quia consequatur porro consectetur. Rerum necessitatibus repellat et ea ullam est. Ut aut et corrupti.', 'blog/default.jpg', 'illo-cumque-tempora-magnam-corporis', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(9, 'Quod porro quia reprehenderit similique.', 'Et et quam eum quis sint tempora. Deserunt omnis ut alias vitae saepe velit. Qui laboriosam ratione rerum in dicta. Nesciunt totam quaerat esse non molestiae et dolores.', 'blog/default.jpg', 'quod-porro-quia-reprehenderit-similique', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(10, 'Corporis pariatur et et enim porro.', 'Cum sit optio cupiditate error explicabo illum saepe. Nostrum voluptatibus ipsa corrupti est id nihil. Dolor dicta voluptatum fugiat facere repellendus. Aut qui commodi blanditiis esse pariatur ipsum.', 'blog/default.jpg', 'corporis-pariatur-et-et-enim-porro', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(11, 'Quo voluptas nesciunt corrupti in.', 'Praesentium sit et et eveniet nesciunt placeat. Sed ut beatae ipsum modi. Nesciunt libero nisi provident. Laudantium doloremque et necessitatibus omnis culpa voluptas animi quod.', 'blog/default.jpg', 'quo-voluptas-nesciunt-corrupti-in', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(12, 'Assumenda eligendi a est qui enim.', 'Corrupti voluptatem fugiat maiores nobis est a dolor. Quia quibusdam ducimus facere earum dolores. Animi sit eligendi ut sequi laboriosam aut id sint. Sapiente error quibusdam dolores laudantium iste.', 'blog/default.jpg', 'assumenda-eligendi-a-est-qui-enim', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(13, 'Expedita soluta commodi quia at aut qui.', 'Consequatur omnis consequatur et optio animi occaecati non. Cupiditate quod quo debitis qui ipsa dicta cum. Vero aut distinctio in qui. Ea ullam sapiente quos eligendi.', 'blog/default.jpg', 'expedita-soluta-commodi-quia-at-aut-qui', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(14, 'Ut eveniet cupiditate in illum.', 'Nulla voluptates repellat repellat eum. Vel dolores similique et excepturi. Eveniet aut sit eius sit accusamus. Dignissimos vitae esse alias accusantium.', 'blog/default.jpg', 'ut-eveniet-cupiditate-in-illum', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(15, 'Velit dignissimos odio commodi molestiae modi et culpa.', 'Explicabo alias ducimus omnis eos temporibus. Quod molestias dolores odio vel nihil fugit. Fugit quae dolor soluta autem amet. Quidem repellendus reprehenderit unde quos consequuntur soluta numquam. Illo dolorem id commodi omnis. Incidunt repellat aut odit et quidem praesentium omnis. Nesciunt molestiae hic debitis nulla asperiores excepturi commodi.', 'blog/default.jpg', 'velit-dignissimos-odio-commodi-molestiae-modi-et-culpa', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(16, 'Dolores dolores quod sed quisquam.', 'Non accusantium occaecati voluptates qui labore similique quas. Fugit omnis delectus veniam fuga. Sint sit velit consequatur minima enim quasi placeat. Nemo reprehenderit earum nobis similique et eius. Quos accusantium fugiat veritatis praesentium. Provident voluptate suscipit sit et.', 'blog/default.jpg', 'dolores-dolores-quod-sed-quisquam', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(17, 'Nisi iure eos et deleniti accusamus neque dolor vel.', 'Perspiciatis nobis officia sequi culpa culpa. Numquam asperiores at nobis. Est molestias voluptatem nam quos corporis ut dolores recusandae. Aliquam autem totam facere ex quasi quae explicabo.', 'blog/default.jpg', 'nisi-iure-eos-et-deleniti-accusamus-neque-dolor-vel', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(18, 'Quia tempore dicta quibusdam quasi eum.', 'Praesentium neque quo repudiandae voluptate est iusto. Inventore molestias aut commodi. Quis accusantium quo quia aperiam. Rerum quas aut fugiat facere. Mollitia consequatur dolor quia placeat.', 'blog/default.jpg', 'quia-tempore-dicta-quibusdam-quasi-eum', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(19, 'Ipsa cumque et voluptas soluta.', 'Quia fugit voluptas ad sit velit non eos. Consequatur recusandae perferendis iusto eum. Maiores consequatur aut voluptates ullam dolorum qui. Provident perspiciatis consequatur reiciendis mollitia aut odio repellat.', 'blog/default.jpg', 'ipsa-cumque-et-voluptas-soluta', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0),
(20, 'Ex labore non doloribus quo et dolore.', 'Aperiam et modi quia esse non ab voluptatibus. Vero alias ut voluptatibus optio ut. Ea qui voluptas vel sit dolor laborum. Ut asperiores qui est ratione. Quibusdam cumque velit consequatur et.', 'blog/default.jpg', 'ex-labore-non-doloribus-quo-et-dolore', NULL, '2025-12-12 10:01:13', '2025-12-12 10:01:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `blog_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 1, 5, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 6, NULL, NULL),
(5, 3, 1, NULL, NULL),
(7, 3, 6, NULL, NULL),
(8, 4, 1, NULL, NULL),
(9, 4, 3, NULL, NULL),
(12, 5, 5, NULL, NULL),
(13, 5, 6, NULL, NULL),
(14, 6, 1, NULL, NULL),
(15, 6, 3, NULL, NULL),
(17, 7, 3, NULL, NULL),
(18, 8, 1, NULL, NULL),
(19, 8, 2, NULL, NULL),
(20, 9, 2, NULL, NULL),
(21, 10, 1, NULL, NULL),
(22, 10, 2, NULL, NULL),
(23, 11, 3, NULL, NULL),
(24, 12, 3, NULL, NULL),
(25, 12, 5, NULL, NULL),
(26, 13, 5, NULL, NULL),
(27, 14, 1, NULL, NULL),
(28, 14, 6, NULL, NULL),
(30, 15, 5, NULL, NULL),
(31, 16, 1, NULL, NULL),
(32, 17, 1, NULL, NULL),
(33, 17, 3, NULL, NULL),
(35, 18, 2, NULL, NULL),
(36, 18, 3, NULL, NULL),
(37, 18, 5, NULL, NULL),
(38, 19, 3, NULL, NULL),
(40, 19, 6, NULL, NULL),
(41, 20, 2, NULL, NULL),
(42, 20, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-ebla@ali.com|127.0.0.1', 'i:1;', 1765544978),
('laravel-cache-ebla@ali.com|127.0.0.1:timer', 'i:1765544978;', 1765544978);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Et', 'et', '2025-12-12 10:01:12', '2025-12-12 10:01:12'),
(2, 'Fugiat', 'fugiat', '2025-12-12 10:01:12', '2025-12-12 10:01:12'),
(3, 'Qui', 'qui', '2025-12-12 10:01:12', '2025-12-12 10:01:12'),
(5, 'Consequatur', 'consequatur', '2025-12-12 10:01:12', '2025-12-12 10:01:12'),
(6, 'Dolorem', 'dolorem', '2025-12-12 10:01:12', '2025-12-12 10:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2025-12-12 10:16:40', '2025-12-12 10:16:40'),
(3, 2, 4, '2025-12-12 11:43:51', '2025-12-12 11:43:51'),
(4, 2, 7, '2025-12-12 11:43:57', '2025-12-12 11:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_07_162228_create_blogs_table', 1),
(5, '2025_12_07_162427_create_categories_table', 1),
(6, '2025_12_07_163332_create_blog_category_table', 1),
(7, '2025_12_07_163925_create_favorites_table', 1),
(8, '2025_12_09_201205_add_favorite_count_to_blogs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Bl6oQU2sDQGkoJjjb1aZ1JblT8WR8oFdAeFY5mT5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieVBoWHpmdmlXYUlGQm1odmw0TGg3bDNUUUJDYTRxSHFSTTg3bHdNMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czoxNDoiZnJvbnRlbmQuaW5kZXgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1765550825),
('BLr9y5ZlENNbXU9ERsqrKG5oaWXqlKFS5zsMMIih', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVjJxT2ZKbU40WkIyZ0hsMlZzdEdjREhvSDBlelJZU1UzdENRWjJZbyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9jYXRlZ29yaWVzIjtzOjU6InJvdXRlIjtzOjIyOiJhZG1pbi5jYXRlZ29yaWVzLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1765548467);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alysson Prosacco', 'admin', 'ebla@gmail.com', '2025-12-12 10:01:12', '$2y$12$YMj9dVU1YAvcp9NpU6i88em.BPi8EYVstOjHYYBhMmabX0S.2TigG', 'niZ96xKqJ0', '2025-12-12 10:01:12', '2025-12-12 10:01:12'),
(2, 'aya', 'user', 'aya@24.com', NULL, '$2y$12$lXENMi9ckFWS.RPcZQlEN.vmbqZYTuF198725F.DEFfwCdQVjL5TS', NULL, '2025-12-12 11:42:30', '2025-12-12 11:42:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD CONSTRAINT `blog_category_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
