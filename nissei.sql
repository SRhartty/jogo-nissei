-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2022 às 22:28
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nissei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `resp_namorados`
--

CREATE TABLE `resp_namorados` (
  `id` int(5) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `resp1` varchar(255) NOT NULL,
  `resp2` varchar(255) NOT NULL,
  `resp3` varchar(255) NOT NULL,
  `resp4` varchar(255) NOT NULL,
  `resp5` varchar(255) NOT NULL,
  `resp6` varchar(255) NOT NULL,
  `resp7` varchar(255) NOT NULL,
  `resp8` varchar(255) NOT NULL,
  `resp9` varchar(255) NOT NULL,
  `resp10` varchar(255) NOT NULL,
  `resp11` varchar(255) NOT NULL,
  `resp12` varchar(255) NOT NULL,
  `resp13` varchar(255) NOT NULL,
  `resp14` varchar(255) NOT NULL,
  `resp15` varchar(255) NOT NULL,
  `resp16` varchar(255) NOT NULL,
  `resp17` varchar(255) NOT NULL,
  `resp18` varchar(255) NOT NULL,
  `resp19` varchar(255) NOT NULL,
  `resp20` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resp_namorados`
--
ALTER TABLE `resp_namorados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resp_namorados`
--
ALTER TABLE `resp_namorados`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
