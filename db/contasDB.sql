-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 02:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dividas`
--

CREATE TABLE `tb_dividas` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `dpagamento` varchar(255) COLLATE utf8_bin NOT NULL,
  `valor` decimal(20,0) NOT NULL,
  `vencimento` date NOT NULL,
  `atraso` varchar(30) COLLATE utf8_bin NOT NULL,
  `parcelas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_dividas`
--

INSERT INTO `tb_dividas` (`id`, `nome`, `tipo`, `descricao`, `dpagamento`, `valor`, `vencimento`, `atraso`, `parcelas`) VALUES
(13, 'GREGORY LACERDA BATISTA', 'Cartão de Credito', 'Cartão Agatha', 'Final do Mês', '123', '2019-09-08', 'não atrasado', 4),
(14, 'Spotify', 'Cartão de Credito', 'Anuidade Spotify', 'Adiantamento', '15', '2019-09-15', 'não atrasado', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dividas`
--
ALTER TABLE `tb_dividas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dividas`
--
ALTER TABLE `tb_dividas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
