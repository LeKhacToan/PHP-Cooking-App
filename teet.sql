-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:08 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teet`
--

-- --------------------------------------------------------

--
-- Table structure for table `amthuc`
--

CREATE TABLE `amthuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amthuc`
--

INSERT INTO `amthuc` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', NULL, NULL),
(2, 'Ấn Độ', NULL, NULL),
(3, 'Indonesia', NULL, NULL),
(4, 'Thái Lan', NULL, NULL),
(5, 'Singapore', NULL, NULL),
(6, 'Nga', NULL, NULL),
(7, 'Ý', NULL, NULL),
(8, 'Pháp', NULL, NULL),
(9, 'Malaysia', NULL, NULL),
(10, 'Hàn Quốc', NULL, NULL),
(11, 'Brazil', NULL, NULL),
(12, 'Philippines', NULL, NULL),
(13, 'Nhật', NULL, NULL),
(14, 'Mỹ', NULL, NULL),
(15, 'Âu', NULL, NULL),
(16, 'Úc', NULL, NULL),
(17, 'Trung Quốc', NULL, NULL),
(18, 'Mexico', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `serving` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `thucdon_id` int(10) UNSIGNED NOT NULL,
  `loaimon_id` int(10) UNSIGNED NOT NULL,
  `nguyenlieuchinh_id` int(10) UNSIGNED NOT NULL,
  `dokho_id` int(10) UNSIGNED NOT NULL,
  `amthuc_id` int(10) UNSIGNED NOT NULL,
  `phuongphap_id` int(10) UNSIGNED NOT NULL,
  `top_day` tinyint(1) NOT NULL DEFAULT '0',
  `top_week` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `name`, `link_image`, `describe`, `time`, `serving`, `user_id`, `thucdon_id`, `loaimon_id`, `nguyenlieuchinh_id`, `dokho_id`, `amthuc_id`, `phuongphap_id`, `top_day`, `top_week`, `created_at`, `updated_at`) VALUES
(1, 'trung qouws toan le', 'V8dC_cat.jpg', 'xsxsxsxsddddddddddddddddddddddddddddd', 10, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, '2019-03-09 23:25:33', '2019-03-09 23:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet_tag`
--

CREATE TABLE `baiviet_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `baiviet_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buocthuchien`
--

CREATE TABLE `buocthuchien` (
  `id` int(10) UNSIGNED NOT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baiviet_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buocthuchien`
--

