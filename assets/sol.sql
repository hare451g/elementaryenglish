-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2016 at 12:13
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elementary_english`
--

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `sol_index` int(3) NOT NULL,
  `sol_kelas` varchar(3) NOT NULL,
  `sol_isi` text NOT NULL,
  `sol_pilA` text NOT NULL,
  `sol_pilB` text NOT NULL,
  `sol_pilC` text NOT NULL,
  `sol_pilD` text NOT NULL,
  `sol_jawaban` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`sol_index`, `sol_kd_mat`, `sol_isi`, `sol_pilA`, `sol_pilB`, `sol_pilC`, `sol_pilD`, `sol_jawaban`) VALUES
(1, 'vdo1A', 'Human talks with their . . .', 'Ears', 'Foots', 'Mouth', 'hands', 'C'),
(2, 'vdo1A', 'Human can hear music using . . .', 'Mouth', 'Ear', 'Foot', 'Stomach', 'B'),
(3, 'vdo1A', 'Human using . . . for walking.', 'foot', 'hands', 'knee', 'hips', 'A'),
(4, 'vdo1A', 'Human needs their . . . for breath', 'breath', 'mouth', 'nose', 'stomach', 'C'),
(5, 'vdo1A', 'Budi chewing gum with his . . .', 'teeth', 'mouth', 'stomach', 'hands', 'A'),

(6, 'vdo2A', '1 2 . . . 4 ', 'three', 'seven', 'eight', 'four', 'A'),
(7, 'vdo2A', '5 That number is . . . ', 'six', 'eight', 'nine', 'Five', 'D'),
(8, 'vdo2A', 'My phone number is two-four-eight-one-one', '24881', '25811', '24811', '25188', 'C'),
(9, 'vdo2A', "<img src='/assets/gambar/soal/vdo2A_sol_pic1.jpg'> <br> There are ... candies ", 'two', 'three', 'four', 'five', 'C'),
(10, 'vdo2A', "<img src='/assets/gambar/soal/vdo2A_sol_pic1.jpg'> <br>Diana have . . . colorful teddy bears ", 'seven', 'eight', 'nine', 'ten', 'A');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`sol_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `sol_index` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
