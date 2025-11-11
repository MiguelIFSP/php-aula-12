-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2025 às 01:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_calculadora`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `memoria`
--

CREATE TABLE `memoria` (
  `id_memoria` int(11) NOT NULL,
  `numero_calculadora` int(11) NOT NULL,
  `conteudo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `memoria`
--

INSERT INTO `memoria` (`id_memoria`, `numero_calculadora`, `conteudo`) VALUES
(1, 1, 0.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `memoria`
--
ALTER TABLE `memoria`
  ADD PRIMARY KEY (`id_memoria`),
  ADD UNIQUE KEY `idx_numero_calculadora` (`numero_calculadora`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `memoria`
--
ALTER TABLE `memoria`
  MODIFY `id_memoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
