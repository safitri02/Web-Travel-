-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2021 at 03:50 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama_hotel`, `harga`, `deskripsi`, `alamat`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'fhesibdu', 200000, 'wehweu', 'wiewhf', 'gambar/KlpfRJmrSyc2GN9NPak21QuJq2AAUBoH1MntMAus.jpg', '2021-01-14 07:50:15', '2021-01-14 07:50:15'),
(5, 'Restoran Cempaka', 1000000, 'kajs wqqie ddwhsabd', 'Lombok', 'gambar/tsHMqxF31av8mOJ3Ue9qKuxWe8UL1yxfb01MPl8d.jpg', '2021-01-14 08:24:48', '2021-01-14 08:24:48'),
(6, 'aksjdxyuh', 2000000, 'ahsguqygx', 'Amerika', 'gambar/farOsLKltEBgpRPyOL5tuWHiwPYo3f3MKSHkr43E.jpg', '2021-01-14 08:52:19', '2021-01-14 08:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_wisata`, `nama`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 5, 'Safitri', 'Bagus, masih alami Bangettttt...', '2021-01-16 07:58:37', '2021-01-16 07:58:37'),
(2, 4, 'Fitri', 'Awass, kesetrum ubur ubur', '2021-01-16 08:02:40', '2021-01-16 08:02:40'),
(3, 5, 'John Doe', 'Kerennn', '2021-01-16 08:09:40', '2021-01-16 08:09:40'),
(4, 5, 'Iqbal Aqaba', 'Gilakkk, Bagus banget', '2021-01-16 08:12:56', '2021-01-16 08:12:56'),
(5, 3, 'Fitri Anggraeni Putri', 'Mntp', '2021-01-16 08:17:04', '2021-01-16 08:17:04'),
(6, 3, 'Ridwan', 'Kerennnnnnnnnnn', '2021-01-16 08:18:05', '2021-01-16 08:18:05'),
(7, 1, 'Safitri', 'Bagus', '2021-01-16 08:20:40', '2021-01-16 08:20:40'),
(8, 1, 'Tes tes', 'Cuma ngetes fitur komen', '2021-01-16 08:20:55', '2021-01-16 08:20:55'),
(9, 10, 'Iqbal Aqaba', 'Kerennn', '2021-01-16 09:45:14', '2021-01-16 09:45:14'),
(10, 10, 'Safitri Anggraeni', 'Mantappppp, Keren banget anjir', '2021-01-16 09:45:41', '2021-01-16 09:45:41'),
(11, 2, 'Fana Hasana', 'Kerennnnn', '2021-01-16 09:46:28', '2021-01-16 09:46:28'),
(12, 11, 'Andre Haxor', 'Bagus', '2021-01-16 22:25:18', '2021-01-16 22:25:18'),
(13, 1, 'asdasd', 'asdasdadasdasadsdadsassd', '2021-01-16 22:25:43', '2021-01-16 22:25:43'),
(14, 1, 'Fitri', 'Kerennnnn', '2021-01-16 22:26:15', '2021-01-16 22:26:15'),
(15, 10, 'Adnan', 'Bagus, warna warni...', '2021-01-16 22:27:04', '2021-01-16 22:27:04'),
(16, 5, 'Fitri', 'Gada obattttt', '2021-01-17 00:16:22', '2021-01-17 00:16:22'),
(17, 15, 'Amar', 'MANTAP AWKWKKWK', '2021-01-17 05:48:06', '2021-01-17 05:48:06'),
(18, 11, 'ugyguf', 'vhhghf', '2021-01-17 06:28:22', '2021-01-17 06:28:22'),
(19, 27, 'Safitri', 'Parah abisssssss, Super kece!', '2021-01-17 08:06:53', '2021-01-17 08:06:53'),
(20, 17, 'Fifi', 'Anjay mirip mantan', '2021-01-17 08:32:16', '2021-01-17 08:32:16');

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
(6, '2021_01_14_105101_create_restoran_table', 2),
(7, '2021_01_14_105817_create_tiket_table', 2),
(8, '2021_01_14_105040_create_hotel_table', 3),
(9, '2021_01_14_161238_create_sewa_hotel_table', 4),
(12, '2021_01_14_104958_create_wisata_table', 5),
(13, '2021_01_15_115315_create_pulau_table', 5),
(14, '2021_01_15_130148_create_kategori_table', 6),
(15, '2021_01_15_115548_create_komentar_table', 7);

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
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`id`, `nama`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Bali & Nusa Tenggara', 'gambar/w4PtqDD1ZnmEPZ67GcCqP8juk5FI1oAojssoyX6O.jpg', 'Salah satu daerah paling populer di Indonesia yang tidak diragukan lagi keindahan alam dan keberagaman budaya nya yang wajib kalian kunjungi!', '2021-01-15 05:23:43', '2021-01-15 05:23:43'),
(2, 'Sumatera', 'gambar/CEN9ijrfLxIfra3MrmeAgNKGpH5LniiwR2nNjUam.jpg', 'Merupakan pulau terbesar ke 2 di indonesia yang memiliki banyak potensi dari keindahan alam dan keberagaman budanya.', '2021-01-15 05:25:04', '2021-01-15 05:25:04'),
(3, 'kalimantan', 'gambar/93C4z8jTAHz1ewU46kL3v9jCllWNzlo0PJ1U7z9G.jpg', 'Merupakan daerah ibu kota masa depan Indonesia yang menjanjikan karena keindahan alamnya yang indah dan menawan', '2021-01-15 05:28:34', '2021-01-15 05:28:34'),
(4, 'Yogyakarta', 'gambar/mStXpIC7V0XZPUcnV4XOVREoZdSzXce107mc7gKx.jpg', 'Selain Kotanya yang selalu ngangenin. Budaya dan kulinernya senantiasa bikin rindu. Keramahan para masyarakatnya menjadikan daerah ini semakin istimewa. Tak hanya itu, Jogja juga menyuguhkan berbagai pesona yang bisa dinikmati semua umur dan kalangan.', '2021-01-15 05:31:39', '2021-01-15 05:31:39'),
(5, 'Papua', 'gambar/043REc32RVr8Ink5GRjf8tUmXi1bm50khOQyqSiS.jpg', 'Bukan hanya alamnya yang indah, Papua juga menyimpan kearifan budaya lokal yang masih ada di zaman serba modern ini. Menjelajahi tempat wisata di Papua tentunya akan menjadi sebuah pengalaman menarik yang bisa kamu coba.', '2021-01-15 05:58:05', '2021-01-15 05:58:05'),
(6, 'Pulau Jawa', 'gambar/0ekN3xirdRjnMTK7r4zIefdgNSxOKj0kUOqXaMEu.jpg', 'Tempat Wisata di Pulau Jawa tersedia sangat beragam jenisnya. Anda bisa menemukan pantai, pegunungan, air terjun, museum bahkan tempat yang menyimpan banyak wahana.', '2021-01-15 10:28:21', '2021-01-15 10:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_restoran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `nama_restoran`, `deskripsi`, `alamat`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Restoran Bandeng Bakar Jakpus', 'Restoran ini melayani begajshwunisud bla bla bla', 'Jl. Jendral Sudirman no JK829 gang Pondok aren, Jakarta Pusat', 'gambar/PwJGKoOB8qDf5vwsl5UtmiFHTRbctMtYoAXbmGsU.jpg', '2021-01-14 07:02:39', '2021-01-14 07:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `sewa_hotel`
--

CREATE TABLE `sewa_hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'safitri02', 'safitri02@gmail.com', NULL, '$2y$10$lPTD87PKus.iXKx74ss1kuIOVd2Xvt9jMUC.3hvnu.2dQ5t7HPCWC', NULL, '2021-01-13 20:12:29', '2021-01-13 20:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `nama_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `id_daerah`, `nama_wisata`, `deskripsi`, `lokasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 4, 'Candi Borobudur', 'Candi Borobudur sudah sangat terkenal di dunia. Candi ini masuk kedalam daftar Warisan Dunia UNESCO. Candi ini merupakan Candi Budha terbesar dan terlengkap di dunia.', 'Yogjakarta, Indonesia', 'gambar/K0HHunL3MgZq2AfrxY00jG5lqciMswchA7crd3aK.jpg', '2021-01-15 05:44:03', '2021-01-15 05:44:03'),
(2, 4, 'Taman sari Jogja', 'Jaman dulu Taman Sari Jogja merupakan tempat rekreasi dan meditasi keluarga kerajaan Yogyakarta. Pesona Istana Taman Sari terletak pada keindahan arsitekturnya yang kuno dan pemandangan yang indah.  Istana ini dibangun untuk menghargai jasa para istri Sultan yang telah membantu semasa perang. Istana ini dikelilingi dengan taman bunga yang memberikan wangi semerbak ke sekitarnya.', 'Yogjakarta', 'gambar/DgYrsTG18QNOAIBBLvKL45qf5oZHcA5k8o6OwzZF.jpg', '2021-01-15 05:47:09', '2021-01-15 05:47:09'),
(3, 4, 'Pantai Parangtritis', 'Pantai Parangtritis merupakan pantai paling terkenal di Yogyakarta, itulah sebabnya mengapa pantai ini selalu ramai pengunjung. Pantai ini memiliki ombak yang cukup besar dan kuat. Di tempat ini Anda juga dapat mencoba bermain paralayang di Bukit Parangdong. Pantai Parangtritis terletak 25 Km dari pusat kota Yogyakarta.', 'Yogjakarta, Indonesia', 'gambar/Ph7VJhs0Kma7v5fV9fDDNRX5KgoEZ5wbcmzumDxv.jpg', '2021-01-15 05:49:13', '2021-01-15 05:49:13'),
(4, 3, 'Pulau Kakaban', 'Pulau Kakaban memiliki luas 774,2 hektare. Hal yang paling terkenal dari pulau ini adalah adanya danau indah di tengah pulau, Danau Kakaban namanya.  Danau Kakaban menjadi tempat tinggal ubur-ubur cantik dan tidak beracun, sehingga kamu bisa menyelam sembari menikmati keindahan pulau ini. Ubur-ubur tersebut terdiri dari dua jenis, yakni emas dan bulan. Keren banget!', 'Kalimantan, Indonesia', 'gambar/5CcnLTrhmb4UTjKIbv7giodxpmF37Wdsvci7TA3R.jpg', '2021-01-15 05:51:41', '2021-01-15 05:51:41'),
(5, 3, 'Danau Labuan Cermin', 'Destinasi wisata satu ini dikelola oleh masyarakat sekitar dengan bantuan dari Lembaga Masyarakat Daerah. Destinasi wisata air ini berada di Kabupaten Berau, Kalimantan Timur.  Butuh usaha lebih untuk mencapainya, karena kamu harus menyewa kapal dari dermaga. Tapi tenang, sesampainya di Danau Labuan Cermin, semua rasa lelahmu langsung terbayar lunas.', 'Kalimantan Timur', 'gambar/IBAhe8g0sG5GvVfuyYoRCqAicXA6VvTiWPh5N32W.jpg', '2021-01-15 05:54:21', '2021-01-15 05:54:21'),
(6, 5, 'Raja Ampat', 'Bukan hanya alamnya yang indah, Papua juga menyimpan kearifan budaya lokal yang masih ada di zaman serba modern ini. Menjelajahi tempat wisata di Papua tentunya akan menjadi sebuah pengalaman menarik yang bisa kamu coba.', 'Papua, Indonesia', 'gambar/H3yzh72kYQw2JcaZ0uqW8A9gudmOGo94o7eGcqsM.jpg', '2021-01-15 06:00:10', '2021-01-15 06:00:10'),
(7, 2, 'Pantai Krui', 'Pantai Krui adalah surganya para peselancar profesional. Pantai yang langsung menghadap ke samudra ini memiliki ombak nomor tujuh tertinggi di dunia. Sering diadakan kompetisi surfer internasional juga di sini.  Ada wisata ke Pulau Pisang dan beberapa air terjun yang memukau. Tetapi harus hati-hati buat yang gak bisa berenang, karena ombaknya sangat besar. Akibatnya, sering ada korban hanyut karena tidak menyadari cuaca buruk.', 'Pesisir lampung', 'gambar/jGgJDo8eA0BGoiY1y1Kjrdd3bZ365H6hXS1t8N7W.jpg', '2021-01-15 10:21:23', '2021-01-15 10:21:23'),
(8, 6, 'Kota Lama SEmarang', 'Kota Semarang merupakan salah satu kota terbesar di Jawa Tengah yang juga menjadi salah satu pusat tujuan wisata baik wisatawan lokal maupun internasional. Salah satu objek yang terkenal adalah Kota Lama Semarang .', 'Semarang, Jawa tengah', 'gambar/fe5ebKLIcx9r5YZkDfw2noVUdh19GBndoQyok5z6.jpg', '2021-01-15 22:26:08', '2021-01-15 22:26:08'),
(9, 6, 'Food Junction Grand Pakuwon', 'Destinasi wisata berikutnya adalah Food Junction Grand Pakuwon yang terletak di Jalan Grand Banjar Boulevard daerah Tandes, Banjar Sugihan. Dibuka di awal tahun 2016 silam, tempat ini selalu ramai dikunjungi karena terdapat banyak macam kuliner yang tersedia', 'Surabaya,  Jawa Timur', 'gambar/g07qNgdjjNWoBumbvhplPJQMyqHqhqPcEfJSfVpy.jpg', '2021-01-15 22:29:04', '2021-01-15 22:29:04'),
(10, 6, 'Kampung Pelangi Jodipan', 'Kampung Warna-warni Jodipan, seluruh aspek di area ini disulap menjadi berwarna. Mulai dari rumah sampai jalanannya, dilengkapi pula dengan pernak-pernik warna-warni.', 'Malang, Jawa timur', 'gambar/jO78lhxjFcwypUQT8PLNcbkGW6HiDgQxsWKhAVHi.jpg', '2021-01-15 22:35:40', '2021-01-15 22:35:40'),
(11, 6, 'Pantai Karang Jahe', 'Tempat wisata satu ini jadi pilihan banyak masyarakat sekitar Rembang karena memiliki pemandangan yang luar biasa cantik. Wisata ini cocok untuk segala usia, mulai dari remaja hingga dewasa. Tersedia beragam wahana dan permainan, seperti penyewaan kereta pantai dan motor atv. Yang membuat lokasi ini menarik, justru dari segi namanya yang diambil dari batuan karang di tepi pantai yang sangat besar dengan warna menyerupai jahe.', 'Rembang, Jawa tengah', 'gambar/epQWAFLsD5O0uB7e1TeR7TlzqXD18kegAwDizWvF.jpg', '2021-01-15 22:39:17', '2021-01-15 22:39:17'),
(12, 1, 'Pantai Selong Belanak', 'Destinasi wisata pantai di Nusa Tenggara Barat ini memiliki ciri khas, yakni tekstur pantai yang berbentuk layaknya setengah lingkaran. Pantai ini juga terkenal buat kamu yang mau belajar surfing karena ombaknya yang rendah, yakni sekitar 1 meter. Buat kamu yang tak memiliki papan surfing, di sana tersedia penyewaannya kok!', 'Nusa Tenggara Barat, Indonesai', 'gambar/yfsB5kE0NsT67khC5VPKNTQHhUeflPk1C3sNdr7H.jpg', '2021-01-17 05:39:12', '2021-01-17 05:39:12'),
(13, 1, 'Pantai Seger', 'Berada di kawasan wisata Mandalika di Lombok Tengah, NTB, Pantai Seger ini masih berada di satu garis dengan Pantai Kuta Lombok dan Pantai Selong Belanak, lho. Destinasi wisata pantai di NTB ini memiliki gugusan bukit yang beragam bentuk sehingga kamu tidak hanya menikmati pantainya saja yang indah, tetapi juga hamparan bukitnya yang menakjubkan.', 'Nusa Tenggara Barat, Indonesia', 'gambar/CSHQtPMYTcRWJeTy47M8xtb83Nr8R48h9pk8TjDd.jpg', '2021-01-17 05:41:31', '2021-01-17 05:41:31'),
(14, 1, 'Bali Safari Marine Park', 'Jika anda liburan keluarga ke pulau Bali dengan anak, maka tempat wisata Bali Safari & Marine Park wajib anda kunjungi. Bali Safari & Marine Park adalah sebuah kebun binatang yang memiliki luas area sangat luas, sekitar 400,000 meter persegi.', 'Bali, Indonesai', 'gambar/SsIg5KJ9besN33n8HYfgQJqYZA2XKPC5Xdg6WsS2.jpg', '2021-01-17 05:43:28', '2021-01-17 05:43:28'),
(15, 1, 'Ubud Monkey Forest', 'KAMU TIDAK PUNYA SAUDARA? ADIK? KAKAK? TENANG SEMUA!!! UBUD MONKEY FOREST ADALAH SOLUSINYA!!!! DISANA KAMU AKAN MENEMUKAN KEMBARANMU DAN GRATIS DAIWA PULANG. YOK KESISNI HEHE', 'Bali, Indonesai', 'gambar/7aEev46sJyjtLXdymmiDN0oPJINZmRxCOKR2oZR0.jpg', '2021-01-17 05:47:26', '2021-01-17 05:47:26'),
(16, 1, 'Seminyak', 'Kawasan pariwisata Seminyak terkenal sebagai kawasan pariwisata mewah dan pusat shopping barang mewah di pulau Bali. Di area Seminyak, anda akan dengan mudah menemukan restoran mewah, resort mewah, butik dan Spa. Kelengkapan fasiltas tersebut membuat area tempat wisata Seminyak menjadi salah satu destinasi wisata populer di pulau Bali.', 'Bali, Indonesai', 'gambar/WCHszThImWzLZMV0pTnOUMzmvUg6iXrzeaHj8LSh.jpg', '2021-01-17 05:51:31', '2021-01-17 05:51:31'),
(17, 6, 'Pulau Biawak, Indramayu', 'Seperti namanya, Pulau Biawak merupakan habitat alami satwa liar biawak. Dulunya pulau ini tertutup untuk umum karena dijadikan lokasi penelitian milik pemerintah.', 'Indramayu, Jawa Barat', 'gambar/FJro5kr9XYXaAzg4rEYFiN2wQD30Rnex7DdGkY84.jpg', '2021-01-17 05:54:03', '2021-01-17 05:54:03'),
(18, 2, 'Taman Nasional Siberut', 'Taman Nasional Siberut merupakan Cagar Biosfer Dunia yang memiliki habitat 896 spesies tumbuhan berkayu, 31 spesies mamalia, dan juga 134 spesies burung.  Diantara berbagai spesies yang tersebar tersebut, terdapat juga spesies primata endemik yang sudah terancam kepunahannya.', 'Pulau Siberut, Kepulauan Mentawai, Sumatera Barat.', 'gambar/1U27GFkSQ12H1UyDMpUQ3aievpfKGJrF87iBF87u.jpg', '2021-01-17 05:56:47', '2021-01-17 05:56:47'),
(19, 2, 'Tangkahan, Sumatera Utara', 'Ekowisata di Kabupaten Langkat ini cocok sekali untuk kamu yang ingin menikmati suasana hutan dengan alam yang masih sangat terjaga kondisinya. Nggak hanya itu, kamu juga bisa bermain dengan gajah di habitat alaminya – tidak di dalam kebun binatang yang sangat mengekang kebebasannya!', 'Sumatra Utara', 'gambar/L0QPEfk2Xf0W8cRGYIlHSKNXQIJfI9fWULe23Gyo.jpg', '2021-01-17 06:00:13', '2021-01-17 06:00:13'),
(20, 2, 'Danau Ranau, Sumatera Selatan', 'Danau Ranau adalah salah satu tempat wisata alam di Sumatera Selatan yang tidak boleh kamu lewatkan! Danau yang terletak di perbatasan kabupaten Lampung Barat, Lampung, dan Kabupaten OKU Selatan ini, memiliki luas sekitar 125,9 km. Nah, untuk menjangkau Danau Ranau kamu harus menempuh jarak sekitar 330 km atau 8,5 jam perjalanan darat dari kota Palembang.', 'Sumatera Selatan', 'gambar/58B6oUwiNCdUDAahFUhgl7NDZzVWm4QyE8bb5zjv.jpg', '2021-01-17 06:02:46', '2021-01-17 06:02:46'),
(21, 2, 'Lembah Harau, Sumatera Barat', 'Alih-alih dikatakan sebagai Yosemite-nya Indonesia, Lembah Harau di Sumatera Barat seringkali disebut-sebut sebagai lembah paling indah yang ada di Indonesia. Untuk mencapai Lembah Harau, kamu akan harus menempuh perjalanan sekitar 1,5 jam ke arah barat dari Bukittinggi di Sumatera Barat.', 'Sumatera Barat', 'gambar/O77igCaSQIsjoWm7dNdNnQqI2jWSadthZNh2am01.jpg', '2021-01-17 06:04:49', '2021-01-17 06:04:49'),
(22, 2, 'Pantai Gigi Hiu', 'Dari namanya saja mungkin kamu sudah terbayang bagaimana bentuk dari kawasan wisata alam ini. Yup, disebut sebagai pantai Gigi Hiu, memang karena bentuk karang-karangnya yang tajam-tajam dan menyerupai gigi ikan Hiu.', 'Sumatera', 'gambar/NuUYkvZ0q6bYuZNi1Gxl1hn2NccpNbPoaUKUGgWJ.jpg', '2021-01-17 06:07:15', '2021-01-17 06:07:15'),
(23, 5, 'Kwatisore, Nabire Papua', 'Di sini, Anda akan merasakan sensasi yang tidak akan di jumpai di objek wisata lain, yaitu melihat ikan-ikan hiu yang bobotnya hingga 6 ton menggesek-gesekkan tubuhnya pada badan perahu nelayan, bahkan menemani Anda berenang mengarungi lautan.', 'Nabire, Papua', 'gambar/woJN8C1vGLkXwPVej8wcsST7tiTYeauqg3OfSEoD.jpg', '2021-01-17 06:10:53', '2021-01-17 06:10:53'),
(24, 5, 'Taman Nasional Teluk Cendrawasih', 'Inilah tempat menyelam terbaik sekaligus Taman Nasional terbesar di Indonesia.  Dengan luas area sekitar 1.453.500 hektar yang terdiri atas hutan tropika, hutan mangrove dan terumbu karang, Taman Nasional Teluk Cendrawasih  dihuni oleh 150 spesies dari 15 family dan 290 jenis ikan.', 'Papua', 'gambar/uGDW7nBbhHCpj2HSKnOQcryuDjGIhhWKfrVibrSV.jpg', '2021-01-17 06:13:14', '2021-01-17 06:13:14'),
(25, 6, 'Gunung Bromo', 'Gunung Bromo atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang.', 'Jawa Timur', 'gambar/EIHlnNhGAMBEccBdzPwwRzvAm0XowbSGYlvtnBH0.jpg', '2021-01-17 06:22:44', '2021-01-17 06:22:44'),
(26, 3, 'Taman Nasional Tanjung Puting', 'Taman Nasional Tanjung Puting adalah sebuah taman nasional yang terletak di semenanjung barat daya provinsi Kalimantan Tengah. Tanjung Puting pada awalnya merupakan cagar alam dan suaka margasatwa yang ditetapkan oleh Pemerintah Hindia Belanda pada tahun 1937.', 'Kalimantan Tengah', 'gambar/UCnkh66s7ispr1wDbVKonYIaW7jdsfPpwLYX8pS7.jpg', '2021-01-17 08:03:38', '2021-01-17 08:03:38'),
(27, 3, 'Goa Haji Mangku atau Goa Biru', 'Gua Mangku Haji di Pulau Maratua, Kepulauan Derawan menjanjikan pengunjung akan sebuah pemandangan yang tiada dua. Apalagi jika pengunjung datang di siang hari, sinar matahari yang menembus ke bagian dalam Gua Mangku Haji memberikan pesona air yang berwarna kebiru-biruan, berkilau menenangkan', 'Kalimantan Timur', 'gambar/7xF5yWolE5MgSuAiycQpPqqWdb1UDgROzfev7rn2.jpg', '2021-01-17 08:06:19', '2021-01-17 08:06:19'),
(28, 4, 'Jalan Malioboro', 'Jalan Malioboro adalah nama salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke perempatan Kantor Pos Yogyakarta. Secara keseluruhan terdiri dari Jalan Margo Utomo, Jalan Malioboro, dan Jalan Margo Mulyo. Jalan ini merupakan poros Garis Imajiner Kraton Yogyakarta', 'Sosromenduran, Gedong Tengen, DIY', 'gambar/ejdlDd3cLHtheKJULSsetpFruSqKfcUe26KDtdMX.jpg', '2021-01-17 08:11:16', '2021-01-17 08:11:16'),
(29, 4, 'Goa Pindul', 'Salah satu destinasi wisata yang hits di kalangan wisatawan adalah Goa pindul. Tak hanya terkenal di kalangan wisatawan lokal namun juga internasional. Mengunjungi goa pindul ada berkesempatan untuk susur sungai dengan menggunakan ban. Keseruan inilah yang akhirnya mengundang banyak wisatawan.', 'Kab. Gunung Kidul, Yogyakarya', 'gambar/xnPn9T7eNgDFjJszmkIxgxOYzzTgJgovAIzWl5Wl.jpg', '2021-01-17 08:13:50', '2021-01-17 08:13:50'),
(30, 4, 'Taman Pintar', 'Wisata edukasi di Taman Pintar sangat sesuai dengan anak-anak. Di Taman Pintar terdapat hiburan dan wahana yang dapat menambah wawasan anak. Wisatawan bisa mengajak anaknya untuk melihat teater 3D atau wahana bahari.', 'Kota Yogyakarta, Daerah Istimewa Yogyakarta.', 'gambar/1Lhk5mBe6YwUcUHIL32d3BLQiDGgMe74VYBtUjch.jpg', '2021-01-17 08:15:46', '2021-01-17 08:15:46'),
(31, 4, 'Kebun Binatang Gembiraloka', 'Indonesia memiliki satwa yang beragam. Keberagaman ini dihadirkan oleh pengelola dengan Kebun Binatang Gembiraloka.  Ada banyak binatang yang bisa dilihat secara aman. Wisatawan diizinkan untuk memberi makan kepada binatang yang ada di dalamnya.', 'Jl. Kebun Raya, Rejowinangun, Kotagede, Yogyakarta', 'gambar/5NGAtciW0rVrMaXXBFwl10xBSfXy6k8UjIDI8vAz.jpg', '2021-01-17 08:19:14', '2021-01-17 08:19:14'),
(32, 4, 'Bukit Bintang Jogja', 'Jika anda ingin mengunjungi tempat yang menawarkan pemandangan dari ketinggian, Bukit Bintang Jogja tidak bisa dilewatkan. Bukit bintang menawarkan landscape kota Jogja yang menawan. Tidak hanya bisa menyaksikan pemandangan dari ketinggian, pengunjung juga bisa menikmati banyak sajian kuliner.', 'Srimulyo, Kec. Patuk, Kab. Gunung Kidul.', 'gambar/e55HdTs4qewdZmCTpzVmXAdeToWIB2Z2WEhpgSwQ.jpg', '2021-01-17 08:21:24', '2021-01-17 08:21:24'),
(34, 4, 'Bukit Kali Kuning', 'Dulunya tempat wisata di Yogyakarta ini pernah ramai wisatawan sebelum letusan Gunung Merapi tahun 2010 silam. Pada awal 2017, Bukit Kali Kuning bersemi kembali menjadi tempat wisata baru yang kece banget buat foto-foto.', 'Kec. Cangkringan, Kabupaten Sleman', 'gambar/qWV363wWhQ32BUjEq9kvWecazZkNKW9p6NYTeMZR.jpg', '2021-01-17 08:26:12', '2021-01-17 08:26:12'),
(35, 4, 'Taman Pelangi', 'Masih di utara Yogyakarta, kamu bisa menikmati suasana malam bersama ratusan lampion di sini. Taman Pelangi masih satu kawasan dengan Museum Monumen Jogja Kembali di Jalan Ring Road Utara, Sariharjo, Kabupaten Sleman.', 'Sariharjo, Kab. sleman', 'gambar/NRWelIvB97fNwH51VJHkI4JJAOzl4zHYzyZqU6Zc.jpg', '2021-01-17 08:38:11', '2021-01-17 08:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa_hotel`
--
ALTER TABLE `sewa_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sewa_hotel`
--
ALTER TABLE `sewa_hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
