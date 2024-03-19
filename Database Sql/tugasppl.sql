-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2024 pada 14.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2024_03_18_172017_create_student_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namadepan` varchar(255) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`id`, `namadepan`, `namabelakang`, `email`, `nohp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Salsabilla ', 'Athifah', 'acayon012003@gmail.com', '089685768524', 'Ketintang Timur PTT IV 32, Surabaya, Jawa Timur, 60231', '2024-03-19 00:45:53', '2024-03-18 23:07:10'),
(2, 'Kamisato', 'Ayato', 'kamisatoayato@gmail.com', '085725401984', 'JL. Ngagel Jaya No. 10, Surabaya, Jawa Timur, 67823', '2024-03-18 11:43:24', '2024-03-19 03:33:19'),
(4, 'Kamisato', 'Ayaka', 'kamisatoayaka@gmail.com', '089014367490', 'JL. Putat Jaya No. 10, Surabaya, Jawa Timur, 67823', '2024-03-19 01:18:59', '2024-03-19 01:18:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Athip', '', 'salsabillaathifah@gmail.com', NULL, '$2y$10$JMVG9.UsCRe76V08PriAoenZ9m9JBA.UXo2v.t5xxc3SuNCyUVXgC', NULL, '2024-03-18 03:44:12', '2024-03-18 03:44:12'),
(3, 'Ayato', '', 'ayatoganteng@gmail.com', NULL, '$2y$10$JMVG9.UsCRe76V08PriAoenZ9m9JBA.UXo2v.t5xxc3SuNCyUVXgC', NULL, NULL, NULL),
(4, 'Salsabilla Athifah Yon', 'Athip', 'salsabilla22054@mhs.unesa.ac.id', NULL, '$2y$10$7AsqNxcwMvI73af6WBFlh.kyTOBsbtmdxHJi4KHV6X3.48JSpSFUi', NULL, '2024-03-19 00:18:27', '2024-03-19 00:18:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
