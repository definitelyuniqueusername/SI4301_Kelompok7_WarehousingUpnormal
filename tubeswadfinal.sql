-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 06:23 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswadfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '16-10-19u3P2i49623510_2146745618737514_4534665392110436352_n.jpg', 'Upnormal Ignition 3', 'UPNORMAL IGNITION! Event KEREN yang wajib Bro/Sist datengin! Karena di sini kamu bisa Tour Paberik Kopi, Coffee Tasting & Business Sharing! Ayo buruan daftar Bro/Sist!', '2022-01-12 08:51:25', '2022-01-12 09:10:19'),
(2, '16-11-36Fb7Zvevent-warunk-upnormal-cempaka-putih-coffee-class.jpg', 'Coffee Class', 'INI SAATNYA bikin Bro/Sist makin PD bikin kopi Manual Brew sendiri. Ikutan COFFEE CLASS yuk!', '2022-01-12 08:51:25', '2022-01-12 09:11:36'),
(3, '16-14-11FpLHV34862105_1832676390144440_1918129490995707904_n.jpg', 'Upnormal Coffee Roasters,  Cihampelas - Bandung.', 'Rasakan sensasi menikmati sajian kopi yang baik sekaligus menyantap makanan kekinian khas upnormal dengan suasa yang berbeda dari biasanya.', '2022-01-12 08:51:25', '2022-01-12 09:14:11'),
(4, '16-17-31VF8Whw960.jpg', 'Indomie Birthday Treat!', 'Ayo! Posting foto Indomie di Warunk Upnormal dengan menulis caption \"Happy Birthday Indomie!\" sertakan juga hashtag #Indomie45th #WarunkUpnormal', '2022-01-12 09:17:31', '2022-01-12 09:17:31'),
(5, '16-19-365QOiJ43951391_2017975078281236_6210580107958943744_n.jpg', 'Warunk Upnormal kini HADIR di Kudus.', 'NONGKRONG di @warunk_upnormal KUDUS PAKAI VOUCHER GRATIS TOTAL 5 JUTA siapa yang mau? Kepriye Kabare Bro dan Sist yang ada di KUDUS! Udah tau dong Warunk Upnormal Ke-84 sudah opening di kotanem', '2022-01-12 09:19:36', '2022-01-12 09:19:36');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Saya lupa password, bagaimana agar saya dapat masuk kembali ke akun saya?', 'Jika anda masih mengingat e-mail anda sebelumnya, silahkan memasukan halaman lupa password dan tulis e-mail anda. Lalu permintaan perubahan password akan dikirim kan ke e-mail tersebut, mohon buka e-mail anda dan klik link yang tertera. Terakhir anda akan diminta untuk memasukan password baru untuk akun anda.', '2022-01-12 08:51:24', '2022-01-12 09:06:12'),
(2, 'Apakah saya dapat merubah nama saya pada profil?', 'Untuk merubah nama anda melalui website, silahkan buka profile dan pilih kolom nama kemudian masukan nama yang anda inginkan. Lalu klik simpan. Nama anda telah berubah.', '2022-01-12 08:51:25', '2022-01-12 09:08:30'),
(3, 'Pertanyaan 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolorem officiis fuga nemo, perferendis explicabo veritatis amet harum molestias facilis odio saepe repellendus qui illum a culpa consequatur ipsum voluptatem.', '2022-01-12 08:51:25', '2022-01-12 08:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `kebijakan_privasi`
--

CREATE TABLE `kebijakan_privasi` (
  `id` int UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kebijakan_privasi`
--

INSERT INTO `kebijakan_privasi` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolorem officiis fuga nemo, perferendis explicabo veritatis amet harum molestias facilis odio saepe repellendus qui illum a culpa consequatur ipsum voluptatem.', '2022-01-12 08:51:24', '2022-01-12 08:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `status` enum('keranjang','checkout') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `user_id`, `menu_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'checkout', '2022-01-12 09:24:34', '2022-01-12 09:25:32'),
(2, 3, 3, 'checkout', '2022-01-12 09:36:13', '2022-01-12 09:37:35'),
(3, 3, 2, 'checkout', '2022-01-12 09:36:23', '2022-01-12 09:37:35'),
(4, 2, 1, 'checkout', '2022-01-12 10:02:17', '2022-01-12 10:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `gambar`, `judul`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, '16-49-17sf9NV6b03e032-f3be-446c-afb1-2276a7632976.jpg', 'Stok Indomie (Selusin Dus)', 'Mi goreng berarti \"mi yang digoreng\" adalah hidangan mie yang dimasak dengan digoreng tumis khas Indonesia. Satu dus Indomie berisi 24 bungkus. Total pemesanan yaitu 288 bungkus.', 1150000, '2022-01-12 08:51:25', '2022-01-12 09:49:17'),
(2, '16-56-49LuYv2KOPI.jpg', 'Biji Kopi Arabika (50kg)', 'Kopi arabika (Coffea arabica), juga dikenal sebagai kopi Arab, kopi semak Arab, atau kopi gunung. Pemesanan berisikan 50kg biji kopi arabika.', 4325000, '2022-01-12 08:51:26', '2022-01-12 09:56:49'),
(3, '17-01-38DNSepTelur_Ayam_Telor_Ayam_Negri_1kg.jpg.webp', 'Telur Ayam (5 peti)', '- Telur ayam negeri fresh yang diambil langsung dari peternakan\r\n- Harga yang tertera adalah per +/- 1,8kg (isi 30 butir)\r\n- Masa simpan +/- 20 hari (pada suhu sejuk) dari penerimaan barang di tempat anda (disarankan disimpan di dalam kulkas)', 1500000, '2022-01-12 08:51:26', '2022-01-12 10:01:38');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_04_143847_create_permission_tables', 1),
(6, '2022_01_04_150901_create_kebijakan_privasi_table', 1),
(7, '2022_01_04_151000_create_faq_table', 1),
(8, '2022_01_04_151108_create_berita_table', 1),
(9, '2022_01_04_151139_create_menu_table', 1),
(10, '2022_01_04_151245_create_keranjang_table', 1),
(11, '2022_01_04_151704_create_transaksi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-01-12 08:51:23', '2022-01-12 08:51:23'),
(2, 'customer', 'web', '2022-01-12 08:51:24', '2022-01-12 08:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `alamat_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_order` enum('dalam proses','dalam perjalanan','diterima') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` enum('kartu debit','transfer','virtual account','belum dibayar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `menu_id`, `alamat_pengiriman`, `tanggal_pengiriman`, `waktu_pengiriman`, `status_order`, `pembayaran`, `created_at`, `updated_at`) VALUES
(2, 3, 3, 'Upnormal Lembang', '14 Januari 2022', '06.00', 'dalam proses', 'virtual account', '2022-01-12 09:37:35', '2022-01-12 09:37:54'),
(3, 3, 2, 'Upnormal Lembang', '14 Januari 2022', '06.00', 'dalam proses', 'virtual account', '2022-01-12 09:37:35', '2022-01-12 09:37:54'),
(4, 2, 1, 'Upnormal GBLA', '15 Januari 2022', '15.00', 'dalam proses', 'belum dibayar', '2022-01-12 10:02:46', '2022-01-12 10:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `telepon`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Upnormal', 'upnormal@admin.com', '2022-01-12 08:51:24', '$2y$10$fI/eKovz8guwQy1vjrMSeOW0ZpqcNiKww89OOiTYDeucfm59W5b9u', '08384662384', 'avatar.png', 'LREt2TxwQlUVQZxIGv2WxZtiQk69fOXE5kSlg0IzUIvzSSLjlcwrTCa9HR5e', '2022-01-12 08:51:24', '2022-01-12 09:31:12'),
(2, 'Customer Upnormal', 'upnormal@customer.com', '2022-01-12 08:51:24', '$2y$10$GlBi/LL6vHRInyeK6cWCYOQ7Yr2OThtTPb7rK4USjsKEsVGTYh7zK', '08384662384', 'avatar.png', 'XqfKMAG58kdHUFFD08myig7cFVzdalxh0Wqf8cTzYO7J0CTKbDUEV4LNBM4l', '2022-01-12 08:51:24', '2022-01-12 09:31:55'),
(3, 'Denis Gresan', 'denisgresan@customer.com', NULL, '$2y$10$e5RLe1/g8Y0T.I9YYM92vedHDwGC4my9XUG6SQyxIgEzvBZLftBsO', '08666787812', '16-34-59mb21Vdownload (1).jpg', NULL, '2022-01-12 09:34:12', '2022-01-12 09:34:59'),
(4, 'Muhammand Farhan Gresan Yusuf', 'fullteam@customer.com', NULL, '$2y$10$kVFfoG4BGkehuTI8rL8IK.TUCxKv0PH.RvjL5iDWbsUS6ttel2adu', '0824206664646', 'avatar.png', NULL, '2022-01-12 09:40:23', '2022-01-12 09:40:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebijakan_privasi`
--
ALTER TABLE `kebijakan_privasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kebijakan_privasi`
--
ALTER TABLE `kebijakan_privasi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
