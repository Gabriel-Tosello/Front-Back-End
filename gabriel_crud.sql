-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Ago-2019 às 00:45
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gabriel_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gabriel_noticia`
--

DROP TABLE IF EXISTS `gabriel_noticia`;
CREATE TABLE IF NOT EXISTS `gabriel_noticia` (
  `id_noticia` int(5) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `descricao` varchar(140) NOT NULL,
  `chaves` varchar(60) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gabriel_noticia`
--

INSERT INTO `gabriel_noticia` (`id_noticia`, `titulo`, `slug`, `descricao`, `chaves`, `conteudo`) VALUES
(1, 'Teste', 'isso-e-um-teste', 'Apenas um teste', 'teste', ''),
(2, 'Teste', 'isso-e-um-teste', 'Apenas um teste', 'teste', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
