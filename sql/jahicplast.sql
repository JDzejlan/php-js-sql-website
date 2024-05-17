-- phpMyAdmin SQL Dump
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 9, 2024 at 09:26 AM
-- Server version: 10.4.21-MariaDB

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `jahicplast`
-- Table structure for table `registrovani`
--

CREATE TABLE `registrovani` (
  `korisnik` varchar(64) NOT NULL DEFAULT 'korisnik',
  `email` varchar(128) NOT NULL,
  `sifra` varchar(64) NOT NULL DEFAULT '',
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`korisnik`, `email`, `sifra`, `admin`) VALUES
('dzejlan', 'jahicdzejlan@gmail.com', 'dzejlan123', 1),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projekti`
--
COMMIT;

