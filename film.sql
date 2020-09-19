-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 07:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040102`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `tgl_rilis` varchar(30) NOT NULL,
  `kel_usia` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `gambar`, `genre`, `tgl_rilis`, `kel_usia`) VALUES
(1, 'Avengers: Endgame', 'Avengers.jpg', 'Action, Adventure, Science Ficttion', '03 Mei 2019', '13+'),
(2, 'Spiderm-Man: Far From Home', 'Spiderman.jpg', 'Action', '03 Juli 2019', '13+'),
(3, 'Captain Marvel', 'captain.png', 'Action', '06 Maret 2019', '13+'),
(4, 'Shazam!', 'Shazam.jpg', 'Action, Science Ficttion', '01 Mei 2019', '13+'),
(5, 'Fast and Furious Presents: Hobbs and Shaw', 'hob.jpg', 'Action', '26 Juli 2019', '13+'),
(6, 'John Wick: Chapter 3 - Parabellum', 'JohnWick3.jpg', 'Action', '17 Mei 2019', '17+'),
(7, 'Joker', 'joker.jpg', 'Action, Adventure, Fantasy, Crime', '09 oktober 2019', '17+'),
(8, 'It: Chapter 2', 'it.jpg', 'Horror', '06 September 2019', 'SU'),
(9, 'Toy Story 4', 'toys4.jpg', 'Adventure, Animaiton', '21 Juni 2019', 'SU'),
(10, 'Frozen 2', 'Frozen2.jpg', 'Adventure, Animation', '27 November 2019', 'SU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
