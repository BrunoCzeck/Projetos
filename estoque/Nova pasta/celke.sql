-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/10/2016 às 21:24
-- Versão do servidor: 5.7.11
-- Versão do PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias_post`
--

CREATE TABLE `categorias_post` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categorias_post`
--

INSERT INTO `categorias_post` (`id`, `nome_categoria`) VALUES
(1, 'Informatica'),
(2, 'Esporte');

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `sub_categorias_post_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `post`
--

INSERT INTO `post` (`id`, `titulo`, `sub_categorias_post_id`) VALUES
(1, 'Jogo do Brasil', 8),
(2, 'Jogo do Brasil', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sub_categorias_post`
--

CREATE TABLE `sub_categorias_post` (
  `id` int(11) NOT NULL,
  `nome_sub_categoria` varchar(220) NOT NULL,
  `categorias_post_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sub_categorias_post`
--

INSERT INTO `sub_categorias_post` (`id`, `nome_sub_categoria`, `categorias_post_id`) VALUES
(1, 'Curso de PHP', 1),
(2, 'Curso de HTML', 1),
(3, 'Curso de JavaScript', 1),
(4, 'Curso de CakePHP', 1),
(5, 'Curso de Laravel ', 1),
(6, 'Futebol', 2),
(7, 'Volei de praia', 2),
(8, 'Basquete', 2);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias_post`
--
ALTER TABLE `categorias_post`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sub_categorias_post`
--
ALTER TABLE `sub_categorias_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias_post`
--
ALTER TABLE `categorias_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `sub_categorias_post`
--
ALTER TABLE `sub_categorias_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
