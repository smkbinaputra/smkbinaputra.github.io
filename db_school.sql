-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2023 pada 14.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `created_at`, `update_at`) VALUES
(9, 'galeri1693278971.jpg', '2023-08-29 03:16:11', NULL),
(11, 'galeri1693279163.jpg', '2023-08-29 03:24:58', '2023-08-29 10:24:58'),
(12, 'galeri1693879611.jpg', '2023-09-05 02:06:51', NULL),
(13, 'galeri1693879644.jpg', '2023-09-05 02:07:24', NULL),
(14, 'galeri1693879652.jpg', '2023-09-05 02:07:32', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `created_at`, `update_at`) VALUES
(1, 'Eko Lilik', 'ekolilik', 'ed07686710c9719a26e2ff5da4dd5e07', '2023-08-26 03:35:12', NULL),
(2, 'Bina Putra  ', 'adminbinaputra', '4bb41eadd7b989e7d0840e4d90527f0a', '2023-08-28 01:56:51', '2023-08-28 03:56:51'),
(3, 'Haafizah Dwi  ', 'Haafizah43', '1c47a7d29d0fbbddf18bfc84214c22f3', '2023-08-29 03:18:33', '2023-08-29 10:18:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul_berita`, `keterangan`, `gambar`, `created_at`, `update_at`, `created_by`) VALUES
(5, 'Sosialisasi Satpol PP', 'Satuan Polisi Pamong Praja (Satpol PP) Provinsi Kalimantan Barat melaksanakan kegiatan Satpol PP Goes to School pada hari Rabu, tanggal 10 Mei 2023. Kegiatan ini dilaksanakan di SMAN 1 Toho, Kecamatan Toho, Kabupaten Mempawah Provinsi Kalimantan Barat. Kegiatan tersebut bertujuan untuk memberikan sosialisasi Peraturan Daerah No. 4 Tahun 2021 tentang Penyelenggaraan Ketentraman, Ketertiban Umum, dan Perlindungan Masyarakat. Kegiatan Satpol PP Goes To School ini lebih menitikberatkan pada Tertib Pendidikan.\r\n\r\nKoordinator kegiatan, E. Elvira. A. Marcus, S.H. M.Kn, menjelaskan bahwa kegiatan ini diadakan untuk meningkatkan pemahaman siswa tentang pentingnya tertib dalam pendidikan. \"Kegiatan ini sangat penting karena bertujuan untuk membangun kesadaran siswa dalam menjaga tertib di lingkungan sekolah,\" ujarnya.', 'berita1693542313.jpeg', '2023-09-01 04:25:13', NULL, 1),
(6, 'Vaksin Oleh Kepolisian', 'Pemerintah terus mendorong vaksinasi dilakukan secara merata bagi masyarakat Indonesia, termasuk vaksinasi pada anak-anak agar terhindar dari paparan Covid-19. Apalagi saat ini sudah muncul varian baru Omicron yang lebih menular dan sudah menyebar ke ratusan negara termasuk Indonesia.\r\n\r\nSebagai bentuk sinergi percepatan vaksinasi Covid-19 bagi anak usia 6-11 tahun, Kapolri pun meluncurkan Vaksinasi Merdeka Anak Usia 6-11 Tahun secara serentak di 30 provinsi di Indonesia pada Rabu, 5 Januari 2022.\r\n\r\nDilansir dari Kemkes.go.id, Kapolri menargetkan sebanyak 2,6 juta anak usia 6-11 tahun divaksinasi sampai akhir Januari 2022, guna mendukung tercapainya target nasional vaksinasi anak sebanyak 26 juta di seluruh Indonesia.\r\n\r\nPelaksanaan Vaksinasi Merdeka Anak ini dilakukan oleh semua Kapolda di seluruh Indonesia sebagai peranan Polri dan TNI dalam mendukung kebijakan pemerintah melakukan percepatan vaksinasi. Agar pada saat melaksanakan pembelajaran tatap muka (PTM) terbatas yang sudah bisa diberlakukan 100% mulai Januari 2022 ini, warga sekolah pun merasa aman dan nyaman. ', 'berita1693542560.jpg', '2023-09-01 04:29:20', NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL,
  `judul_prestasi` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id`, `judul_prestasi`, `keterangan`, `gambar`, `created_at`, `update_at`, `created_by`) VALUES
(2, 'Juara 3 Electronic Application', 'Program Keahlian Teknik Audio dan Video kembali menorehkan prestasinya dalam ajang Lomba Kompetensi Siswa Electronic Application tahun 2022. Prestasi yang membanggakan bagi Jurusan tersebut selain dilaksanakan setiap tahun sekali yang dimana persiapan saat luar biasa.\r\nPenasaran siapa kah peserta didik yang mengharumkan nama program keahlian Tekik Audio dan Video tersebut? \r\nPeserta didik tersebut bernama Rifki Adhi Pratama, Kelas XII TAV 1, berasal dari desa Tangkis Guntur Demak. \r\nSelain itu support Bapak Ibu Guru Produktif TAV juga ada pembimbing yang selalu membantu dalam proses ananda menjadi juara, yaitu Bapak Muhammad Ishaq, S.Pd.', 'prestasi1693286248.jpg', '2023-08-29 05:17:28', NULL, 1),
(4, 'Juara 3 Komet Himatika FMIPA Untan', 'Serangkaian kegiatan Kompetisi Matematika (KOMET) ke-17 yang diselenggarakan oleh Himpunan Mahasiswa Matematika (HIMATIKA) Fakultas Matematika dan Ilmu Alam (FMIPA) Universutas Tanjungpura (Untan) telah terlaksana hingga malam puncak secara semi luring, bertempat di Gedung Kuliah Bersama A dan Ruang Virtual Zoom Meeting. \r\n\r\nKompetisi Matematika ini diadakan se-Kalimantan Barat dan cabang perlomban GAMMA dan MOP diadakan secara nasional. Himatika sendiri melaksanakan kegiatan KOMET yang ke-17 terhitung dari 10 April hingga akhir bulan Mei ini dengan  tema “Menghadapi keterbatasan dengan karya dan prestasi bersama Komet-17”.\r\n\r\nRangkaian kegiatan dimulai dari Seleksi Daerah untuk cabang lomba komet di daerah masing-masing secara daring melalui Zoom Meeting. Pada cabang lomba Komet diikuti kurang lebih 400 peserta.', 'prestasi1693534221.jpg', '2023-09-01 02:10:21', NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upbate_by` (`created_by`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upbate_by` (`created_by`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
