-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 09:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata_sumatera`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id`, `nama`, `email`, `no_whatsapp`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 'dewa111', 'dewasembiring1@gmail.com', '13213', '2021-05-26 10:16:04', '2021-05-26 10:38:28', 1),
(2, 'Ayuly Sari Sinambela', 'ayuly_sinambela@gmail.com', '+62 823-6321-7012', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(3, 'Dewa Sembiring', 'dewasembiring1@gmail.com', '+62 857-6282-7062', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(4, 'Juwita D. Sitorus', 'juwita_sitorus@gmail.com', '+62 813-8406-8422', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(5, 'Weny Ari S. Purba', 'weny_purba@gmail.com', '+62 882-6240-8243', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(7, 'dewa', 'dewasembiring1@gmail.com', '13213', '2021-05-26 10:38:17', '2021-05-26 10:38:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_hotel` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama_hotel`, `alamat_hotel`, `deskripsi`, `contact`, `harga_hotel`, `gambar`, `created_at`, `updated_at`, `id_user`) VALUES
(2, 'The Excelton Hotel', 'Jl Demang Lebar Daun No.58, 30137 Palembang, Indonesia', 'Menawarkan sebuah bar, The Excelton Hotel terletak di Palembang, Sumatra, 8 km dari Jembatan Ampera dan 3,5 km dari Palembang Square. Berbagai fasilitas akomodasi di antaranya adalah restoran, resepsionis 24 jam, layanan kamar, dan WiFi gratis di seluruh areanya.', '+62 711 416609', 7610000, 'pict/hotel/2.jpg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(3, 'Novotel Pekanbaru', 'Jalan Riau No 59, Senapelan, Pekanbaru, Riau, Indonesia, 28154', 'Terletak di Pekanbaru, berjarak 200 meter dari Ciputra Mall Seraya, Novotel Pekanbaru menawarkan akomodasi yang nyaman. Tempat nyaman dan tenang, cocok untuk beristirahat setelah melakukan kegiatan danpekerjaan seharian', '(0761) 25599', 1199980, 'pict/hotel/3.jpeg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(4, 'Pangeran Beach Hotel', 'Jl. Ir. H. Juanda No 79, 54613 Padang, Indonesia', '\n            Selain memiliki lokasi strategis di Padang, Pangeran Beach Hotel hanya 15 menit berkendara dari Pantai Pasir Jambak. Hotel ini memiliki sebuah kolam renang outdoor, restoran, dan kamar-kamar dengan TV layar datar. Wi-Fi dan parkir tersedia gratis.', '(0751) 7051333', 1500000, 'pict/hotel/4.jpeg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(5, 'Hotel Swiss-Belhotel', 'Jl. Rasuna Said No 18, 35214 Bandar Lampung, Indonesia', 'Salah satu pilihan utama kami di Bandar Lampung. Dapat dicapai dalam 10 menit berkendara dari pusat kota, Central Plaza, dan mal Kartini, Swiss-Belhotel Lampung menawarkan kamar-kamar berkualitas dan Wi-Fi gratis di seluruh areanya.', '(0721) 8017777', 5729000, 'pict/hotel/5.jpeg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(6, 'JW Marriott Hotel', 'Jalan Putri Hijau No. 10, 20111 Medan, Indonesia', '\n            Dapatkan pelayanan kelas dunia ala selebriti di JW Marriott Hotel Medan\n             Salah satu pilihan utama kami di Medan.\n            JW Marriott Hotel Medan terletak di pusat kota dan menawarkan akomodasi dengan TV LED 55 inci. Hotel ini memiliki kolam renang luar ruangan tak bertepi, pusat kebugaran 24 jam, spa, dan 6 pilihan tempat bersantap. Terdapat layanan antar-jemput dari Centre Point Mall.', '(061) 4553333', 1305685, 'pict/hotel/6.jpeg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(8, 'dewa', '3e1341', 'afafadsf', '13r13', 3123123, 'uploaded/hotel/14358d52d39379c4b13892ee4afef870.ComponentDiagram1.png', '2021-05-26 10:43:22', '2021-05-26 10:43:37', 1);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_15_183439_create_permission_tables', 1),
(5, '2021_04_28_071549_create_hotel_table', 1),
(6, '2021_05_02_071732_create_provinsi_table', 1),
(7, '2021_05_02_071806_create_wisata_table', 1),
(8, '2021_05_05_021734_create_cs_table', 1),
(9, '2021_05_10_051601_create_transaksi_pemesanan_hotel_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'wisata-view', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(2, 'wisata-create', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(3, 'wisata-edit', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(4, 'wisata-delete', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(5, 'hotel-view', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(6, 'hotel-create', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(7, 'hotel-edit', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(8, 'hotel-delete', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(9, 'hotel-chart', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(10, 'cs-view', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(11, 'cs-create', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(12, 'cs-edit', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(13, 'cs-delete', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(14, 'cs-xls', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(15, 'role-list', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(16, 'role-create', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(17, 'role-edit', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(18, 'role-delete', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(19, 'user-list', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(20, 'user-create', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(21, 'user-edit', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(22, 'user-delete', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Nanggroe Aceh Darussalam', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(2, 'Sumatera Utara', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(3, 'Sumatera Barat', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(4, 'Riau', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(5, 'Kepulauan Riau', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(6, 'Jambi', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(7, 'Bengkulu', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(8, 'Sumatera Selatan', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(9, 'Kepulauan Bangka Belitung', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(10, 'Lampung', '2021-05-26 10:16:04', '2021-05-26 10:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(2, 'customer', 'web', '2021-05-26 10:16:04', '2021-05-26 10:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pemesanan_hotel`
--

CREATE TABLE `transaksi_pemesanan_hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_inap` bigint(20) NOT NULL,
  `tanggal_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hotel` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$rdERe8yHDe6wfojEEY/xF.NIndDPXY3nSq.oBW6Bgpd6PfSBGgwki', NULL, '2021-05-26 10:16:04', '2021-05-26 10:16:04'),
(2, 'customer', 'customer@gmail.com', NULL, '$2y$10$N9c0c0dnDGiEMl1zgTBBqOtdhU.TC61LoYNzSSpoyr81KtUBjFFCq', NULL, '2021-05-26 10:16:04', '2021-05-26 10:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `deskripsi`, `provinsi_id`, `gambar`, `created_at`, `updated_at`, `id_user`) VALUES
(2, 'Kawa Putih', 'Kawah Putih Tinggi Raja terletak di cagar alam seluas 176 hektare dan memliki lahan kawah dengan luas 4 hektare ini bagai mutiara. Tidak dapat dipercaya di tengah-tengah lebatnya hutan dan Anda harus melewati jalan yang tidak begitu mulus untuk menuju kawah, Anda akan menemukan keindahan yang mengagumkan, pengunjung pun akan dibuat terpesona dan terkesima dengan keindahan bukit putih kapur dan aliran air panas yang mempesona dan sangat eksotis.\n            Sumber air panas disini suhunya mencapai sekitar 90 derajat celcius, Kawah Putih Tinggi Raja ini berasal dari bukit – bukit kecil yang ada di daerah tersebut. Air panas di sini bisa untuk merebus telur hingga matang. Aliran air panas mengalir diantara batu – batu kapur yang berundak – undak, peristiwa ini menjadikan batuan tersebut menjadi putih bersih seperti salju. Kebanyakan orang menyebutnya dengan Sumber Salju Panas.\n            Sumber kawah putih tinggi raja ada 2 tempat yang bisa Anda kunjungi di area obyek wisata ini. Yang pertama adalah bukit kapur yang di lalui oleh aliran air panas, sehingga membuat bebatuan ini menjadi indah dipandang oleh mata, ada juga keindahan karpet alam yang terbentuk dari aliran sungai yang berlumut dan dilewati oleh air panas menjadikan bebatuan tersebut seperti sebuah karpet yang berwarna hijau keputihan.\n            Diatas juga terdapat sebuah kolam alam yang tidak begitu luas namun cukup besar yang mengeluarkan sumber air panas yang terlihat bergelembung pada dasar kolam, yang tentunya Anda dilarang untuk mandi di area itu karena sangat berbahaya. Aliran air panas ini mengalir melalui semak-semak pepohonan yang mengering kerana kepanasan dan berkumpul menjadi satu aliran membentuk sebuah danau yang airnya berwarna biru kehijauan dan membuatnya amat cantik.', 2, 'pict/wisata/kawaputih.jpg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(3, 'Pulau Jemur', 'Pulau Jemur terletak lebih kurang 45 mil dari  Ibukota Kabupaten Rokan Hilir Bagan Siapiapi, dan 45 mil dari Negara  Tetangga yakni, Malaysia, dan Provinsi Sumatera Utara merupakan Provinsi  yang terdekat dari Pulau Jemur. Pulau Jemur sebenarnya merupakan  gugusan pulau-pulau yang terdiri dari beberapa buah pulau antara lain,  Pulau Tekong Emas, Pulau Tekong Simbang, Pulau Labuhan Bilik serta  pulau-pulau kecil Lainnya.\n            Pulau Jemur memiliki Pemandangan dan Panorama alam yang indah, selain  itu Pulau Jemur ini amat kaya dengan hasil lautnya, di samping itu  Pulau Jemur dihuni oleh Spesies Penyu, dimana pada musim tertentu  penyu-penyu itu naik ke pantai untuk bertelur satwa langka ini dapat  bertelur sebanyak 100 sampai 150 butir setiap ekornya.\n            Selain itu Pulau Jemur juga terdapat beberapa potensi wisata lain  diantaranya adalah Goa Jepang, Menara Suar, bekas tapak kaki manusia,  perigi tulang, sisa-sisa pertahanan Jepang, batu Panglima Layar, Taman  Laut, dan pantai berpasir kuning emas.', 4, 'pict/wisata/pulaujemur.jpg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(4, 'Lembah Harau', 'Lembah Harau adalah sebuah ngarai dekat Kota Payakumbuh di Kabupaten Limapuluh Koto, provinsi Sumatra Barat. Lembah Harau diapit dua bukit cadas terjal dengan ketinggian mencapai 150 meter berupa batu pasir yang terjal berwarna-warni, dengan ketinggian 100 sampai 500 meter. Topografi Cagar Alam Harau adalah berbukit-bukit dan bergelombang. Tinggi dari permukaan laut adalah 500 sampai 850 meter, bukit tersebut antara lain adalah Bukit Air Putih, Bukit Jambu, Bukit Singkarak, dan Bukit Tarantang. Berjalan menuju Lembah Harau amat menyenangkan. Dengan udara yang masih segar, anda bisa melihat keindahan alam sekitarnya. Tebing-tebing granit yang menjulang tinggi dengan bentuknya yang unik mengelilingi lembah. Tebing-tebing granit yang terjal ini mempunyai ketinggian 80 meter hingga 300 meter.\n            Di cagar alam dan suaka margasatwa Lembah Harau terdapat berbagai spesies tanaman hutan hujan tropis dataran tinggi yang dilindungi, plus sejumlah binatang langka asli Sumatra. Monyet ekor panjang (Macaca fascirulatis) merupakan hewan yang acap terlihat di kawasan ini. Kawasan Objek wisata Lembah Harau ini terdiri dari 3 (tiga) kawasan: Resort Aka Barayu, Resort Sarasah Bunta, dan Resort Rimbo Piobang . Pada resort Aka Barayun yang memiliki keindahan air terjun yang mempunyai kolam renang, yang memberikan nuansa alam yang asli juga berpotensi untuk pengembangan olahraga panjat tebing karena memiliki bukit batu yang terjal dan juga mempunyai lokasi yang bisa memantulkan suara (echo).', 3, 'pict/wisata/lembaharau.jpg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(5, 'Gunung Kerinci', 'Gunung Kerinci (juga dieja \"Kerintji\", dan dikenal sebagai Gunung Gedang, Berapi Kurinci, Kerinchi, Korinci, atau Puncak Indrapura) adalah gunung tertinggi di Sumatra, gunung berapi tertinggi di Indonesia, dan puncak tertinggi di Indonesia di luar Papua. Gunung Kerinci terletak tepat di perbatasan antara Provinsi Sumatera Barat dengan Provinsi Jambi, di Pegunungan Bukit Barisan, dekat pantai barat, dan terletak sekitar 130 km sebelah selatan Padang Provinsi Sumatra Barat. Gunung ini juga menjadi batas antara wilayah Etnis Minangkabau dengan Suku Kerinci yang dikelilingi hutan lebat Taman Nasional Kerinci Seblat dan merupakan habitat harimau sumatra dan badak sumatra.\n            Puncak Gunung Kerinci berada pada ketinggian 3.805 mdpl, di Kabupaten Kerinci, Provinsi Jambi, di sini pengunjung dapat melihat di kejauhan membentang pemandangan indah Kota Jambi, Padang, dan Bengkulu. Bahkan Samudera Hindia yang luas dapat terlihat dengan jelas. Gunung Kerinci memiliki kawah seluas 400 x 120 meter dan berisi air yang berwarna hijau. Di sebelah timur terdapat danau Bento, rawa berair jernih tertinggi di Sumatra. Di belakangnya terdapat gunung tujuh dengan kawah yang hampir tak tersentuh.\n            Gunung Kerinci merupakan gunung berapi bertipe stratovulcano yang masih aktif dan terakhir kali meletus pada tahun 2009.', 3, 'pict/wisata/gunungkerinci.jpg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(6, 'Pantai Iboih', 'Pantai Iboih, juga dikenal sebagai Teupin Layeu, terletak di seberang tepi barat Pulau Weh yang legendaris, atau pulau Weh, di bagian utara Aceh, provinsi paling utara Sumatera. Bila dibandingkan dengan tapal kuda berbentuk U, Iboih terletak di kiri lengkungan. Lokasi geografis menghadap Samudera Hindia yang terbuka bagi siapa saja untuk datang atau pergi kapan saja, tapi kenangan dan pengalaman yang diterima di sini tidak akan terlupakan begitu saja.\n            Kota Iboih, terletak di Pulau Weh adalah titik paling barat dari Indonesia. Pantai Iboih (Iboih Beach) akan membawa harapan Anda atas keindahan alam ke tingkat yang baru. Pulau kecil, surga yang tersembunyi sebagian besar tetap tak tersentuh oleh banyak kunjungan wisatawan, memberikan suasana yang lebih santai dan santai. Hutannya dengan baik dilindungi oleh garis pantai Iboih yang menawan, pasir keemasan yang penuh dengan batu-batu raksasa. Air dangkal laut yang begitu jelas dapat melihat dasar laut, memiliki rona kebiruan-hijau yang memancarkan perasaan damai dan relaksasi. Pantai yang tampaknya melengkung, menyerupai bibir, tersenyum dan menyambut orang-orang untuk datang dan mengambil bagian dalam kehangatan dan melihat flora dan fauna yang eksotis dari hutan hujan tropis yang merupakan bagian dari kekayaan alam Indonesia.', 1, 'pict/wisata/pantaiiboih.jpg', '2021-05-26 10:16:04', '2021-05-26 10:16:04', 1),
(7, 'saasf', 'sdfsdf', 2, 'uploaded/wisata/21412b5f8b8a4619e2c906664beb5a4c.logout.png', '2021-05-26 10:35:35', '2021-05-26 10:35:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cs_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transaksi_pemesanan_hotel`
--
ALTER TABLE `transaksi_pemesanan_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_pemesanan_hotel_id_hotel_foreign` (`id_hotel`),
  ADD KEY `transaksi_pemesanan_hotel_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisata_id_user_foreign` (`id_user`),
  ADD KEY `wisata_provinsi_id_foreign` (`provinsi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_pemesanan_hotel`
--
ALTER TABLE `transaksi_pemesanan_hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cs`
--
ALTER TABLE `cs`
  ADD CONSTRAINT `cs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users` FOREIGN KEY (`role_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_pemesanan_hotel`
--
ALTER TABLE `transaksi_pemesanan_hotel`
  ADD CONSTRAINT `transaksi_pemesanan_hotel_id_hotel_foreign` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `transaksi_pemesanan_hotel_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wisata_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
