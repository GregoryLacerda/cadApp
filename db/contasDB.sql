-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 12:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `contas`


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
  `vencimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tb_dividas`
--

INSERT INTO `tb_dividas` (`id`, `nome`, `tipo`, `descricao`, `dpagamento`, `valor`, `vencimento`) VALUES
(1, 'fatura', 'Internet e Telefone', 'Cartão Agatha', 'Adiantamento', '125', '2019-08-19'),
(2, 'conta tes', 'Internet e Telefone', 'varias dividas', 'Adiantamento', '126', '2019-08-19'),
(3, 'conta tes', 'Internet e Telefone', 'varias dividas', 'Adiantamento', '126', '2019-08-19');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
