-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Nov-2021 às 19:03
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
-- Database: `Aula7`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Produtos`
--

DROP TABLE IF EXISTS `Produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(20) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `altura` int(20) NOT NULL,
  `largura` int(20) NOT NULL,
  `profundidade` int(20) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `codigo de barras` varchar(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Produtos`
--

INSERT INTO `Produtos` (`codigo`, `nome`, `preco`, `quantidade`, `descricao`, `altura`, `largura`, `profundidade`, `peso`, `fabricante`, `codigo de barras`) VALUES
(1, 'AI 20', '2500.00', 50, 'Celular top de linha ', 20, 10, 5, '250.00', 'Sumsang', 'df546y'),
(2, 'Water Fone', '1000.00', 20, 'Fone resistente a agua', 3, 2, 2, '50.00', 'Xaiome', 'has844'),
(3, 'BatPort', '500.00', 30, 'Carregador Portatil', 10, 7, 3, '250.00', 'Rolmotola', 'jhar789vbg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
