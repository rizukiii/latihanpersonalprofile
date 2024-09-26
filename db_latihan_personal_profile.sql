-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 09:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_personal_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id`, `username`, `email`, `password`) VALUES
(1, 'aku', 'a@g.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keahlian`
--

CREATE TABLE `tb_keahlian` (
  `id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `persentase` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keahlian`
--

INSERT INTO `tb_keahlian` (`id`, `skill`, `persentase`, `foto`) VALUES
(10, 'sdfsdf', 2324, '2024-09-05-10.46.37 - 449712859_469841652417586_3302757142037762938_n.jpg'),
(11, 'aku ', 3423, '2024-09-06-04.20.43 - Photo on 26-08-24 at 13.22.jpg'),
(12, 'aku ', 3656, '2024-09-06-04.21.00 - Photo on 8-12-23 at 11.41 PM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(12, 'svsdvc', 'sdfsf', '2024-09-26-09.24.56 - rina-768x1096.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id`, `icon`, `link`, `foto`) VALUES
(4, 'asd', 'asd', '2024-09-04-09.33.44 - ssstik.io_1720182952643.jpeg'),
(8, 'asdasd', 'asdads', '2024-09-09-04.04.23 - 449853662_840334930902632_7450763037839317182_n.jpg'),
(9, 'adasd', 'asd', '2024-09-09-04.04.37 - 449701008_335280306286941_2930879196437747001_n.jpg'),
(10, 'asnbvxmcnbvmxbnvmxnbcvmxnbv,./zz/da\']qiprtusitogizldfhgmfcmhgvmhv', 'fiduk', '2024-09-09-04.16.23 - 449712859_469841652417586_3302757142037762938_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`id`, `nama`, `foto`, `deskripsi`, `pekerjaan`) VALUES
(1, 'Rizkiixdgf1', '2024 09 03 05.44.47 - 449872295_1537531226975548_7379854313743856106_n.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Fullstack Web Developer1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_keahlian`
--
ALTER TABLE `tb_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_keahlian`
--
ALTER TABLE `tb_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
