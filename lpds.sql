-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 24/05/2016 às 16:58
-- Versão do servidor: 5.5.49-0+deb8u1
-- Versão do PHP: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `lpds`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
`id` int(11) NOT NULL,
  `diretorio` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_latvian_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Fazendo dump de dados para tabela `imagens`
--

INSERT INTO `imagens` (`id`, `diretorio`, `alt`) VALUES
(1, 'imagens/news2008.jpg', 'Engenharia Elétrica UFSC, 5 estrelas no Guia do Estudante 2008'),
(2, 'imagens/news2009.jpg', 'Engenharia Elétrica UFSC, 5 estrelas no Guia do Estudante 2009'),
(3, 'imagens/news2010.jpg', 'Engenharia Elétrica UFSC, 5 estrelas no Guia do Estudante 2010'),
(4, 'imagens/news2011.jpg', 'Engenharia Elétrica UFSC, 5 estrelas no Guia do Estudante 2011'),
(5, 'imagens/news2012.jpg', 'Engenharia Elétrica UFSC, 5 estrelas no Guia do Estudante 2012'),
(6, 'imagens/maisnoticias.jpg', 'Mais notícias'),
(7, 'imagens/pesq11.jpg', 'Processamento Digital de Sinais: voz, imagens, video, sinais biomédicos'),
(8, 'imagens/pesq21.jpg', 'Filtragem Adaptativa e Processamento Estético de Sinais'),
(9, 'imagens/pesq31.jpg', 'Melhoria, Restauração, super-Resolução, Compressão de Imagens e Videos'),
(10, 'imagens/pesq41,jpg', 'Codificação de Voz e Sistemas VOIP'),
(11, 'imagens/pesq51.jpg', 'Técnicas de Comunicação através de Marcas D´àguas'),
(12, 'imagens/pesq61.jpg', 'Sistemas de Processamento Digital para auxílio e Audição'),
(13, 'imagens/pesq71.jpg', 'Controle Ativo de Ruído Acústico e Vibrações'),
(14, 'imagens/Professor.png', 'Professores'),
(15, 'imagens/Doutorando.png', 'Doutorandos'),
(16, 'imagens/Mestrando.png', 'Mestrandos'),
(17, 'imagens/Graduando.png', 'Graduandos'),
(18, 'imagens/Secretária.png', 'Secretária'),
(19, 'imagens/Ex-Doutorando.png', 'Ex-Doutorandos'),
(20, 'imagens/Ex-Mestrando.png', 'Ex-Mestrandos'),
(21, 'imagens/Ex-Graduando.png', 'Ex-Graduandos'),
(22, 'imagens/Ex-Estagiário.png', 'Ex-Estagiários'),
(23, 'imagens/logoparcerias.jpg', 'parceirias');

-- --------------------------------------------------------

--
-- Estrutura para tabela `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `diretory` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Fazendo dump de dados para tabela `images`
--

INSERT INTO `images` (`id`, `diretory`, `alt`) VALUES
(1, 'imagens/news2008.jpg', 'Eletrical Engineering at UFSC, 5 stars according to Abril´s student´s guide in 2008'),
(2, 'imagens/news2009.jpg', 'Eletrical Engineering at UFSC, 5 stars according to Abril´s student´s guide in 2009'),
(3, 'imagens/news2010.jpg', 'Eletrical Engineering at UFSC, 5 stars according to Abril´s student´s guide in 2010'),
(4, 'imagens/news2011.jpg', 'Eletrical Engineering at UFSC, 5 stars according to Abril´s student´s guide in 2011'),
(5, 'imagens/news2012.jpg', 'Eletrical Engineering at UFSC, 5 stars according to Abril´s student´s guide in 2012'),
(6, 'imagens/morenews.jpg', 'More news'),
(7, 'imagens/enpesq1.jpg', 'Digital Signal Processing for speech, image, video and biomedical signals'),
(8, 'imagens/enpesq2.jpg', 'Adaptive and Statistical Signal Processing'),
(9, 'imagens/enpesq3.jpg', 'Compression and Coding for data, speech, image and video signals'),
(10, 'imagens/enpesq4.jpg', 'Image and Video Enhancement and Super-Resolution'),
(11, 'imagens/enpesq5.jpg', 'Digital Signal Watermarking and Data Hiding'),
(12, 'imagens/enpesq6.jpg', 'Digital Signal Processing for Hearing Aids'),
(13, 'imagens/enpesq7.jpg', 'Active Control for acoustic noise and vibration'),
(14, 'imagens/Professor.png', 'Professores'),
(15, 'imagens/Doutorando.png', 'Doutorandos'),
(16, 'imagens/Mestrando.png', 'Mestrandos'),
(17, 'imagens/Graduando.png', 'Graduandos'),
(18, 'imagens/Secretária.png', 'Secretária'),
(19, 'imagens/Ex-Doutorando.png', 'Ex-Doutorandos'),
(20, 'imagens/Ex-Mestrando.png', 'Ex-Mestrandos'),
(21, 'imagens/Ex-Graduando.png', 'Ex-Graduandos'),
(22, 'imagens/Ex-Estagiário.png', 'Ex-Estagiários'),
(23, 'imagens/logoparcerias.jpg', 'parceirias');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
