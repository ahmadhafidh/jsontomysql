-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2018 pada 04.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsiatin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bencanaalam`
--

CREATE TABLE `bencanaalam` (
  `type` varchar(10) NOT NULL,
  `coordinates` text NOT NULL,
  `osm_id` int(11) NOT NULL,
  `aeroway` varchar(10) NOT NULL,
  `amenity` varchar(13) NOT NULL,
  `bridge` varchar(13) NOT NULL,
  `building` varchar(13) NOT NULL,
  `capacity` varchar(13) NOT NULL,
  `highway` text NOT NULL,
  `layer` varchar(13) NOT NULL,
  `name` text NOT NULL,
  `oneway` varchar(13) NOT NULL,
  `operator` varchar(13) NOT NULL,
  `parking` varchar(13) NOT NULL,
  `public_tra` varchar(13) NOT NULL,
  `railway` varchar(13) NOT NULL,
  `smoothness` varchar(13) NOT NULL,
  `surface` varchar(13) NOT NULL,
  `tunnel` varchar(13) NOT NULL,
  `width` varchar(13) NOT NULL,
  `z_index` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bencanaalam`
--

INSERT INTO `bencanaalam` (`type`, `coordinates`, `osm_id`, `aeroway`, `amenity`, `bridge`, `building`, `capacity`, `highway`, `layer`, `name`, `oneway`, `operator`, `parking`, `public_tra`, `railway`, `smoothness`, `surface`, `tunnel`, `width`, `z_index`) VALUES
('LineString', '112.1742644', 23783242, '', '', '', '', '', 'trunk', '', 'Jalan Raya Tuban-Widang-Babat', '', '', '', '', '', '', '', '', '', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bencanaalam`
--
ALTER TABLE `bencanaalam`
  ADD PRIMARY KEY (`osm_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
