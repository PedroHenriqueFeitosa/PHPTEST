-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/07/2023 às 18:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Contagem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Carros`
--

CREATE TABLE `Carros` (
  `idcarro` int(11) NOT NULL,
  `Carros` int(11) NOT NULL,
  `Direita` int(11) NOT NULL,
  `Esquerda` int(11) NOT NULL,
  `DataInicial` datetime NOT NULL,
  `DataFinal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Carros`
--

INSERT INTO `Carros` (`idcarro`, `Carros`, `Direita`, `Esquerda`, `DataInicial`, `DataFinal`) VALUES
(1, 1, 30, 30, '2023-07-03 14:03:11', '2023-07-03 15:10:11'),
(2, 150, 50, 50, '2023-07-03 14:03:49', '2023-07-03 16:30:45'),
(3, 150, 50, 60, '2023-06-29 00:00:00', '2020-06-29 12:00:00'),
(4, 135, 53, 68, '2023-07-04 09:35:00', '2023-07-04 10:35:00'),
(5, 135, 25, 90, '2023-07-04 08:00:00', '2023-07-04 08:50:00'),
(6, 135, 30, 50, '2023-07-04 08:50:00', '2023-07-11 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Carros`
--
ALTER TABLE `Carros`
  ADD PRIMARY KEY (`idcarro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Carros`
--
ALTER TABLE `Carros`
  MODIFY `idcarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
