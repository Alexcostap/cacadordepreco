-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2023 às 01:10
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) NOT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `categoria_produto` varchar(40) NOT NULL,
  `nome_produto` varchar(200) NOT NULL,
  `preco_produto` int(10) NOT NULL,
  `descricao_produto` varchar(800) NOT NULL,
  `estado_produto` varchar(50) NOT NULL,
  `cidade_produto` varchar(50) NOT NULL,
  `bairro_produto` varchar(50) NOT NULL,
  `mercado_produto` varchar(100) NOT NULL,
  `caminho_img` varchar(300) NOT NULL,
  `data_de_cadastro` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_cliente`, `categoria_produto`, `nome_produto`, `preco_produto`, `descricao_produto`, `estado_produto`, `cidade_produto`, `bairro_produto`, `mercado_produto`, `caminho_img`, `data_de_cadastro`) VALUES
(1, 2, '', 'Biscoito Treloso', 0, 'Biscoito, baratinho e gostosinho ><', 'Pernambuco', 'Recife', 'Mustardinha', 'Extra bom', 'imagens/produto/biscoito_treloso.png', NULL),
(2, 2, 'mercado', 'a', 800, 'biscoito nham nham', '', 'recife', 'bongi', 'Casa do seu pai', 'imagens/produtos/produto1.png', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;