INSERT INTO `buocthuchien` (`id`, `describe`, `link_image`, `baiviet_id`, `created_at`, `updated_at`) VALUES
(1, 'dddddddddddddd', 'Aq3q_reje.png', 1, '2019-03-09 23:25:33', '2019-03-09 23:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baiviet_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_of_comment`
--

CREATE TABLE `comment_of_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokho`
--

CREATE TABLE `dokho` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokho`
--

INSERT INTO `dokho` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dễ', '2019-03-09 07:09:50', '2019-03-09 07:09:50'),
(2, 'Trung Bình', '2019-03-09 07:09:58', '2019-03-09 07:09:58'),
(3, 'Khó', '2019-03-09 07:10:02', '2019-03-09 07:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `loaimon`
--

CREATE TABLE `loaimon` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaimon`
--

INSERT INTO `loaimon` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Snacks', NULL, NULL),
(2, 'Nghêu - Sò - Ốc', NULL, NULL),
(3, 'Ủ - Lên men', '2019-03-09 06:52:57', '2019-03-09 06:52:57'),
(4, 'Lẩu', '2019-03-09 06:53:07', '2019-03-09 06:53:07'),
(5, 'Bánh ngọt', '2019-03-09 06:53:14', '2019-03-09 06:53:14'),
(6, 'Cupcake - Muffin', '2019-03-09 06:53:22', '2019-03-09 06:53:22'),
(7, 'Rang - Xào', '2019-03-09 06:53:28', '2019-03-09 06:53:28'),
(8, 'Món luộc', '2019-03-09 06:53:35', '2019-03-09 06:53:35'),
(9, 'Nộm - Gỏi', '2019-03-09 06:53:42', '2019-03-09 06:53:42'),
(10, 'Sinh tố - Nước ép', '2019-03-09 06:53:49', '2019-03-09 06:53:49'),
(11, 'Pasta - Spaghetti', '2019-03-09 06:53:56', '2019-03-09 06:53:56'),
(12, 'Món chiên', '2019-03-09 06:54:03', '2019-03-09 06:54:03'),
(13, 'Thạch - Rau câu', '2019-03-09 06:54:10', '2019-03-09 06:54:10'),
(14, 'Soup - Cháo', '2019-03-09 06:54:15', '2019-03-09 06:54:15'),
(15, 'Cocktail - Mocktail', '2019-03-09 06:54:21', '2019-03-09 06:54:21'),
(16, 'Miến - Hủ tiếu', '2019-03-09 06:54:26', '2019-03-09 06:54:26'),
(17, 'Món cuốn', '2019-03-09 06:54:32', '2019-03-09 06:54:32'),
(18, 'Sữa chua', '2019-03-09 06:54:39', '2019-03-09 06:54:39'),
(19, 'Nem - Chả', '2019-03-09 06:54:46', '2019-03-09 06:54:46'),
(20, 'Kem', '2019-03-09 06:54:53', '2019-03-09 06:54:53'),
(21, 'Bún - Mì - Phở', '2019-03-09 06:54:59', '2019-03-09 06:54:59'),
(22, 'Chưng - hấp', '2019-03-09 06:55:05', '2019-03-09 06:55:05'),
(23, 'Salad', '2019-03-09 06:55:11', '2019-03-09 06:55:11'),
(24, 'Chay', '2019-03-09 06:55:25', '2019-03-09 06:55:25'),
(25, 'Chè', '2019-03-09 06:55:33', '2019-03-09 06:55:33'),
(26, 'Đồ uống', '2019-03-09 06:55:40', '2019-03-09 06:55:40'),
(27, 'Muối chua - Ngâm chua', '2019-03-09 06:55:48', '2019-03-09 06:55:48'),
(28, 'Nước chấm - Sốt', '2019-03-09 06:55:54', '2019-03-09 06:55:54'),
(29, 'Xôi', '2019-03-09 06:56:00', '2019-03-09 06:56:00'),
(30, 'Mứt - Kẹo', '2019-03-09 06:56:06', '2019-03-09 06:56:06'),
(31, 'Nướng - Quay', '2019-03-09 06:56:13', '2019-03-09 06:56:13'),
(32, 'Kho - Rim', '2019-03-09 06:56:19', '2019-03-09 06:56:19'),
(33, 'Canh', '2019-03-09 06:56:26', '2019-03-09 06:56:26'),
(34, 'Bánh mặn', '2019-03-09 06:56:34', '2019-03-09 06:56:34'),
(35, 'Đồ sống', '2019-03-09 06:56:41', '2019-03-09 06:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `luubaiviet`
--

CREATE TABLE `luubaiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `baiviet_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_25_003336_create_tags_table', 1),
(4, '2019_02_27_144155_create_thucdon_table', 1),
(5, '2019_02_27_144443_create_loaimon_table', 1),
(6, '2019_02_27_144616_create_nguyenlieuchinh_table', 1),
(7, '2019_02_27_144655_create_dokho_table', 1),
(8, '2019_02_27_144716_create_amthuc_table', 1),
(9, '2019_02_27_144752_create_phuongphap_table', 1),
(10, '2019_03_01_190744_create_baiviet_table', 1),
(11, '2019_03_01_192401_create_nguyenlieu_table', 1),
(12, '2019_03_01_192428_create_buocthuchien_table', 1),
(13, '2019_03_02_033957_create_baiviet_tag_table', 1),
(14, '2019_03_02_034141_create_thongbao_table', 1),
(15, '2019_03_02_034229_create_rate_table', 1),
(16, '2019_03_02_034300_create_comment_table', 1),
(17, '2019_03_02_034454_create_comment_of_comment_table', 1),
(18, '2019_03_02_034701_create_luu_bai_viet_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baiviet_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`id`, `name`, `soluong`, `baiviet_id`, `created_at`, `updated_at`) VALUES
(1, 'edede', 'deded', 1, '2019-03-09 23:25:33', '2019-03-09 23:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `nguyenlieuchinh`
--

CREATE TABLE `nguyenlieuchinh` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguyenlieuchinh`
--

INSERT INTO `nguyenlieuchinh` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cá', '2019-03-09 06:56:56', '2019-03-09 06:56:56'),
(2, 'Hàu', '2019-03-09 06:57:03', '2019-03-09 06:57:03'),
(3, 'Vịt', '2019-03-09 06:57:10', '2019-03-09 06:57:10'),
(4, 'Cừu', '2019-03-09 06:57:17', '2019-03-09 06:57:17'),
(5, 'Củ', '2019-03-09 06:57:26', '2019-03-09 06:57:26'),
(6, 'Trà - Chè - Thạch', '2019-03-09 06:57:32', '2019-03-09 06:57:32'),
(7, 'Trứng', '2019-03-09 06:57:39', '2019-03-09 06:57:39'),
(8, 'Mứt', '2019-03-09 06:57:46', '2019-03-09 06:57:46'),
(9, 'Tôm', '2019-03-09 06:57:59', '2019-03-09 06:57:59'),
(10, 'Bào ngư', '2019-03-09 06:58:05', '2019-03-09 06:58:05'),
(11, 'Dê', '2019-03-09 06:58:11', '2019-03-09 06:58:11'),
(12, 'Bò Sát', '2019-03-09 06:58:19', '2019-03-09 06:58:19'),
(13, 'Quả', '2019-03-09 06:58:25', '2019-03-09 06:58:25'),
(14, 'Gia vị nấu phở', '2019-03-09 06:58:32', '2019-03-09 06:58:32'),
(15, 'Đậu hũ', '2019-03-09 06:58:38', '2019-03-09 06:58:38'),
(16, 'Hạt', '2019-03-09 06:58:44', '2019-03-09 06:58:44'),
(17, 'Cua', '2019-03-09 06:58:51', '2019-03-09 06:58:51'),
(18, 'Loại thủy hải sản khác', '2019-03-09 06:58:57', '2019-03-09 06:58:57'),
(19, 'Ếch', '2019-03-09 06:59:02', '2019-03-09 06:59:02'),
(20, 'Trâu', '2019-03-09 06:59:08', '2019-03-09 06:59:08'),
(21, 'Loại bột khác', '2019-03-09 06:59:14', '2019-03-09 06:59:14'),
(22, 'Bún- Mì - Nui', '2019-03-09 06:59:20', '2019-03-09 06:59:20'),
(23, 'Chả - Giò - Thịt nguội', '2019-03-09 06:59:27', '2019-03-09 06:59:27'),
(24, 'Sữa', '2019-03-09 06:59:33', '2019-03-09 06:59:33'),
(25, 'Ghẹ', '2019-03-09 06:59:42', '2019-03-09 06:59:42'),
(26, 'Chuột', '2019-03-09 06:59:48', '2019-03-09 06:59:48'),
(27, 'Chim', '2019-03-09 06:59:55', '2019-03-09 06:59:55'),
(28, 'Nai', '2019-03-09 07:00:07', '2019-03-09 07:00:07'),
(29, 'Tinh bột', '2019-03-09 07:00:12', '2019-03-09 07:00:12'),
(30, 'Trái cây', '2019-03-09 07:00:19', '2019-03-09 07:00:19'),
(31, 'Dược liệu - Cây thuố', '2019-03-09 07:00:27', '2019-03-09 07:00:27'),
(32, 'Mực - Bạch tuộc', '2019-03-09 07:00:38', '2019-03-09 07:00:38'),
(33, 'Ốc', '2019-03-09 07:00:43', '2019-03-09 07:00:43'),
(34, 'Sò', '2019-03-09 07:00:50', '2019-03-09 07:00:50'),
(35, 'Gà', '2019-03-09 07:00:55', '2019-03-09 07:00:55'),
(36, 'Bò', '2019-03-09 07:01:01', '2019-03-09 07:01:01'),
(37, 'Heo', '2019-03-09 07:01:07', '2019-03-09 07:01:07'),
(38, 'Thỏ', '2019-03-09 07:01:13', '2019-03-09 07:01:13'),
(39, 'Cầy', '2019-03-09 07:01:19', '2019-03-09 07:01:19'),
(40, 'Mèo', '2019-03-09 07:01:25', '2019-03-09 07:01:25'),
(41, 'Ngỗng', '2019-03-09 07:01:31', '2019-03-09 07:01:31'),
(42, 'Ngan (Vịt xiêm)', '2019-03-09 07:01:38', '2019-03-09 07:01:38'),
(43, 'Rau', '2019-03-09 07:01:44', '2019-03-09 07:01:44'),
(44, 'Ngũ cốc', '2019-03-09 07:01:53', '2019-03-09 07:01:53'),
(45, 'Dầu - Bơ - Phomai', '2019-03-09 07:01:59', '2019-03-09 07:01:59'),
(46, 'Bánh - Kem - Chocolate', '2019-03-09 07:02:07', '2019-03-09 07:02:07'),
(47, 'Đồ chay', '2019-03-09 07:02:15', '2019-03-09 07:02:15'),
(48, 'Nấm', '2019-03-09 07:02:21', '2019-03-09 07:02:21'),
(49, 'Côn trùng', '2019-03-09 07:03:23', '2019-03-09 07:03:23'),
(50, 'Gia Vị', '2019-03-09 07:03:29', '2019-03-09 07:03:29'),
(51, 'Đường - Mật ong', '2019-03-09 07:03:36', '2019-03-09 07:03:36'),
(52, 'Thức uống', '2019-03-09 07:04:27', '2019-03-09 07:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phuongphap`
--

CREATE TABLE `phuongphap` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phuongphap`
--

INSERT INTO `phuongphap` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nướng', '2019-03-09 07:06:18', '2019-03-09 07:06:18'),
(2, 'Xào', '2019-03-09 07:06:24', '2019-03-09 07:06:24'),
(3, 'Sốt', '2019-03-09 07:06:30', '2019-03-09 07:06:30'),
(4, 'Rang', '2019-03-09 07:06:36', '2019-03-09 07:06:36'),
(5, 'Chiên', '2019-03-09 07:06:52', '2019-03-09 07:06:52'),
(6, 'Trộn', '2019-03-09 07:06:59', '2019-03-09 07:06:59'),
(7, 'Nấu', '2019-03-09 07:07:06', '2019-03-09 07:07:06'),
(8, 'Chưng', '2019-03-09 07:07:13', '2019-03-09 07:07:13'),
(9, 'Lẩu', '2019-03-09 07:07:21', '2019-03-09 07:07:21'),
(10, 'Xay', '2019-03-09 07:07:27', '2019-03-09 07:07:27'),
(11, 'Muối', '2019-03-09 07:07:34', '2019-03-09 07:07:34'),
(12, 'Ướp', '2019-03-09 07:07:40', '2019-03-09 07:07:40'),
(13, 'Luộc', '2019-03-09 07:07:46', '2019-03-09 07:07:46'),
(14, 'Ép', '2019-03-09 07:07:51', '2019-03-09 07:07:51'),
(15, 'Vắt', '2019-03-09 07:07:58', '2019-03-09 07:07:58'),
(16, 'Ram', '2019-03-09 07:08:09', '2019-03-09 07:08:09'),
(17, 'Hầm', '2019-03-09 07:08:15', '2019-03-09 07:08:15'),
(18, 'Kho', '2019-03-09 07:08:21', '2019-03-09 07:08:21'),
(19, 'Ủ', '2019-03-09 07:08:27', '2019-03-09 07:08:27'),
(20, 'Hấp', '2019-03-09 07:08:33', '2019-03-09 07:08:33'),
(21, 'Ngâm', '2019-03-09 07:08:39', '2019-03-09 07:08:39'),
(22, 'Cuốn', '2019-03-09 07:08:45', '2019-03-09 07:08:45'),
(23, 'Tiềm', '2019-03-09 07:08:51', '2019-03-09 07:08:51'),
(24, 'Om', '2019-03-09 07:08:57', '2019-03-09 07:08:57'),
(25, 'Quay', '2019-03-09 07:09:03', '2019-03-09 07:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(10) UNSIGNED NOT NULL,
  `point` int(11) NOT NULL,
  `baiviet_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thucdon`
--

INSERT INTO `thucdon` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Món khai vị', '2019-03-09 07:04:40', '2019-03-09 07:04:40'),
(2, 'Bánh - Bánh ngọt', '2019-03-09 07:04:48', '2019-03-09 07:04:48'),
(3, 'Món tráng miệng', '2019-03-09 07:04:55', '2019-03-09 07:04:55'),
(4, 'Món ăn cho trẻ', '2019-03-09 07:05:02', '2019-03-09 07:05:02'),
(5, 'Món chay', '2019-03-09 07:05:08', '2019-03-09 07:05:08'),
(6, 'Món nhậu', '2019-03-09 07:05:14', '2019-03-09 07:05:14'),
(7, 'Món chính', '2019-03-09 07:05:20', '2019-03-09 07:05:20'),
(8, 'Món ăn sáng', '2019-03-09 07:05:26', '2019-03-09 07:05:26'),
(9, 'Nhanh và dễ', '2019-03-09 07:05:32', '2019-03-09 07:05:32'),
(10, 'Thức uống', '2019-03-09 07:05:39', '2019-03-09 07:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decription` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `ngay_sinh` date DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `block_cmt` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_bia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem` int(11) NOT NULL DEFAULT '0',
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nick_name`, `decription`, `email`, `email_verified_at`, `role`, `ngay_sinh`, `sex`, `block`, `block_cmt`, `avatar`, `anh_bia`, `diem`, `link_facebook`, `link_instagram`, `link_twitter`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lekhactoan', 'leo', 'Vào trang cá nhân t muốn đụ t hay gì', 'lkhactoan@gmail.com', NULL, 1, '1998-01-08', 0, 0, 0, 'nLt6_cooky-recipe-636865869637216671.jpg', 'knpY_cooky-recipe-636865869637216671.jpg', 0, 'https://www.facebook.com/suri.nguyen.1276487', 'https://www.instagram.com/toan_ll/', NULL, '$2y$10$X80SPdUSWHe4kK/C8n3l4uOs36I0zCZsvcmnOJDGR9aEy1JV2kWYm', 'U8Wh3d382OeiJEISDWoO2yvC0JRR1yShrWsXA2w0FyB3npbzJvxN3est9cRm', '2019-03-05 07:30:51', '2019-03-09 07:10:41'),
(2, 'Le Khac Toan', 'leo', 'dsdsđsdsds', 'lktoan@outlook.com.vn', NULL, 0, '2019-01-29', 0, 0, 0, 'rhmy_reje.png', '71xS_gore.png', 0, NULL, NULL, NULL, '$2y$10$TjuJsSjU8rLDvXEUuL6r6.dyyb.J9Dw8xnXtQ49ip52xjPAxrrkfi', 'TxL9az5eurKXv2TNceeiRS6pk32grfXMmggyCUEoab7z8Ce04RmIqeJOk8vY', '2019-03-05 08:43:05', '2019-03-09 07:25:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amthuc`
--
ALTER TABLE `amthuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baiviet_user_id_foreign` (`user_id`),
  ADD KEY `baiviet_thucdon_id_foreign` (`thucdon_id`),
  ADD KEY `baiviet_loaimon_id_foreign` (`loaimon_id`),
  ADD KEY `baiviet_nguyenlieuchinh_id_foreign` (`nguyenlieuchinh_id`),
  ADD KEY `baiviet_dokho_id_foreign` (`dokho_id`),
  ADD KEY `baiviet_amthuc_id_foreign` (`amthuc_id`),
  ADD KEY `baiviet_phuongphap_id_foreign` (`phuongphap_id`);

--
-- Indexes for table `baiviet_tag`
--
ALTER TABLE `baiviet_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baiviet_tag_baiviet_id_foreign` (`baiviet_id`),
  ADD KEY `baiviet_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `buocthuchien`
--
ALTER TABLE `buocthuchien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buocthuchien_baiviet_id_foreign` (`baiviet_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_baiviet_id_foreign` (`baiviet_id`),
  ADD KEY `comment_user_id_foreign` (`user_id`);

--
-- Indexes for table `comment_of_comment`
--
ALTER TABLE `comment_of_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_of_comment_user_id_foreign` (`user_id`),
  ADD KEY `comment_of_comment_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `dokho`
--
ALTER TABLE `dokho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaimon`
--
ALTER TABLE `loaimon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luubaiviet`
--
ALTER TABLE `luubaiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `luubaiviet_user_id_foreign` (`user_id`),
  ADD KEY `luubaiviet_baiviet_id_foreign` (`baiviet_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguyenlieu_baiviet_id_foreign` (`baiviet_id`);

--
-- Indexes for table `nguyenlieuchinh`
--
ALTER TABLE `nguyenlieuchinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phuongphap`
--
ALTER TABLE `phuongphap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rate_baiviet_id_foreign` (`baiviet_id`),
  ADD KEY `rate_user_id_foreign` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thongbao_user_id_foreign` (`user_id`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `amthuc`
--
ALTER TABLE `amthuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baiviet_tag`
--
ALTER TABLE `baiviet_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buocthuchien`
--
ALTER TABLE `buocthuchien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_of_comment`
--
ALTER TABLE `comment_of_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokho`
--
ALTER TABLE `dokho`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaimon`
--
ALTER TABLE `loaimon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `luubaiviet`
--
ALTER TABLE `luubaiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nguyenlieuchinh`
--
ALTER TABLE `nguyenlieuchinh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `phuongphap`
--
ALTER TABLE `phuongphap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_amthuc_id_foreign` FOREIGN KEY (`amthuc_id`) REFERENCES `amthuc` (`id`),
  ADD CONSTRAINT `baiviet_dokho_id_foreign` FOREIGN KEY (`dokho_id`) REFERENCES `dokho` (`id`),
  ADD CONSTRAINT `baiviet_loaimon_id_foreign` FOREIGN KEY (`loaimon_id`) REFERENCES `loaimon` (`id`),
  ADD CONSTRAINT `baiviet_nguyenlieuchinh_id_foreign` FOREIGN KEY (`nguyenlieuchinh_id`) REFERENCES `nguyenlieuchinh` (`id`),
  ADD CONSTRAINT `baiviet_phuongphap_id_foreign` FOREIGN KEY (`phuongphap_id`) REFERENCES `phuongphap` (`id`),
  ADD CONSTRAINT `baiviet_thucdon_id_foreign` FOREIGN KEY (`thucdon_id`) REFERENCES `thucdon` (`id`),
  ADD CONSTRAINT `baiviet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `baiviet_tag`
--
ALTER TABLE `baiviet_tag`
  ADD CONSTRAINT `baiviet_tag_baiviet_id_foreign` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`id`),
  ADD CONSTRAINT `baiviet_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `buocthuchien`
--
ALTER TABLE `buocthuchien`
  ADD CONSTRAINT `buocthuchien_baiviet_id_foreign` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_baiviet_id_foreign` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment_of_comment`
--
ALTER TABLE `comment_of_comment`
  ADD CONSTRAINT `comment_of_comment_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `comment_of_comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `luubaiviet`
--
ALTER TABLE `luubaiviet`
  ADD CONSTRAINT `luubaiviet_baiviet_id_foreign` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`id`),
  ADD CONSTRAINT `luubaiviet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD CONSTRAINT `nguyenlieu_baiviet_id_foreign` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_baiviet_id_foreign` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`id`),
  ADD CONSTRAINT `rate_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `thongbao_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
