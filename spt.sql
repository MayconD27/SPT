-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/11/2023 às 16:34
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `spt`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id_pdf` bigint(20) UNSIGNED NOT NULL,
  `pdf` varchar(150) DEFAULT NULL,
  `data_bol` varchar(150) DEFAULT NULL,
  `data_atual` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `arquivos`
--

INSERT INTO `arquivos` (`id_pdf`, `pdf`, `data_bol`, `data_atual`, `id`) VALUES
(1, '../arquivos/NEWTON (1) (6).pdf', 'janeiro 2023', '2023-11-12', 2),
(2, '../arquivos/NEWTON (4).pdf', 'janeiro 2023', '2023-11-12', 2),
(3, '../arquivos/NEWTON (1) (7).pdf', 'janeiro 2023', '2023-11-12', 2),
(4, '../arquivos/NEWTON (1) (1) (1).pdf', 'janeiro 2023', '2023-11-12', 2),
(5, '../arquivos/NEWTON (1) (6).pdf', 'janeiro 2023', '2023-11-12', 2),
(6, '../arquivos/NEWTON (4).pdf', 'janeiro 2023', '2023-11-12', 2),
(7, '../arquivos/NEWTON (1) (7).pdf', 'janeiro 2023', '2023-11-12', 2),
(8, '../arquivos/NEWTON (1) (1) (1).pdf', 'janeiro 2023', '2023-11-12', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `qntDias` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` char(11) NOT NULL,
  `func` char(1) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `cidade`, `bairro`, `rua`, `qntDias`, `telefone`, `cpf`, `func`, `senha`) VALUES
(1, 'Admin', 'teste@1', '123', 'sada', 'as', 1, 's', '22', '1', '1'),
(2, 'teste', 't@1', '1', '1', '1', 1, '3123123', '17274080636', '0', '1'),
(4, 'Thiago', 't@2', '1', '1', '1', 1, '3123123', '22222222', '0', '1'),
(5, 'Maycon', 'm@1', '1', '1', '1', 1, '1', '333', '0', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id_pdf`),
  ADD UNIQUE KEY `id_pdf` (`id_pdf`),
  ADD KEY `id` (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id_pdf` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `arquivos`
--
ALTER TABLE `arquivos`
  ADD CONSTRAINT `arquivos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
