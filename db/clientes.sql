-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Fev-2023 às 23:04
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cacadordepreco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(6) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `login` varchar(40) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `login`, `senha`, `email`, `celular`, `data_nasc`, `cpf_cnpj`, `tipo_usuario`, `estado`, `cidade`, `bairro`, `status`) VALUES
(2, 'Matheus Eloim ', 'eloim', '07f932a8aea702a8f55db851eed14bad', NULL, NULL, '22/12/1992', '10898783461', 'pessoa_fisica', 'pernambuco', 'recife', 'boa viagem', '1'),
(7, 'CLEISSON COSMO DA SILVA', 'cleisson', 'e7d80ffeefa212b7c5c55700e4f7193e', NULL, NULL, '22/12/1992', '108.987.834-61', 'pessoa_fisica', 'Pernambuco', 'Recife', 'Bongi', '1'),
(8, 'CleissonC', 'CleissonC', 'd0a0a557a60b10e1be9e6753ffa4d8f1', 'cleisson@gmail.com', '(11)1.1111-1111', '11/11/1111', '111.111.111-11', 'pessoa_fisica', 'Pernambuco', 'Camaragibe', 'Bongi', '1'),
(9, 'ryan', 'Ryan123', '2bc0bb0ba587dd7e1f2edcdf8694d10d', 'cleissoncosmodasilva@gmail.com', '(11)1.1111-1111', '11/11/1111', '111.111.111-11', 'fisica', 'Pernambuco', 'Recife', 'Bongi', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
