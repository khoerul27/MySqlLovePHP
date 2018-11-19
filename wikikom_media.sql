-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 07:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wikikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `wikikom_media`
--

CREATE TABLE `wikikom_media` (
  `id_kata` int(11) NOT NULL,
  `kata` varchar(50) NOT NULL,
  `definisi` text NOT NULL,
  `publisher` varchar(20) DEFAULT NULL,
  `sumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wikikom_media`
--

INSERT INTO `wikikom_media` (`id_kata`, `kata`, `definisi`, `publisher`, `sumber`) VALUES
(1, 'komputer', 'Komputer adalah sebuah alat elektronik yang dapat melakukan beberapa tugas seperti menerima input, memprosesnya, menyimpan perintah dan menyediakan output dalam bentuk informasi.', 'Umam', 'Robert H. Blissmer'),
(2, 'komputer', 'Komputer adalah sebuah mesin penghitung elektronik yang dengan cepat dapat menerima informasi input digital lalu memprosesnya sesuai dengan program yang tersimpan di memorinya dan menghasilkan output berupa informasi.', 'Umam', 'V.C. Hamacher et al'),
(3, 'komputer', 'Komputer adalah sistem elektronik untuk memanipulasi data dengan tepat dan cepat serta dirancang dan diorganisasikan agar secara otomatis menerima dan menyimpan data input, memprosesnya, dan menghasilkan output di bawah pengawasan suatu langkah-langkah instruksi program (Sistem Operasi) yang tersimpan di didalam penyimpannya (stored program).', 'Umam', 'Donald H. Sanders'),
(19, 'Server', 'Server merupakan komputer terpisah yang menyimpan file halaman web dan berkomunikasi dengan client', 'Khoerul Umam', 'Irene Joose'),
(20, 'Server', 'Server adalah komputer yang â€œmelayaniâ€ sesuatu. Server umunya dapat menangani permintaan client dalam jumlah yang banyak secara simultan', 'Khoerul Umam', 'Ario Suryo'),
(23, 'Server', 'Server adalah computer yang mendukung aplikasi dan telekomunikasi dalam jaringan, serta pembagian peralatan software, dan database di antara berbagai terminal kerja dalam jaringan', 'Khoerul Umam', 'Oâ€™brien (2011:190)'),
(24, 'Server', 'Server adalah computer yang mendukung aplikasi dan telekomunikasi dalam jaringan, serta pembagian peralatan software, dan database di antara berbagai terminal kerja dalam jaringan', 'Khoerul Umam', 'Oâ€™brien (2011:190)'),
(25, 'Web Server', 'Solichin, dalam diktat kuliah pemrograman website mengatakan bahwa yang dimaksud dengan web server adalah sebuah perangkat lunak yang terinstall di dalam komputer server, yang berfungsi untuk menerima permintaan dan juga request berupa halaman website melalui HTTp atau HTTPS dari user atau client, dan kemudian mengirimkannya kembali dalam bentuk halaman web yang berbentuk dokumen HTML.', 'Khoerul Umam', 'solikhin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wikikom_media`
--
ALTER TABLE `wikikom_media`
  ADD PRIMARY KEY (`id_kata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wikikom_media`
--
ALTER TABLE `wikikom_media`
  MODIFY `id_kata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
