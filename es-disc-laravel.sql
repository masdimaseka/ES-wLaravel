-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2025 at 05:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `es-disc-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` bigint UNSIGNED NOT NULL,
  `diagnosa_id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_diagnosa` json NOT NULL,
  `kondisi` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `diagnosa_id`, `data_diagnosa`, `kondisi`, `created_at`, `updated_at`, `user_id`) VALUES
(14, '7402ba52-72c3-4b81-a52c-b8640c4f6073', '[{\"value\": 0.9385, \"kode_sifat\": \"P001\"}, {\"value\": 0.9147, \"kode_sifat\": \"P002\"}, {\"value\": 0.8293, \"kode_sifat\": \"P003\"}, {\"value\": 0.8955, \"kode_sifat\": \"P004\"}]', '[[\"G001\", 0.5], [\"G002\", 0], [\"G003\", 0], [\"G004\", 0.5], [\"G005\", 1], [\"G006\", 0], [\"G007\", 0], [\"G008\", 1], [\"G009\", 0.25], [\"G010\", 0.5], [\"G011\", 0.5], [\"G012\", 0.25], [\"G013\", 0.75], [\"G014\", 0.5], [\"G015\", 0.5], [\"G016\", 0.5], [\"G017\", 0.75], [\"G018\", 0], [\"G019\", 0.75], [\"G020\", 0.5], [\"G021\", 0.25], [\"G022\", 0.25], [\"G023\", 1], [\"G024\", 0.5], [\"G025\", 0.5], [\"G026\", 0.5], [\"G027\", 1], [\"G028\", 1], [\"G029\", 0.5], [\"G030\", 0.5], [\"G031\", 1], [\"G032\", 0.5], [\"G033\", 0.75], [\"G034\", 0.5], [\"G035\", 0], [\"G036\", 0.5], [\"G037\", 0.5], [\"G038\", 0.25], [\"G039\", 0.25], [\"G040\", 0.5], [\"G041\", 0.5], [\"G042\", 0.75], [\"G043\", 0.5], [\"G044\", 1]]', '2025-06-18 15:15:54', '2025-06-18 15:15:54', 2),
(16, 'dac92df8-c8e6-470c-bef1-d443ca8fb120', '[{\"value\": 0.9949, \"kode_sifat\": \"P001\"}, {\"value\": 0.9348, \"kode_sifat\": \"P002\"}, {\"value\": 0.685, \"kode_sifat\": \"P003\"}, {\"value\": 0.9307, \"kode_sifat\": \"P004\"}]', '[[\"G001\", 0.25], [\"G002\", 0.5], [\"G003\", 0.5], [\"G004\", 1], [\"G005\", 0.5], [\"G006\", 0.25], [\"G007\", 1], [\"G008\", 1], [\"G009\", 1], [\"G010\", 0], [\"G011\", 0.75], [\"G012\", 0.5], [\"G013\", 0.75], [\"G014\", 0.75], [\"G015\", 0.75], [\"G016\", 0.75], [\"G017\", 0.25], [\"G018\", 0], [\"G019\", 0.5], [\"G020\", 0.5], [\"G021\", 0.5], [\"G022\", 0.75], [\"G023\", 0.5], [\"G024\", 0.25], [\"G025\", 0.75], [\"G026\", 1], [\"G028\", 0.75], [\"G029\", 0], [\"G030\", 0.25], [\"G031\", 0.25], [\"G032\", 0.75], [\"G033\", 0.75], [\"G034\", 1], [\"G035\", 1], [\"G036\", 0.5], [\"G037\", 0], [\"G038\", 0.75], [\"G039\", 0], [\"G040\", 0.25], [\"G041\", 0.75], [\"G042\", 0.25], [\"G043\", 0.5], [\"G044\", 0.25]]', '2025-06-18 16:18:44', '2025-06-18 16:18:44', 2),
(17, '89e1fbb0-8e59-4ef3-8d58-8d1ffed5d50c', '[{\"value\": 0.9631, \"kode_sifat\": \"P001\"}, {\"value\": 0.9752, \"kode_sifat\": \"P002\"}, {\"value\": 0.7524, \"kode_sifat\": \"P003\"}, {\"value\": 0.9824, \"kode_sifat\": \"P004\"}]', '[[\"G001\", 0.5], [\"G002\", 0], [\"G003\", 0.25], [\"G004\", 0.75], [\"G005\", 0.25], [\"G006\", 0.25], [\"G007\", 0.25], [\"G008\", 0.5], [\"G009\", 0.75], [\"G010\", 0.5], [\"G011\", 0.75], [\"G012\", 0.25], [\"G013\", 1], [\"G014\", 1], [\"G015\", 0.25], [\"G016\", 0.25], [\"G017\", 0.5], [\"G018\", 0.75], [\"G019\", 0.75], [\"G020\", 0.5], [\"G021\", 1], [\"G022\", 1], [\"G023\", 0], [\"G024\", 1], [\"G025\", 0.5], [\"G026\", 0.5], [\"G027\", 0.75], [\"G028\", 0.75], [\"G029\", 1], [\"G030\", 0.75], [\"G031\", 1], [\"G032\", 0.75], [\"G033\", 0], [\"G034\", 1], [\"G035\", 0.75], [\"G036\", 0.5], [\"G037\", 1], [\"G038\", 0.5], [\"G039\", 1], [\"G040\", 1], [\"G041\", 0.75], [\"G042\", 0.75], [\"G043\", 1], [\"G044\", 0.25], [\"G045\", 0.75]]', '2025-06-24 04:36:07', '2025-06-24 04:36:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'Tegas dan suka tantangan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(2, 'G002', 'Berani mengambil risiko', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(3, 'G003', 'Dominan dalam pengambilan keputusan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(4, 'G004', 'Mandiri dan tidak suka bergantung pada orang lain', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(5, 'G005', 'Cepat mengambil keputusan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(6, 'G006', 'Cenderung mengontrol situasi', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(7, 'G007', 'Suka memimpin', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(8, 'G008', 'Memiliki keinginan kuat untuk mencapai target', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(9, 'G009', 'Suka bekerja mandiri', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(10, 'G010', 'Tidak mudah dipengaruhi', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(11, 'G011', 'Cenderung terlalu jujur bahkan tanpa filter', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(12, 'G012', 'Suka berbicara dan mempengaruhi orang lain', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(13, 'G013', 'Mudah bergaul dan ramah', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(14, 'G014', 'Suka menjadi pusat perhatian', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(15, 'G015', 'Kreatif dan imajinatif', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(16, 'G016', 'Spontan dan fleksibel', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(17, 'G017', 'Optimis dan selalu berpikir positif', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(18, 'G018', 'Cepat bosan dan mudah terdistraksi', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(19, 'G019', 'Mudah membangun relasi baru', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(20, 'G020', 'Antusias dan penuh semangat', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(21, 'G021', 'Humor tinggi dan menyenangkan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(22, 'G022', 'Emosional dan ekspresif', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(23, 'G023', 'Menjaga keharmonisan dalam tim', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(24, 'G024', 'Pendengar yang baik', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(25, 'G025', 'Menghindari konflik', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(26, 'G026', 'Suka rutinitas', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(27, 'G027', 'Dapat bekerja konsisten dalam tekanan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(28, 'G028', 'Suka menyelesaikan tugas hingga tuntas', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(29, 'G029', 'Sulit menerima perubahan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(30, 'G030', 'Konsisten dan loyal', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(31, 'G031', 'Empatik dan peduli pada perasaan orang lain', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(32, 'G032', 'Sensitif terhadap kritik', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(33, 'G033', 'Tenang dan sabar', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(34, 'G034', 'Teliti dan patuh terhadap aturan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(35, 'G035', 'Perfeksionis dan detail oriented', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(36, 'G036', 'Pemalu dan tertutup', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(37, 'G037', 'Disiplin dan terorganisir', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(38, 'G038', 'Analitis dan suka berpikir logis', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(39, 'G039', 'Cermat dalam pekerjaan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(40, 'G040', 'Berorientasi pada kualitas', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(41, 'G041', 'Selalu ingin segala sesuatu sempurna', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(42, 'G042', 'Tidak suka mengambil risiko', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(43, 'G043', 'Perlu waktu lama untuk mengambil keputusan', '2025-06-18 22:22:06', '2025-06-18 22:22:06'),
(44, 'G044', 'Cenderung mematuhi aturan ketat', '2025-06-18 22:22:06', '2025-06-18 22:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_gejala` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sifat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb` double NOT NULL,
  `md` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`id`, `kode_gejala`, `kode_sifat`, `mb`, `md`, `created_at`, `updated_at`) VALUES
(101, 'G001', 'P001', 0.9, 0.1, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(102, 'G002', 'P001', 0.85, 0.15, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(103, 'G003', 'P001', 0.8, 0.2, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(104, 'G004', 'P001', 0.75, 0.25, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(105, 'G005', 'P001', 0.7, 0.3, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(106, 'G006', 'P001', 0.88, 0.12, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(107, 'G007', 'P001', 0.82, 0.18, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(108, 'G008', 'P001', 0.76, 0.24, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(109, 'G009', 'P001', 0.79, 0.21, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(110, 'G010', 'P001', 0.74, 0.26, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(111, 'G011', 'P001', 0.77, 0.23, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(112, 'G012', 'P002', 0.8, 0.2, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(113, 'G013', 'P002', 0.75, 0.25, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(114, 'G014', 'P002', 0.7, 0.3, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(115, 'G015', 'P002', 0.65, 0.35, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(116, 'G016', 'P002', 0.6, 0.4, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(117, 'G017', 'P002', 0.78, 0.22, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(118, 'G018', 'P002', 0.72, 0.28, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(119, 'G019', 'P002', 0.69, 0.31, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(120, 'G020', 'P002', 0.74, 0.26, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(121, 'G021', 'P002', 0.68, 0.32, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(122, 'G022', 'P002', 0.67, 0.33, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(123, 'G023', 'P003', 0.7, 0.3, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(124, 'G024', 'P003', 0.65, 0.35, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(125, 'G025', 'P003', 0.6, 0.4, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(126, 'G026', 'P003', 0.55, 0.45, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(127, 'G027', 'P003', 0.5, 0.5, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(128, 'G028', 'P003', 0.62, 0.38, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(129, 'G029', 'P003', 0.58, 0.42, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(130, 'G030', 'P003', 0.63, 0.37, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(131, 'G031', 'P003', 0.59, 0.41, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(132, 'G032', 'P003', 0.56, 0.44, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(133, 'G033', 'P003', 0.61, 0.39, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(134, 'G034', 'P004', 0.75, 0.25, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(135, 'G035', 'P004', 0.72, 0.28, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(136, 'G036', 'P004', 0.7, 0.3, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(137, 'G037', 'P004', 0.68, 0.32, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(138, 'G038', 'P004', 0.66, 0.34, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(139, 'G039', 'P004', 0.64, 0.36, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(140, 'G040', 'P004', 0.69, 0.31, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(141, 'G041', 'P004', 0.73, 0.27, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(142, 'G042', 'P004', 0.71, 0.29, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(143, 'G043', 'P004', 0.67, 0.33, '2025-06-18 14:32:30', '2025-06-18 14:32:30'),
(144, 'G044', 'P004', 0.65, 0.35, '2025-06-18 14:32:30', '2025-06-18 14:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_user`
--

CREATE TABLE `kondisi_user` (
  `id` bigint UNSIGNED NOT NULL,
  `opsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kondisi_user`
--

INSERT INTO `kondisi_user` (`id`, `opsi`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Sangat Tidak Yakin', 0, '2025-06-17 16:28:20', '2025-06-17 16:28:20'),
(2, 'Tidak Yakin', 0.25, '2025-06-17 16:28:20', '2025-06-17 16:28:20'),
(3, 'Ragu-ragu', 0.5, '2025-06-17 16:28:20', '2025-06-17 16:28:20'),
(4, 'Yakin', 0.75, '2025-06-17 16:28:20', '2025-06-17 16:28:20'),
(5, 'Sangat Yakin', 1, '2025-06-17 16:28:20', '2025-06-17 16:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_17_235106_create_gejala_table', 2),
(5, '2025_06_17_235747_create_gejala_table', 3),
(6, '2025_06_18_000745_add_role_to_users_table', 4),
(7, '2025_06_18_001949_create_kondisiuser_table', 5),
(10, '2025_06_18_003354_create_sifat_disc_table', 6),
(11, '2025_06_18_004550_create_keputusan_table', 6),
(14, '2025_06_18_005946_create_diagnosa_table', 7),
(15, '2025_06_18_075751_add_user_id_to_diagnosa_table', 7),
(16, '2025_06_18_134930_add_desc_to_sifatdisc_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('sgALDv06dMqwlz4C3tvgJH4ro5QRBv7ByeVlNeNt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUdwankyNmp4ZzBQVU5JN1l0TkZUSkJJZ2czaWNNODZ2NmF2eE5uWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1750743808);

-- --------------------------------------------------------

--
-- Table structure for table `sifat_disc`
--

CREATE TABLE `sifat_disc` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_sifat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sifat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sifat_disc`
--

INSERT INTO `sifat_disc` (`id`, `kode_sifat`, `nama_sifat`, `created_at`, `updated_at`, `desc`) VALUES
(1, 'P001', 'Dominance (D)', '2025-06-17 16:57:44', '2025-06-17 16:57:44', 'Dominance (D) mencerminkan sifat seseorang yang tegas, ambisius, dan berorientasi pada hasil. Mereka cenderung suka tantangan, cepat mengambil keputusan, dan fokus pada tujuan. Individu dengan sifat ini sering terlihat percaya diri dan tidak takut mengambil risiko untuk meraih keberhasilan.'),
(2, 'P002', 'Influence  (I)', '2025-06-17 16:57:44', '2025-06-17 16:57:44', 'Influence (I) menggambarkan pribadi yang ramah, persuasif, dan antusias. Mereka pandai berkomunikasi, suka bersosialisasi, dan mampu memengaruhi orang lain dengan mudah. Tipe ini sangat menghargai hubungan interpersonal dan lebih termotivasi oleh pengakuan serta apresiasi dari lingkungan sekitar.'),
(3, 'P003', 'Steadiness (S)', '2025-06-17 16:57:44', '2025-06-17 16:57:44', 'Steadiness (S) menunjukkan karakter yang sabar, setia, dan konsisten. Mereka suka stabilitas, menghargai kerja sama tim, dan memiliki empati tinggi terhadap orang lain. Tipe ini cenderung menghindari konflik dan lebih memilih pendekatan yang harmonis dalam menyelesaikan masalah.'),
(4, 'P004', 'Conscientiousness (C)', '2025-06-17 16:57:44', '2025-06-17 16:57:44', 'Conscientiousness (C) menggambarkan individu yang analitis, perfeksionis, dan berhati-hati. Mereka sangat memperhatikan detail, mengikuti aturan, dan memiliki standar kualitas yang tinggi. Orang dengan sifat ini lebih suka bekerja secara sistematis dan mengambil keputusan berdasarkan logika dan data.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'dimas', 'dimas@gmail.com', NULL, '$2y$12$cTjOc9YEK3OUjUN9A38ZMOpmkQaEx7nJZLhl2gmofcKl6F46QAIaG', NULL, '2025-06-09 19:36:41', '2025-06-09 19:36:41', 'user'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$qM/2LwG7NQiVr7tzT7qif.5mD9PiNyuElfL4RV7rYVxLAD5zLltWO', NULL, '2025-06-18 03:58:44', '2025-06-18 03:58:44', 'admin');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosa_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gejala_kode_gejala_unique` (`kode_gejala`);

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
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_user`
--
ALTER TABLE `kondisi_user`
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
-- Indexes for table `sifat_disc`
--
ALTER TABLE `sifat_disc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sifat_disc_kode_sifat_unique` (`kode_sifat`);

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
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `kondisi_user`
--
ALTER TABLE `kondisi_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sifat_disc`
--
ALTER TABLE `sifat_disc`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
