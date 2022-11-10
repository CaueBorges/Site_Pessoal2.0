-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2022 às 11:56
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_pessoal2.0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turma` char(4) NOT NULL,
  `recado` varchar(255) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `turma`, `recado`, `ativo`) VALUES
(1, 'Luca', '2C', 'melhora isso ai', 'Y'),
(3, 'Carlos', '3C', 'bom', 'Y'),
(10, 'Torugo', '2C', 'França melhor que laranjas.#GoFRA', 'Y'),
(11, 'Felipe', '2C', 'Da para melhorar', 'Y'),
(12, 'Gustavo', '2C', 'bom', 'Y'),
(13, 'Leo', '2C', 'Tá melhor que o meu', 'Y'),
(14, 'Bruno', '2C', 'ksskssksksskkssss', 'Y'),
(15, 'jgnjreng', '1C', 'ljdfnblfdnblrfnklvg', 'N'),
(16, 'Eduardo', '2C', 'gostei do seu site', 'Y');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
