-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2024 às 16:09
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
-- Banco de dados: `contador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `obs` varchar(512) DEFAULT NULL,
  `faixa1qnt` int(11) DEFAULT 0,
  `faixa1total` double(10,2) DEFAULT 0.00,
  `faixa2qnt` int(11) DEFAULT 0,
  `faixa2total` double(10,2) DEFAULT 0.00,
  `faixa3qnt` int(11) DEFAULT 0,
  `faixa3total` double(10,2) DEFAULT 0.00,
  `faixa4qnt` int(11) DEFAULT 0,
  `faixa4total` double(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `faixas`
--

CREATE TABLE `faixas` (
  `id` int(11) NOT NULL,
  `faixa1` double(10,2) DEFAULT 0.00,
  `faixa2` double(10,2) DEFAULT 0.00,
  `faixa3` double(10,2) DEFAULT 0.00,
  `faixa4` double(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `faixas`
--

INSERT INTO `faixas` (`id`, `faixa1`, `faixa2`, `faixa3`, `faixa4`) VALUES
(1, 50.00, 25.00, 16.66, 12.50);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `usu_login` varchar(256) NOT NULL,
  `usu_senha` varchar(256) NOT NULL,
  `usu_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `usu_login`, `usu_senha`, `usu_tipo`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `faixas`
--
ALTER TABLE `faixas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `faixas`
--
ALTER TABLE `faixas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
