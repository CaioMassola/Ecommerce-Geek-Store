-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Jun-2020 às 22:07
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(30) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `sts` varchar(30) NOT NULL,
  `nasc` date NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `tel` int(15) NOT NULL,
  `cel` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `sts`, `nasc`, `sexo`, `tel`, `cel`, `email`, `senha`) VALUES
(1, 'Caio', 'Massola', 'Casado', '1999-07-11', 'Masculino', 59213128, 74215275, 'caio@caio', '123'),
(2, 'Amanda', 'Gomes', 'solteiro', '2020-06-04', 'Feminino', 777777, 77777, 'amanda@amanda', '123'),
(3, 'Gabi', 'Massola', 'solteiro', '2020-07-08', 'Feminino', 123, 123, 'gabi@gabi', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProd` int(11) NOT NULL,
  `nomeProd` varchar(60) NOT NULL,
  `tipoProd` varchar(60) NOT NULL,
  `quantProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProd`, `nomeProd`, `tipoProd`, `quantProd`) VALUES
(2, 'Mulher-Maravilha', 'Blusa', 5),
(45, 'a', 'a', 5),
(1, 'ca', 'a', 78),
(14, 'batman', 'calÃ§a', 45);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
