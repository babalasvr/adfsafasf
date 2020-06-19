-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2017 às 15:17
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(10) UNSIGNED NOT NULL,
  `user` varchar(30) NOT NULL,
  `senha` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `user`, `senha`) VALUES
(1, 'adm', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nome_evento` varchar(30) NOT NULL,
  `desc_evento` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  `localizacao` varchar(30) NOT NULL,
  `preco` double(9,2) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `classificacao` int(11) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `local_vendas` varchar(120) NOT NULL,
  `imagem_evento` varchar(180) NOT NULL,
  `tempo_anuncio` int(11) NOT NULL,
  `regiao_evento` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `id_usuario`, `nome_evento`, `desc_evento`, `data`, `localizacao`, `preco`, `tipo`, `classificacao`, `contato`, `local_vendas`, `imagem_evento`, `tempo_anuncio`, `regiao_evento`) VALUES
(2, 1, 'a', 'asdasdasda', '2017-10-31', 'asdasd', 10.00, 'a', 18, '11234-5446', 'asdasd', 'bg4.png', 7, 'Venda Nova'),
(3, 1, 'c', 'qwewqe', '2017-10-29', 'asdasd', 14.00, 'c', 15, '12312', 'asd', 'bg4.png', 7, 'Pampulha'),
(4, 1, 'asdsad', 'xzcc', '2017-10-24', 'asd', 23.00, 'asdasd', 22, '12343-4332', 'asdasd', '72be2763ac504a4bfc2c78b94c984845.jpg', 30, 'Pampulha'),
(6, 1, 'Cotocoweed', 'ReuniÃ£o dos ex-alunos coteweed', '2017-10-31', 'Venda Nova', 15.00, 'Resenha', 16, '93221-4532', 'Bairro Floresta', 'COTOCO.png', 30, 'Centro'),
(8, 1, 'role na pamps', 'asdasd', '2017-10-31', 'pampulha', 10.00, 'role', 14, '12324-1234', 'pampulha', '2bfd04cba90aa546e529c71580eb3ef0.jpg', 60, 'Centro'),
(9, 1, 'poi', 'qweqwe', '2017-10-24', 'poio', 290.00, 'poi', 28, '2312', 'poio', 'ab192edf8a9e607cd81c636c59d3c2b5.png', 30, 'Barreiro'),
(10, 1, 'poi', 'asdasd', '2017-10-31', 'poasidapsoid', 10.00, 'poi', 18, '1293', 'asdksad', '95191c87949e1df27ffe97ca67e9605f.png', 7, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `first` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `first`, `email`, `uid`, `pwd`) VALUES
(1, 'a', 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
