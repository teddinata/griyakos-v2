-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2021 pada 11.20
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `griyakos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_packages_id` int(11) NOT NULL,
  `facilities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `room_packages_id`, `facilities`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Parkir', NULL, '2020-03-25 10:54:27', '2020-03-25 10:54:27'),
(2, 2, 'Lemari', NULL, '2020-03-28 10:28:31', '2020-03-28 10:28:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `room_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/gallery/MK6jJn9YKyS4mUuSalhrcKihHxWgN13ILJNUIlv3.jpeg', '2020-10-08 09:13:56', '2020-03-25 10:54:17', '2020-10-08 09:13:56'),
(2, 2, 'assets/gallery/WNMTP9PMEMXA5wpU6diGjQrMve4p9v3wxYjXNrgi.jpeg', '2020-10-08 09:13:59', '2020-03-28 10:29:05', '2020-10-08 09:13:59'),
(3, 1, 'assets/gallery/S1bOMhrW5A8qbxEkTbRob9CQ1Plb12FjM439h3q9.jpeg', '2020-10-08 09:14:02', '2020-09-13 21:44:43', '2020-10-08 09:14:02'),
(4, 1, 'assets/gallery/WItNSGAdbMgN16y8PX1ohjWSIkQ4cPBqqPBzFzfl.jpeg', NULL, '2020-10-08 09:15:15', '2020-10-08 09:15:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(272, '2014_10_12_100000_create_password_resets_table', 2),
(273, '2019_08_19_000000_create_failed_jobs_table', 2),
(274, '2019_11_26_075236_create_room_packages_table', 2),
(275, '2019_11_26_085407_create_travel_packages_table', 2),
(276, '2019_11_26_093119_create_galleries_table', 2),
(277, '2019_11_26_095920_create_transactions_table', 2),
(278, '2019_11_26_102639_create_transaction_details_table', 2),
(279, '2019_11_26_103630_add_roles_field_to_users_table', 2),
(280, '2019_11_26_175714_add_username_field_to_users_table', 2),
(281, '2019_11_28_115140_create_travel_galleries_table', 2),
(282, '2019_11_28_122017_create_travel_transactions_table', 2),
(283, '2019_11_28_125630_create_travel_transaction_details_table', 2),
(284, '2020_01_09_115917_add_phone_field_to_users_table', 2),
(285, '2020_01_10_042423_create_user_data_table', 2),
(286, '2020_01_13_092440_add_birth_field_to_users_table', 2),
(287, '2020_03_04_004525_create_facilities_table', 2),
(288, '2020_03_25_053059_create_room_types_table', 2),
(289, '2020_03_28_082813_add_pricing_and_start_date_on_transactions_table', 3),
(295, '2020_04_02_163528_add_kode_unik_on_transactions_table', 4),
(296, '2020_04_07_115656_add_address_on_user_data_table', 5),
(299, '2020_04_13_165412_create_pembayarans_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('timur@gmail.com', '$2y$10$0d8syTGzw9o3tlmA7HyfBOJSImL.VnAPx1pYCU9NIb5HzXLy6K4ja', '2020-04-11 20:53:28'),
('teddinata2@gmail.com', '$2y$10$JclS98mJWDRaCzXX3U2DmuL/2Cys7ahesB5NA4VACzxsZ2gJIPZnG', '2020-04-11 20:55:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `transactions_id`, `foto`, `bank`, `nama`, `rekening`, `tanggal_transfer`, `total`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 26, 'data  error.PNG', 'Mandiri', 'Teddinata Kusuma', '1231231231', '2020-04-21', '500023', NULL, '2020-04-19 21:11:14', '2020-04-19 21:11:14'),
(2, 30, 'bwastore 2.PNG', 'Mandiri', 'Teddinata', '12312312', '2020-09-10', '1000', NULL, '2020-09-03 02:14:24', '2020-09-03 02:14:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_packages_id` int(11) NOT NULL,
  `durasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `room_packages_id`, `durasi`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, '1 Hari', 50000, NULL, '2020-03-25 09:54:33', '2020-03-25 09:54:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room_packages`
--

CREATE TABLE `room_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room_packages`
--

INSERT INTO `room_packages` (`id`, `title`, `slug`, `location`, `about`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Griya Kos 1', 'griya-kos-1', 'Gunungsimping, Cilacap', 'Griya Kos adalah indekos atau kos yang berlokasi di Cilacap. Meskipun dengan embel-embel \"Kos\", Griya Kos tidak hanya melayani sewa kos bulanan, tetapi bisa juga sewa harian yang cocok digunakan untuk para backpacker atau wisatawan yang menginginkan penginapan murah dan terjangkau.  Fasilitas yang diberikan pun tidak seadanya, yaitu berupa tempat tidur berukuran queen (160 cm x 200 cm), kamar mandi dalam, meja rias, dan lemari. Tempat parkir luas dan dekat dengan pusat kota mampu menjadi- kan sebagai penunjang fasilitas dari Griya Kos.', '1', 500000, NULL, '2020-03-25 10:53:51', '2020-03-28 10:27:34'),
(2, 'Griya Kos 2', 'griya-kos-2', 'Gunungsimping, Cilacap', 'Griya Kos adalah indekos atau kos yang berlokasi di Cilacap. Meskipun dengan embel-embel \"Kos\", Griya Kos tidak hanya melayani sewa kos bulanan, tetapi bisa juga sewa harian yang cocok digunakan untuk para backpacker atau wisatawan yang menginginkan penginapan murah dan terjangkau.  Fasilitas yang diberikan pun tidak seadanya, yaitu berupa tempat tidur berukuran queen (160 cm x 200 cm), kamar mandi dalam, meja rias, dan lemari. Tempat parkir luas dan dekat dengan pusat kota mampu menjadi- kan sebagai penunjang fasilitas dari Griya Kos.', '5 Kamar', 600000, NULL, '2020-03-28 10:28:17', '2020-03-28 10:28:17'),
(3, 'Griya Kos 3', 'griya-kos-3', 'Gunungsimping, Cilacap', 'Griya Kos adalah indekos atau kos yang berlokasi di Cilacap. Meskipun dengan embel-embel \"Kos\", Griya Kos tidak hanya melayani sewa kos bulanan, tetapi bisa juga sewa harian yang cocok digunakan untuk para backpacker atau wisatawan yang menginginkan penginapan murah dan terjangkau.  Fasilitas yang diberikan pun tidak seadanya, yaitu berupa tempat tidur berukuran queen (160 cm x 200 cm), kamar mandi dalam, meja rias, dan lemari. Tempat parkir luas dan dekat dengan pusat kota mampu menjadi- kan sebagai penunjang fasilitas dari Griya Kos.', '2', 0, NULL, '2020-03-28 21:15:46', '2020-03-28 21:15:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room_types`
--

CREATE TABLE `room_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_packages_id` int(11) NOT NULL,
  `durasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room_types`
--

INSERT INTO `room_types` (`id`, `room_packages_id`, `durasi`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '1 Hari', 50000, NULL, '2020-03-25 10:54:42', '2020-03-25 10:54:42'),
(2, 1, '1 Bulan', 500000, NULL, '2020-03-25 10:58:41', '2020-03-25 10:58:41'),
(3, 2, '1 Hari', 50000, NULL, '2020-03-28 10:48:27', '2020-03-28 10:48:27'),
(4, 3, '1 Hari', 100000, NULL, '2020-03-28 21:16:08', '2020-03-28 21:16:08'),
(5, 1, '1 Tahun', 6000000, NULL, '2020-03-29 19:21:35', '2020-03-29 19:21:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_types_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode_unik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `room_packages_id`, `users_id`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`, `room_types_id`, `kode_unik`) VALUES
(1, 1, 1, 50000, 'IN_CART', NULL, '2020-03-25 10:54:56', '2020-03-25 10:54:56', NULL, 0),
(2, 1, 1, 50000, 'IN_CART', NULL, '2020-03-25 10:59:28', '2020-03-25 10:59:28', NULL, 0),
(3, 1, 1, 50000, 'IN_CART', NULL, '2020-03-25 11:13:24', '2020-03-25 11:13:24', NULL, 0),
(4, 1, 1, 50000, 'PENDING', NULL, '2020-03-28 10:16:59', '2020-03-28 10:17:15', 1, 0),
(5, 2, 1, -550000, 'IN_CART', NULL, '2020-03-28 10:48:58', '2020-03-28 10:49:05', 3, 0),
(6, 1, 4, 500000, 'IN_CART', NULL, '2020-03-28 20:35:21', '2020-03-28 20:43:52', 2, 0),
(7, 3, 3, 100000, 'PENDING', NULL, '2020-03-28 21:16:33', '2020-03-28 21:16:56', 4, 0),
(8, 2, 3, 50000, 'PENDING', NULL, '2020-03-28 22:05:23', '2020-03-28 22:05:30', 3, 0),
(9, 2, 3, 50000, 'PENDING', NULL, '2020-03-28 22:08:31', '2020-03-28 22:08:40', 3, 0),
(10, 1, 3, 6000000, 'PENDING', NULL, '2020-03-29 19:22:10', '2020-03-29 19:22:22', 5, 0),
(11, 1, 3, 6000000, 'SUCCESS', NULL, '2020-03-29 19:40:46', '2020-03-29 19:44:16', 5, 0),
(12, 1, 4, 500000, 'IN_CART', NULL, '2020-04-02 06:40:15', '2020-04-02 06:40:15', 2, 0),
(13, 1, 4, 500000, 'IN_CART', NULL, '2020-04-02 06:54:56', '2020-04-02 06:54:56', 2, 0),
(14, 1, 4, 500000, 'FAILED', NULL, '2020-04-02 10:14:50', '2020-04-02 11:05:21', 2, 0),
(15, 1, 4, 6000000, 'IN_CART', NULL, '2020-04-02 11:09:37', '2020-04-02 11:26:27', 5, 0),
(16, 1, 4, 500000, 'SUCCESS', NULL, '2020-04-02 21:49:42', '2020-04-02 21:52:05', 2, 0),
(17, 1, 1, 0, 'IN_CART', NULL, '2020-04-07 10:39:59', '2020-04-07 10:40:08', 2, 0),
(18, 1, 1, 500000, 'IN_CART', NULL, '2020-04-07 10:40:35', '2020-04-07 10:40:35', 2, 0),
(19, 1, 1, 6000000, 'PENDING', NULL, '2020-04-07 10:41:26', '2020-04-07 10:41:32', 5, 0),
(20, 1, 1, 500000, 'PENDING', NULL, '2020-04-08 09:34:31', '2020-04-08 09:34:38', 2, 663),
(21, 1, 1, 500000, 'IN_CART', NULL, '2020-04-13 07:33:20', '2020-04-13 07:33:20', 2, 121),
(22, 1, 1, 500000, 'IN_CART', NULL, '2020-04-13 07:34:13', '2020-04-13 07:34:13', 2, 309),
(23, 1, 1, 500000, 'FAILED', NULL, '2020-04-13 07:35:12', '2020-04-19 06:19:35', 2, 348),
(24, 1, 1, 500000, 'CANCEL', NULL, '2020-04-13 07:35:23', '2020-04-19 06:19:21', 2, 77),
(25, 1, 1, 500000, 'SUCCESS', NULL, '2020-04-13 07:36:44', '2020-04-19 05:42:13', 2, 443),
(26, 1, 10, 500000, 'SUCCESS', NULL, '2020-04-19 21:04:21', '2020-04-19 21:11:48', 2, 23),
(27, 1, 4, 500000, 'PENDING', NULL, '2020-05-11 07:54:09', '2020-05-11 07:54:09', 2, 988),
(28, 2, 4, 50000, 'PENDING', NULL, '2020-07-27 02:57:44', '2020-07-27 02:57:44', 3, 884),
(29, 1, 4, 6000000, 'PENDING', NULL, '2020-08-25 23:33:17', '2020-08-25 23:33:17', 5, 557),
(30, 2, 4, 50000, 'SUCCESS', NULL, '2020-09-03 02:01:43', '2020-09-03 02:17:32', 3, 617),
(31, 2, 4, 50000, 'PENDING', NULL, '2020-09-03 02:09:52', '2020-09-03 02:09:52', 3, 690),
(32, 1, 3, 50000, 'SUCCESS', NULL, '2021-02-16 02:08:27', '2021-02-16 02:11:37', 1, 997),
(33, 1, 3, 500000, 'PENDING', NULL, '2021-02-16 02:51:49', '2021-02-16 02:51:49', 2, 81);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `job`, `checkin`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Belum diisi', 'Belum diisi', '2020-03-26', NULL, '2020-03-25 10:54:56', '2020-03-25 10:54:56'),
(2, 2, '', 'Belum diisi', 'Belum diisi', '2020-03-26', NULL, '2020-03-25 10:59:28', '2020-03-25 10:59:28'),
(3, 3, '', 'Belum diisi', 'Belum diisi', '2020-03-26', NULL, '2020-03-25 11:13:24', '2020-03-25 11:13:24'),
(4, 4, '', 'Belum diisi', 'Belum diisi', '2020-04-02', NULL, '2020-03-28 10:16:59', '2020-03-28 10:16:59'),
(5, 5, '', 'Belum diisi', 'Belum diisi', '2020-03-28', '2020-03-28 10:49:05', '2020-03-28 10:48:58', '2020-03-28 10:49:05'),
(6, 6, '', 'Belum diisi', 'Belum diisi', '2020-04-01', '2020-03-28 20:35:43', '2020-03-28 20:35:21', '2020-03-28 20:35:43'),
(7, 6, 'teddinata', 'ID', 'Karyawan', '2020-04-02', NULL, '2020-03-28 20:43:52', '2020-03-28 20:43:52'),
(8, 7, 'spongebob', 'Belum diisi', 'Belum diisi', '2020-04-02', NULL, '2020-03-28 21:16:33', '2020-03-28 21:16:33'),
(9, 8, 'spongebob', 'Belum diisi', 'Belum diisi', '2020-04-01', NULL, '2020-03-28 22:05:23', '2020-03-28 22:05:23'),
(10, 9, 'spongebob', 'Belum diisi', 'Belum diisi', '2020-04-02', NULL, '2020-03-28 22:08:31', '2020-03-28 22:08:31'),
(11, 10, 'spongebob', 'Belum diisi', 'Belum diisi', '2020-04-15', NULL, '2020-03-29 19:22:10', '2020-03-29 19:22:10'),
(12, 11, 'spongebob', 'Belum diisi', 'Belum diisi', '2020-04-01', NULL, '2020-03-29 19:40:46', '2020-03-29 19:40:46'),
(13, 12, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-03', NULL, '2020-04-02 06:40:15', '2020-04-02 06:40:15'),
(14, 13, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-03', NULL, '2020-04-02 06:54:56', '2020-04-02 06:54:56'),
(15, 14, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-09', NULL, '2020-04-02 10:14:50', '2020-04-02 10:14:50'),
(16, 15, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-04', '2020-04-02 11:26:27', '2020-04-02 11:09:37', '2020-04-02 11:26:27'),
(17, 15, 'Teddinata', 'Indonesia', 'Karyawan', '2020-04-24', NULL, '2020-04-02 11:25:54', '2020-04-02 11:25:54'),
(18, 15, 'Teddinata', 'Indonesia', 'Pengusaha', '2020-05-01', '2020-04-02 11:26:26', '2020-04-02 11:26:20', '2020-04-02 11:26:26'),
(19, 16, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-06', NULL, '2020-04-02 21:49:42', '2020-04-02 21:49:42'),
(20, 17, '', 'Belum diisi', 'Belum diisi', '2020-04-09', '2020-04-07 10:40:08', '2020-04-07 10:39:59', '2020-04-07 10:40:08'),
(21, 18, '', 'Belum diisi', 'Belum diisi', '2020-04-10', NULL, '2020-04-07 10:40:35', '2020-04-07 10:40:35'),
(22, 19, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-10', NULL, '2020-04-07 10:41:26', '2020-04-07 10:41:26'),
(23, 20, 'teddinata', 'Belum diisi', 'Belum diisi', '2020-04-17', NULL, '2020-04-08 09:34:31', '2020-04-08 09:34:31'),
(24, 25, 'teddinata', 'teddinata', 'Belum diisi', '2020-04-15', NULL, '2020-04-13 07:36:44', '2020-04-13 07:36:44'),
(25, 26, 'teddinataaa', 'Teddi', 'Belum diisi', '2020-04-25', NULL, '2020-04-19 21:04:21', '2020-04-19 21:04:21'),
(26, 27, 'teddinata', 'Teddi', 'Belum diisi', '2020-05-12', NULL, '2020-05-11 07:54:09', '2020-05-11 07:54:09'),
(27, 28, 'teddinata', 'Teddi', 'Belum diisi', '2020-07-31', NULL, '2020-07-27 02:57:44', '2020-07-27 02:57:44'),
(28, 29, 'teddinata', 'Teddi', 'Belum diisi', '2020-08-27', NULL, '2020-08-25 23:33:17', '2020-08-25 23:33:17'),
(29, 30, 'teddinata', 'Teddi', 'Belum diisi', '2020-09-17', '2020-09-03 02:03:49', '2020-09-03 02:01:43', '2020-09-03 02:03:49'),
(30, 30, 'Teddinata', 'ID', 'Swasta', '2020-09-04', NULL, '2020-09-03 02:07:46', '2020-09-03 02:07:46'),
(31, 31, 'teddinata', 'Teddi', 'Belum diisi', '2020-09-04', NULL, '2020-09-03 02:09:52', '2020-09-03 02:09:52'),
(32, 32, 'teddi', 'Teddinata Kusuma', 'Belum diisi', '2021-03-03', NULL, '2021-02-16 02:08:27', '2021-02-16 02:08:27'),
(33, 33, 'teddi', 'Teddinata Kusuma', 'Belum diisi', '2021-02-17', NULL, '2021-02-16 02:51:49', '2021-02-16 02:51:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_galleries`
--

CREATE TABLE `travel_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `travel_galleries`
--

INSERT INTO `travel_galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/travel-gallery/CjT1UXkPHczKOXMSNPsCyzTAkxfxwOpOVj8miA4A.jpeg', NULL, '2020-10-08 11:46:44', '2020-10-08 11:46:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nusakambangan', 'nusakambangan', 'Cilacap', 'Cilacap', 'Sedekah laut', 'Ngapak', 'Mendoan', '2020-04-24', '2D', 'Open Trip', 500000, NULL, '2020-04-16 20:51:39', '2020-04-16 20:51:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_transactions`
--

CREATE TABLE `travel_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `travel_transaction_total` int(11) NOT NULL,
  `travel_transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_transaction_details`
--

CREATE TABLE `travel_transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`, `phone`, `birth`, `gender`) VALUES
(1, NULL, 'Teddinata', 'timur@gmail.com', '2019-11-26 07:07:09', '$2y$10$Hj9Q7vv5emXzRRqxAcRJWeU2o/yKKgQFOgbAwF9lWqhkASMpvZ/c2', NULL, '2019-11-26 07:06:50', '2020-04-17 09:35:37', 'ADMIN', 'teddinata', '08912312311', '2000-12-31', 'Laki-laki'),
(2, NULL, 'Teddinata Kusuma', 'vanpehong@gmail.com', '2019-11-26 07:20:03', '$2y$10$AAR91Bf7NmdQ/bb38n.ZVO6fOyJNRUlM1OeSmpGcg7M34U1yCQ4o6', NULL, '2019-11-26 07:19:47', '2019-11-26 07:20:03', 'USER', '', NULL, NULL, NULL),
(3, 'teddi.jpg', 'Teddinata Kusuma', 'teddinata@gmail.com', '2019-11-30 11:30:59', '$2y$10$CIJCdeLAhuPl.NkZbjJMcuaU2pqn2oQP2.oL00nQfXZqA2oIIjc2G', NULL, '2019-11-30 11:30:14', '2020-03-29 19:46:09', 'ADMIN', 'teddi', '08912312399', NULL, 'Laki-laki'),
(4, 'teddi.jpg', 'Teddi', 'teddinata2@gmail.com', '2019-12-01 04:19:44', '$2y$10$FxM8Gtz6ud9Q9jonvJpkQOTPUQd5Tw1FJU6SKqwmkAQtq4G6ivKke', NULL, '2019-12-01 04:18:31', '2020-03-09 06:32:59', 'ADMIN', 'teddinata', NULL, NULL, NULL),
(5, NULL, 'robert paula', 'timur02@gmail.com', '2019-12-22 20:12:02', '$2y$10$Grbu4cl791hS0LtEsyd.xORc/sM6s/mFuzzeBsdA9JwBZIUdBcEmy', NULL, '2019-12-23 04:28:43', '2019-12-23 04:28:43', 'USER', '', NULL, NULL, NULL),
(6, NULL, 'ted', 'tedddd@gmail.com', NULL, '$2y$10$uODBu8IoHdTfzFAETzgVT.yFeUCukWJxl7NRUYEJU3qU94/gTliJK', NULL, '2020-01-09 06:34:36', '2020-01-09 06:34:36', 'USER', '', NULL, NULL, NULL),
(7, NULL, 'Teddinata Kusuma', 'teddinata3@gmail.com', NULL, '$2y$10$E.Yln.B9tlAyleYdOqxnzeyDXlnkUBEdfE./KFlQq29WCTkF3DeJK', NULL, '2020-03-10 04:49:54', '2020-03-10 04:49:54', 'USER', '', NULL, NULL, NULL),
(8, 'teddi.jpg', 'Teddi', 'timyur@gmail.com', '2020-03-18 20:54:41', '$2y$10$CLqFCqpJlzMxpNwiYppcJewDWtaa2UH7me7rks00bt.Z/Drutzld2', NULL, '2020-03-18 20:51:58', '2020-03-18 21:10:15', 'USER', '', NULL, NULL, NULL),
(9, 'teddi.jpg', 'Teddinata Kusuma', 'teddinata22@gmail.com', '2020-03-18 21:30:42', '$2y$10$N9nj/exe5J0ew7jNhPcM5e0FSJ.38HupTQDlJnfnS2w0.xjj3lu/u', NULL, '2020-03-18 21:27:03', '2020-03-18 21:40:25', 'USER', '', NULL, NULL, NULL),
(10, 'teddi.jpg', 'Teddi', 'teddinata20@gmail.com', '2020-04-19 21:01:16', '$2y$10$8wMkEGN7CE1JGemo.QXWDuAYKTFhSuCi98ihwU3uGooB5svX9.iQm', NULL, '2020-04-19 20:59:45', '2020-04-19 21:02:04', 'ADMIN', 'teddinataaa', '089868602011', '1998-05-01', 'Laki-laki'),
(11, NULL, 'Teddinata Kusuma', 'teddinataa@gmail.com', NULL, '$2y$10$at0m9U1/uySwakuQ7yoUPeQCEZbtPoyLz3OYktj5hEgxA3Gl4/Nty', NULL, '2020-07-27 02:54:15', '2020-07-27 02:54:15', 'USER', 'jon snoww', '08515509502222', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkin` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagihan` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RT` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `identity_card`, `phone`, `room_number`, `checkin`, `duration`, `tagihan`, `deleted_at`, `created_at`, `updated_at`, `alamat`, `RT`, `RW`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `negara`, `checkout`) VALUES
(1, 'Jonathan', '3301223001910003', '08986860201', '12', '2020-04-30', '30 Hari', 500000, NULL, '2020-04-04 06:28:03', '2020-04-04 06:28:03', '', 0, 0, '', '', '', '', '', '0000-00-00'),
(2, 'Eko', '3301123412341234', '0891231231231', '11', '2020-04-06', '30 Hari', 500000, NULL, '2020-04-05 06:20:11', '2020-04-05 06:20:11', '', 0, 0, '', '', '', '', '', '0000-00-00'),
(3, 'Thor', '3331231231231231', '08912312399', '2', '2020-04-09', '30 Hari', 500000, NULL, '2020-04-08 09:28:57', '2020-04-08 09:28:57', 'Jaalan jalan', 1, 2, 'Tambakharjo', 'Cilacap Tengah', 'Cilacap', 'Jawa Tengah', 'Indonesia', '2020-04-09'),
(4, 'Teddinata Kusuma', '3333123412341234', '08912312312', 'Griya Kos 1 - 5', '2020-04-25', '30 Hari', 500000, NULL, '2020-04-19 21:14:42', '2020-04-19 21:14:42', 'Jl. Beringin VIII', 8, 4, 'Karangroto', 'Genuk', 'Semarang', 'Jawa Tengah', 'Indonesia', '2020-05-25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `room_packages`
--
ALTER TABLE `room_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_room_types_id_foreign` (`room_types_id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel_galleries`
--
ALTER TABLE `travel_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel_transactions`
--
ALTER TABLE `travel_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel_transaction_details`
--
ALTER TABLE `travel_transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `room_packages`
--
ALTER TABLE `room_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `travel_galleries`
--
ALTER TABLE `travel_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `travel_transactions`
--
ALTER TABLE `travel_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `travel_transaction_details`
--
ALTER TABLE `travel_transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_room_types_id_foreign` FOREIGN KEY (`room_types_id`) REFERENCES `room_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
