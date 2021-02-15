-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2021 às 08:36
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `marvel`
--

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `characters`
--

INSERT INTO `characters` (`id`, `name`, `description`, `modified`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Homem-Aranha', 'QUadrinho do homem aranha', '2021-02-01', 'teste', '2021-02-01 06:25:49', '2021-02-08 06:25:49'),
(2, 'Hulk', 'Hulk personagem', '2021-02-02', 'teste', '2021-02-16 06:48:07', '2021-02-17 06:48:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comics`
--

--
-- Extraindo dados da tabela `comics`
--

INSERT INTO `comics` (`id`, `title`, `issueNumber`, `variantDescription`, `description`, `format`, `pageCount`, `textObjects`, `resourceURI`, `modified`, `thumbnail`, `character_id`, `created_at`, `updated_at`) VALUES
(1, 'Amazing Spider man', '1', 'Não existe', 'teste', 'Capa Dura', 200, 'teste', 'teste', '2021-02-01', 'teste', 1, '2021-02-01 06:25:49', '2021-02-08 06:25:49'),
(2, 'O Poderoso Hulk', '1', 'nenhuma', 'QUadrinho do Hulk', 'Capa dura', 200, 'teste', NULL, '2021-02-02', 'teste', 2, '2021-02-24 06:48:45', '2021-02-16 06:48:45');

-- --------------------------------------------------------


--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `start`, `end`, `thumbnail`, `character_id`, `created_at`, `updated_at`) VALUES
(1, 'O mundo contra Hulk', 'Guerra dos vingadores contra o Hulk', 'O poderoso Hulk 1', 'Continuando', 'nenhuma', 2, '2021-02-15 06:50:00', '2021-02-16 06:50:00');

-- --------------------------------------------------------



INSERT INTO `series` (`id`, `title`, `description`, `startYear`, `endYear`, `rating`, `modified`, `thumbnail`, `character_id`, `created_at`, `updated_at`) VALUES
(1, 'O dia que o Duende Vede matou Gwen', 'Duende verde mata gwen stacy', '2020', '2021', '4', '2021-02-02', 'teste', 1, '2021-02-15 06:51:03', '2021-02-16 06:51:03');

-- --------------------------------------------------------


--
-- Extraindo dados da tabela `stories`
--

INSERT INTO `stories` (`id`, `title`, `description`, `type`, `modified`, `thumbnail`, `character_id`, `created_at`, `updated_at`) VALUES
(1, 'História do homem aranha', 'História do homem aranha', 'teste', '2021-02-02', 'História do homem aranha', 1, '2021-02-01 06:25:49', '2021-02-08 06:25:49'),
(2, 'História do Hulk', 'História do Hulk', 'teste', '2021-02-03', 'História do Hulk', 2, '2021-02-15 06:52:15', '2021-02-09 06:52:15');

-- --------------------------------------------------------

