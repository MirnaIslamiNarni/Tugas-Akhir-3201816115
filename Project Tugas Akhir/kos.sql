-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2021 pada 02.58
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kost_kontrakan`
--

CREATE TABLE `kost_kontrakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik_id` int(20) NOT NULL,
  `nama_kost_atau_kontrakan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khusus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aturan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_rekening` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kost_kontrakan`
--

INSERT INTO `kost_kontrakan` (`id`, `tipe`, `pemilik_id`, `nama_kost_atau_kontrakan`, `nama`, `kota`, `khusus`, `telepon`, `harga`, `fasilitas`, `aturan`, `alamat`, `gambar1`, `gambar2`, `gambar3`, `created_at`, `updated_at`, `status`, `bank`, `nomor_rekening`) VALUES
(44, 'Kost', 38, 'Tiara Kost', 'Tiara', 'Kota Batam', 'Campur', '082285960975', '1600000', '<ul><li>AC</li><li>Wifi</li><li>Queen Bad</li><li>Meja rias</li><li>TV</li><li>Lemari</li><li>Kamar mandi dalam ( shower, kloset duduk, air panas, wastafel</li></ul>', '<ul><li>24 Jam</li><li>Maksimal 1 kamar 2 orang / semi bebas</li><li>Belum Termasuk Listrik dan Air</li></ul>', 'Jl. Happy Garden, Batu Selicin, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau 29444', 'Screenshot (323).png', 'Screenshot (322).png', 'Screenshot (426).png', '2021-08-29 11:17:42', '2021-08-29 11:17:42', 'Tersedia', 'BRI', '6544334'),
(45, 'Kost', 40, 'Denal Kost', 'Doni', 'Kota Tanjung Pinang', 'Putra', '081371413121', '1000000', '<ul><li>ACKipas Angin,</li><li>Tempat tidur</li><li>Lemari</li><li>Rak sepatu</li><li>Fasilitas Bersama :&nbsp;</li><li>Listrik</li><li>Wi-Fi</li><li>Air PAM</li><li>kamar mandi</li><li>Parkir motor</li><li>Dapur<br>&nbsp;</li></ul>', '<ul><li>24 Jam</li><li>Harga sudah Termasuk Listrik dan Air</li></ul>', 'Perum Bumi Indah KM.10, Jl. Sakura No.11, Air Raja, Kec. Tanjungpinang Tim., Kota Tanjung Pinang, Kepulauan Riau 29124', 'Screenshot (545).png', 'Screenshot (546).png', 'Screenshot (547).png', '2021-08-30 01:12:25', '2021-08-30 01:12:25', 'Tersedia', 'BNI', '23465765'),
(46, 'Kost', 41, 'Luci Kost', 'lusi', 'Kabupaten Natuna', 'Putri', '082283990251', '2000000', '<ul><li>AC</li><li>TV</li><li>WIFI akses</li><li>TV Berlangganan</li><li>Tempat Tidur</li><li>Lemari Pakaian</li><li>Kamar Mandi Dalam</li><li>Dapur Bersama</li></ul>', '<ul><li>Tutup Pagar jam 11.00 Malam</li><li>Tidak boleh bawa pasangan</li><li>Tidak boleh pelihara hewan</li><li>harga sudah termasuk listrik dan air</li></ul>', 'Jl. Hang Jebat, Ranai Kota, Bunguran Tim., Kabupaten Natuna, Kepulauan Riau 29783', 'Screenshot (549).png', 'Screenshot (550).png', 'Screenshot (551).png', '2021-08-30 01:27:29', '2021-08-30 01:27:29', 'Tersedia', 'BCA', '113344645'),
(47, 'Kontrakkan', 42, 'Hamka Kontrakan', 'Ilham', 'Kota Tanjung Pinang', 'Campur', '082174978088', '800000', '<ul><li>Kamar tidur: 1<br>&nbsp;</li><li>Ruang tamu : 1<br>&nbsp;</li><li>Dapur : 1<br>&nbsp;</li><li>Kamar mandi: 1<br>&nbsp;</li></ul>', '<ul><li>Belum Termasuk Listrik dan Air</li></ul>', 'Jl. Bakar Batu No.108 - 110, Kemboja, Tanjungpinang Bar., Kota Tanjung Pinang, Kepulauan Riau 29112', 'Screenshot (552).png', 'Screenshot (553).png', 'Screenshot (554).png', '2021-08-30 02:01:11', '2021-09-01 01:07:27', 'Tersedia', 'BRI', '35611123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelanggan_id` int(20) NOT NULL,
  `pemilik_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kos_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `pelanggan_id`, `pemilik_id`, `kos_id`, `tipe`, `selama`, `harga`, `total`, `created_at`, `updated_at`) VALUES
(47, 'Mirna', 45, '41', '46', 'Kost', '10', '2000000', NULL, '2021-08-30 06:14:55', '2021-08-30 06:14:55'),
(49, 'Mirna', 45, '40', '45', 'Kost', '1', '1000000', NULL, '2021-08-31 11:04:28', '2021-08-31 11:04:28'),
(50, 'Agus', 44, '42', '47', 'Kontrakkan', '6', '5000000', NULL, '2021-09-01 01:05:24', '2021-09-01 01:05:24'),
(51, 'Mirna', 45, '38', '44', 'Kost', '4', '1600000', NULL, '2021-09-01 07:17:11', '2021-09-01 07:17:11'),
(52, 'moana', 50, '40', '45', 'Kost', '5', '1000000', NULL, '2021-09-01 07:25:23', '2021-09-01 07:25:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `pemilik_id` int(11) NOT NULL,
  `kos_id` int(11) NOT NULL,
  `tipe` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ktp` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifikasi` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `pelanggan_id`, `pemilik_id`, `kos_id`, `tipe`, `bukti`, `created_at`, `updated_at`, `ktp`, `verifikasi`) VALUES
(17, 'Mirna', 45, 41, 46, 'Kost', 'images (2).jfif', '2021-08-30 06:36:56', '2021-08-30 06:40:06', 'img20180612162012749.jpg', '1'),
(18, 'Mirna', 45, 40, 45, 'Kost', '8e1d5a4ec0630be186682867e8783e2d (1) (2).jpg', '2021-08-31 11:04:46', '2021-08-31 11:04:46', 'img20180612162012749.jpg', '0'),
(19, 'Agus', 44, 42, 47, 'Kontrakkan', 'img20180612162012749.jpg', '2021-09-01 01:05:39', '2021-09-01 01:08:23', 'img20180612162012749.jpg', '1'),
(20, 'Mirna', 45, 38, 44, 'Kost', 'images (2).jfif', '2021-09-01 07:18:07', '2021-09-01 07:18:07', 'img20180612162012749.jpg', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verifikasi` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konfir_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `tipe`, `name`, `email`, `password`, `alamat`, `telepon`, `ktp`, `remember_token`, `created_at`, `updated_at`, `verifikasi`, `konfir_password`) VALUES
(3, 'admin', 'Admin', 'admin@gmail.com', '$2y$10$FVd1P59u5CcaHjb6gIaYUekwrW3tV8qs9n.27I9y32.3sr14csY0u', 'admin', '1234', '', '7JziEzdP7sOsNHBI6VqrmJ4qlgMAeYMMqvpnuW7liOZVHeF3ABNh36KeKZ6O', '2021-06-28 03:27:46', '2021-06-28 03:27:46', '1', ''),
(38, '1', 'Tiara Kost', 'Tiara@gmail.com', '$2y$10$Q3zHw.KC5R4IDHLZrdGwpOtMOomBkyWA2YSFc5MZQF9GsOXkNHMhe', 'Jl. Happy Garden, Batu Selicin, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau 29444', '082285960975', NULL, 'gNWLftvhGn8WeKAd8p4zM4JIqZAJ6J5fDqvma2F5sF2jAViw0Qcacaeo6P9g', '2021-08-29 11:01:39', '2021-08-29 11:31:32', '1', '$2y$10$rQKqPXW7U164xvThh6uoduG/jVKOQLlZNd7x2nNhNF4Nur8ThYdzm'),
(39, '2', 'Alda', 'Alda@gmail.com', '$2y$10$C03kbH8wmQSUpX8gGbls7.OJ2j52I24dcAulb68GNtDY2.HEora0y', 'Jln.air raya', '082250096821', 'img20180612162012749.jpg', 'Yqnt253GC6Ymuc2OGwoR82vRKbTuIna7M9vdQHfk3kWiHTKFxqm7X2IpmV6G', '2021-08-29 11:39:06', '2021-08-30 06:08:10', '1', '$2y$10$AORnTPEDJlGiDkqTE9AlLedGnGq2.M1MVm5oy28IoVl7ZKS1wcVke'),
(40, '1', 'Denal Kost', 'denal@gmail.com', '$2y$10$G0vCl5AT1uqeQclvckMtweQMgjqGkzqr/ZET0AiYeV00iMSeqwPY6', 'Perum Bumi Indah KM.10, Jl. Sakura No.11, Air Raja, Kec. Tanjungpinang Tim., Kota Tanjung Pinang, Kepulauan Riau 29124', '081371413121', NULL, 'AoFbgERh0bXCk3XGxI9LZuOhkv8FbPQ938yRytKSaRyZFC1HuQ1AvzjpsKpv', '2021-08-30 01:03:10', '2021-08-30 01:03:40', '1', '$2y$10$Y5WVi1e.khjHw.HH1rTuwObRZSyH1CP2dTXlhvZTHKSdDOpAXwoSO'),
(41, '1', 'Luci Kost', 'luci@gmail.com', '$2y$10$mWC3jm0r4U/PmdGgXGmQIOXN2BPS5V8JJ/sV6akom0Lq8NwEcX8q6', 'Jl. Hang Jebat, Ranai Kota, Bunguran Tim., Kabupaten Natuna, Kepulauan Riau 29783', '082283990251', NULL, 'Y5PD8oZkeY5jfigkah0GfW884BYpwpgZ88RSxnGMRaETUG6gLDBLoaNbgWqu', '2021-08-30 01:18:44', '2021-08-30 01:19:24', '1', '$2y$10$IEqzuOBO4Onmw6YHnM/h2Onb556AdMt1awjPo5EMzCdORY5ezElEq'),
(42, '1', 'Kontrakan Hamka', 'hamka@gmail.com', '$2y$10$Pu84MJDy4hBkZERs068VTeQxPxo2MbdMRWKvv2y0niq1ACvuZ/dGe', 'Jl. Bakar Batu No.108 - 110, Kemboja, Tanjung Pinang Bar., Kota Tanjung Pinang, Kepulauan Riau 29112', '082174978088', NULL, 'NpOt920NIOBZ6LfjFYRl9ikKBp61PB5UIfV3nTKOb6emldleuRVW6a2tacRf', '2021-08-30 01:54:35', '2021-08-30 01:54:54', '1', '$2y$10$WZhqzFhMHAhixxLbo/WWkezXS1hwdUBpFIPeoC5ZKZtE7iAnJHf6q'),
(44, '2', 'Agus', 'agus@gmail.com', '$2y$10$BCM6bSMOFGzm3wn6/JxkreRm28Vwc9P84XAK3gbKlxKUM/qu8/FOS', 'Jl. Tanjung Balau', '082250096821', 'img20180612162012749.jpg', 'FBeUCo5GZizsBzSlvWlFyUoG5L3uHpnLNZ958W0vvB776SaydlJSVvIqL4n6', '2021-08-30 06:00:14', '2021-09-01 01:04:48', '1', '$2y$10$ND8GqOVlmJt7QEgrfVZ7MOJmguVAPV8UJyD0rk09VtzbQ.lninMJ.'),
(45, '2', 'Mirna', 'mirna@gmail.com', '$2y$10$3ktrgp4h9UYTfLvMWNqt4uUpqEgDQTr.KPEdvrxBXctJh6xu8pCIK', 'Jln.Air Raya', '082250096821', 'img20180612162012749.jpg', '2N1FcUAKkbD5KBn4ebPkWH0KRTQVup6SlWE0EKQA64iIYH6GXXFXhR7EdVgo', '2021-08-30 06:01:39', '2021-08-30 06:29:11', '1', '$2y$10$nukBhMWwr.Cs1ZP077XMEe8a.r394UQ.x1BVui6Z1wLK2M2NYbZNy'),
(46, '2', 'Suhendra', 'suhendra@gmail.com', '$2y$10$cEc0yh5KjGTW7yqQ0SHjBu5LL7XDPsBOK/2hSHRGOGp6tnVlGBjZG', 'Jl. Hang Jebat', '082252489978', NULL, 'gnOfNBGtHKiHQ2HeDnnvhVmoL90hK0QfGPeGXmCsDFdljbqiEIf5rzmehTf0', '2021-08-30 06:05:37', '2021-08-30 06:09:32', '1', '$2y$10$m0Wrs0gqs6cee/b8bNMhzOyalrpvIpnlbby9gbz3YNMiRDkresZia'),
(47, '2', 'mei mei', 'mei@gmail.com', '$2y$10$R0TSdx2VNZtFbOmS.G4dleBYx7kkTC/M5FJlocXiXszh1LqE9EY0.', 'Jl. Happy Garden, Batu Selicin, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau 29444', '22442422', NULL, 'nEPhpkG2drWzt6rZSx1c3JfbvhTh021NZvkKfWdEFcUkglCeNymbiq5JmJRq', '2021-08-30 08:13:48', '2021-08-30 08:13:48', NULL, '$2y$10$SLaJVRDsTjD5TJS6LH.OGeA0ooOtfNuBfclRsZ01OYqKQpa/NT6B.'),
(49, '1', 'Kost Golden', 'golden@gmail.com', '$2y$10$b/vfaGwUhIhnaVtXeA7Fy.Nx5F9Zeg55Wo5PNRPWuvWUJhHk733UO', 'Blok H.9 Perumahan Golden Land, Jl. Golden Land No.H.9, Baloi Permai, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29463', '082283990258', NULL, 'gOzWKqK4vX9uAeJlQy2O7PzQOkhhyQTEsXBQaDEbNK5ISmbJi22p2XHJ68PJ', '2021-09-01 06:48:27', '2021-09-01 06:48:27', NULL, '$2y$10$hV9P.PqJhNMqLaC8LU4vd.2C5M6jKqKEQ2se8eaXXX2wlfv12jNXS'),
(50, '2', 'moana', 'moana@gmail.com', '$2y$10$byY20dfpMSg.4Z3LQriLjOrObVBqy5CNL9z/F5RlJtdfoYgQGAKOu', 'Jln.air raya', '902828762722', 'img20180612162012749 (1).jpg', 'hqY6WcLX3r88sBTTM6i2H2XVAlSu8KgpmFZIkQ1XpGPJ8ICQzKzVW5YeYH2B', '2021-09-01 07:23:41', '2021-09-01 07:28:50', '1', '$2y$10$GyC5YD.A8ucycn5COI3qLuEPHYZ60nvjUjKwi.HXGJGYYi/DzuOQa'),
(51, '1', 'revisi', 'revisi@gmail.com', '$2y$10$xa978eW7du0LxQdN/hqGKOSlfWOf/gMSFNytIexcSrgYVepHR5lYG', 'Jln.air raya', '082283990251', NULL, 'hnAUx6pzaSNiueG4mTtBlwMqvk3Y14Fb74WDqYhQa6f2gm3Zmk13h9piNe9u', '2021-09-07 22:17:59', '2021-09-07 22:18:53', '1', '$2y$10$sro.WWrvk6YuRzUC8d1pQO/2iz0rQE3qPz5WE8kgtsDZjykYiRfCy'),
(52, '2', 'rrrrr', 'ri@gmail.com', '$2y$10$eqce4Og7o7UDZeMH6fdOW.oNZtPJXQngAtRuJW4YUfI9HkbGzScny', 'Jl. Happy Garden, Batu Selicin, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau 29444', 'fghfhfh', NULL, 'zQBDuXPowPnnQtqdxKcHTFjyyda9Qofnf40DYadiwotbkhaT5Kp0VqbR75Wp', '2021-09-07 22:44:40', '2021-09-07 22:44:40', NULL, '$2y$10$z0/tQbLxf91YK69du/x2V.4HMgEl1g6dvio3yo./OQWDNPb6jx9zu'),
(53, '1', 'jhh', 'admeein@gmail', '$2y$10$t1GtiefXQ/MLn5tFbv7W5egIBeDLPCvymGbmXB4EEXAeMMWP5/aPC', 'Jln.air raya', '7363637737', NULL, 'je6YNzSmfoQKovhSoaNSlhQy09nTtE93RdJBNtfyjiIIUWtHN1VbOdY2UypN', '2021-09-12 08:47:59', '2021-09-12 08:47:59', NULL, '$2y$10$tfxah4ysjeeX8Q6zJ9UrrujkklaSrXD7CI0R6fW5XDMM.AZwykLZm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kost_kontrakan`
--
ALTER TABLE `kost_kontrakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT untuk tabel `kost_kontrakan`
--
ALTER TABLE `kost_kontrakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
