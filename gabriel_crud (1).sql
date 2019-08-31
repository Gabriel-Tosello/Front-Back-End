-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Ago-2019 às 04:08
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gabriel_noticia`
--

INSERT INTO `gabriel_noticia` (`id_noticia`, `titulo`, `slug`, `descricao`, `chaves`, `conteudo`) VALUES
(1, 'Teste', 'isso-e-um-teste', 'Apenas um teste', 'teste', ''),
(2, '', '', '', '', ''),
(3, 'Mais novo titulo', 'novo-titulo', 'Ã© diferente', 'novo teste', 'Incrivel este arquivo  '),
(4, 'Novos transportes', '', 'Grandes transportes de massa sÃ£o adquiridos pela frota estelar ao encontro em Saturno', 'Transporte', '        ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
