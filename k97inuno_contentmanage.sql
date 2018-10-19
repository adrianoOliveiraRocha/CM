-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2018 at 08:38 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k97inuno_contentmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `description` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `description`, `image`) VALUES
(1, 'Primeiro Banner			', '1537208728slider-01.jpg'),
(2, '            Impressões em grandes formatos\r\n            \r\n            \r\n            ', '1537790126BANNER IMPRESSÃO - 02.png'),
(3, 'Sublimação 160cm mimaki\r\n            \r\n            ', '1537790006POST SUBLIMAÇÃO TAM 01.png'),
(5, '            Eleições 20018					\r\n            ', '1537789906BANNER POLITICA -02.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Banners'),
(2, 'Foto Moldura '),
(3, 'Adesivos'),
(5, 'Placas / Faixadas / ACM'),
(6, 'Panfletos / Folders'),
(7, 'Cartão De Visitas '),
(8, 'Impressão A3 e A4 (Laser) '),
(9, 'Backdrop'),
(10, 'Bandeiras'),
(11, 'Camisas Personalizadas '),
(12, 'Capa Carnê'),
(13, 'Cardápios'),
(15, 'Cartazes'),
(16, 'Certificados'),
(17, 'Calendários'),
(18, 'Convites'),
(19, 'Crachá'),
(20, 'Envelopes'),
(21, 'Fichas'),
(23, 'Imã De Geladeira '),
(24, 'Marcador De Página '),
(25, 'Pastas'),
(26, 'Placa de Avisos PVC'),
(27, 'Posters '),
(28, 'Receituários'),
(29, 'Revistas'),
(30, 'Missais'),
(31, 'Timbrados'),
(32, 'Foto Escultura Pvc '),
(33, 'Envelopamento'),
(34, 'Adesivação de Ambientes '),
(35, 'Calendários'),
(36, 'Xerox / impressão / Encadernação / Plastificação'),
(39, 'Impressão Jato de Tinta'),
(40, 'Adesivo com corte redondo');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `neighborhood` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `neighborhood`, `value`) VALUES
(6, 'Antônio Bezerra - Fortaleza', 'R$ 15,00'),
(7, 'Jurema - Caucaia', 'R$ 10,00'),
(8, 'Conjunto Ceará - Fortaleza', 'R$ 15,00'),
(9, 'Caucaia Centro', 'R$ 15,00'),
(10, 'Icaraí - Caucaia', 'R$ 20,00'),
(11, 'Cumbuco Caucaia', 'R$ 25,00'),
(12, 'Aldeota - Fortaleza', 'R$ 20,00'),
(13, 'Messejana', 'R$ 30,00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `value` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `value`, `description`, `image`) VALUES
(1, 1, '50,00', '            Banner em lona. Tamanho: 60x90cm. com madeira e cordão. Arte simples inclusa. Prazo de produção: 24hs. \r\n            \r\n            \r\n            \r\n            ', '153727396701.jpg'),
(2, 1, '39,90', 'Banner Universitário em lona. Tamanho: 90x120cm. com madeira e cordão. Entrega no mesmo dia. Não incluso arte\r\n            \r\n            \r\n            \r\n            ', '1537791739BANNER PROMOÇÃO 90X120.jpg'),
(3, 1, '60,00', 'Banner Universitário em lona. Tamanho: 90x120cm. com madeira e cordão. Entrega mesmo dia. Com arte da gráfica.\r\n            \r\n            \r\n            \r\n            \r\n            \r\n            \r\n            \r\n            ', '1537791778BANNER PROMOÇÃO 90X120.jpg'),
(4, 1, '70,00', 'Banner em lona. Tamanho: 120x90cm. com madeira e cordão. Arte simples inclusa. Prazo de produção: 24hs.	\r\n            \r\n            \r\n            \r\n            ', '1537793125banner 90x120.jpg'),
(5, 2, '50,00', 'Foto Moldura 50x70cm. em lona com estrutura de metalon. Entrega 24hs.						\r\n            \r\n            ', '1537274666ftm01.jpg'),
(6, 2, '60,00', '            Foto Moldura 60x80cm. em lona com estrutura de metalon. Entrega 24hs.\r\n            ', '1537274776ftm02.jpg'),
(7, 2, '70,00', 'Foto Moldura 70x90cm. em lona com estrutura de metalon. Entrega 24hs.				\r\n            \r\n            ', '1537274862ftm03.jpg'),
(8, 2, '80,00', 'Foto Moldura 70x100cm. em lona com estrutura de metalon. Entrega 24hs.			\r\n            ', '1536607739img_modelo_produtos.jpg'),
(9, 3, '1,00', '            Adesivo 01 - Descrição do produto.					\r\n            ', '1537275093ades01.jpg'),
(10, 3, '1,00', '            Adesivo 02 - Descrição do produto.					\r\n            ', '1537275136ades02.jpg'),
(11, 3, '1,00', 'Adesivo 03 - Descrição do produto.					\r\n            \r\n            ', '1537275186ades03.jpg'),
(12, 3, '170,00', 'Adesivo para freezer pequeno 100x70x80cm.\r\n            \r\n            \r\n            ', '1537275324ades05.jpg'),
(24, 9, '80,00', '            Backdrop - Tamanho 120x120cm: Lona com ilhois.  Entrega 24hs				\r\n            \r\n            ', '1537275590back01.jpg'),
(25, 9, '120,00', '            Backdrop - Tamanho 150x150cm: Lona com ilhois. Entrega 24hs				\r\n            \r\n            ', '1537275632back03.jpg'),
(26, 9, '220,00', '            Backdrop - Tamanho 200x200cm: Lona com ilhois. Entrega 24hs				\r\n            \r\n            ', '1537275697back02.jpg'),
(27, 5, '100,00', 'Placa tamanho 1x1m, estrutura em metalon galvanizado, lona impressão solvente durabilidade externa 2 anos, incluso arte simples. Instalação à consultar.	 				\r\n            ', '15379958141536607739img_modelo_produtos.jpg'),
(28, 5, '200,00', 'Placa tamanho 2x1m, estrutura em metalon galvanizado, lona impressão solvente durabilidade externa 2 anos, incluso arte simples. Instalação à consultar.', '15379960391536607739img_modelo_produtos.jpg'),
(29, 5, '300,00', 'Placa tamanho 3x1m, estrutura em metalon galvanizado, lona impressão solvente durabilidade externa 2 anos, incluso arte simples. Instalação à consultar.		\r\n            ', '15379960801536607739img_modelo_produtos.jpg'),
(30, 6, '50,00', '            Panfletos Colorido 1.000unds. Tamanho 10x15 Papel Comum. Entrega 24hs. Arte simples inclusa.\r\n            ', '1537276471panf01.jpg'),
(31, 6, '200,00', '                        Panfletos colorido 5.000unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.\r\n            \r\n            ', '15378126153B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(32, 6, '250,00', 'Panfletos colorido 5.000unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.', '1537277690panf03.jpg'),
(33, 6, '350,00', '            Panfletos colorido 5.000unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.\r\n            ', '15378126007F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(34, 6, '30,00', 'Panfletos Preto e Branco 1.000unds. Tamanho 10x15 Papel Comum. Entrega mesmo dia.', '1537277740panf05.jpg'),
(35, 7, '20,00', 'Cartão de visita 100und. Impressão Laser colorido frente. Papel Couchê 300g. Entrega mesmo dia. Arte simples inclusa. 					\r\n            ', '1537279203card01.jpg'),
(36, 7, '120,00', '            Cartão de visita 1.000und. Colorido Frente e Verso. Verniz Brilho Total. Papel Couchê 300g. Entrega 5 dias uteis.', '1537279232card02.jpg'),
(37, 7, '180,00', 'Cartão de visita 2.000und. Colorido Frente e Verso. Verniz Brilho Total. Papel Couchê 300g. Entrega 5 dias uteis.', '1537279258card03.jpg'),
(39, 7, '200,00', 'Cartão de visita 3.000und. Colorido Frente e Verso. Verniz Brilho Total. Papel Couchê 250g. Entrega 6 dias uteis.', '1537279308card04.jpg'),
(40, 8, '5,00', '            A3 Laser - Somente impressão. Tamanho: 30x47cm. Quantidade: 1					\r\n            ', '1537279564a301.jpg'),
(41, 8, '45,00', 'A3 Laser - Somente impressão. Tamanho: 30x47cm. Quantidade: 10', '1537279581a302.jpg'),
(42, 8, '80,00', 'A3 Laser - Somente impressão. Tamanho: 30x47cm. Quantidade: 20', '1537279596a303.jpg'),
(43, 8, '175,00', 'A3 Laser - Somente impressão. Tamanho: 30x47cm. Quantidade: 50', '1537279610a304.jpg'),
(44, 10, '179,00', 'Bandeira tamanho 50x70 - 10und.	Prazo de entrega 5 dias uteis.						\r\n            ', '1537279791band01.jpg'),
(45, 10, '845,00', 'Bandeira tamanho 50x70 - 50und.	Prazo de entrega 5 dias uteis.	', '1537279818band02.jpg'),
(46, 10, '1590,00', 'Bandeira tamanho 50x70 - 100und. Prazo de entrega 5 dias uteis.	\r\n            \r\n            ', '1537279882band03.jpg'),
(47, 10, '209,00', 'Bandeira tamanho 100x70 - 10und. Prazo de entrega 5 dias uteis.	', '1537279899band04.jpg'),
(48, 10, '995,00', 'Bandeira tamanho 100x70 - 50und. Prazo de entrega 5 dias uteis.', '1537279941band05.jpg'),
(49, 10, '1890,00', 'Bandeira tamanho 100x70 - 100und. Prazo de entrega 5 dias uteis.					\r\n            ', '1537279960band06.jpg'),
(50, 11, '200,00', '            Camisetas personalizadas, impressão localizada só frente. Quantidade 10 unds. Entrega 2 dias uteis.						\r\n            \r\n            ', '1537280137cam01.jpg'),
(51, 11, '380,00', '            Camisetas personalizadas, impressão localizada só frente. Quantidade 20 unds. Entrega 2 dias uteis.\r\n            ', '1537280160cam02.jpg'),
(52, 11, '900,00', '                        Camisetas personalizadas, impressão localizada só frente. Quantidade 50 unds. Entrega 3 dias uteis.        \r\n            \r\n            ', '1537280188cam03.jpg'),
(53, 11, '1600,00', '                        Camisetas personalizadas, impressão localizada só frente. Quantidade 100 unds. Entrega 5 dias uteis.  \r\n            \r\n            ', '1537280203cam04.jpg'),
(54, 11, '280,00', '            Camisetas personalizadas, impressão total. Quantidade 10 unds. Entrega 5 dias uteis.   \r\n            ', '15380717611536607739img_modelo_produtos.jpg'),
(55, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280413carn01.jpg'),
(56, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280429carn02.jpg'),
(57, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280446carn03.jpg'),
(58, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280460carn04.jpg'),
(59, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280475carn05.jpg'),
(60, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280488carn06.jpg'),
(61, 12, '1,00', 'Capa de carnê - Descrição do produto						', '1537280503carn07.jpg'),
(63, 13, '1,00', 'Cardápio - Descrição do produto				', '1537280734cardap01.jpg'),
(64, 13, '1,00', 'Cardápio - Descrição do produto							', '1537280749cardap02.jpg'),
(65, 13, '1,00', 'Cardápio - Descrição do produto							', '1537280762cardap03.jpg'),
(66, 13, '1,00', '            Cardápio - Descrição do produto							\r\n            ', '1537280863cardap06.jpg'),
(67, 13, '1,00', 'Cardápio - Descrição do produto							', '1537280791cardap04.jpg'),
(68, 13, '1,00', 'Cardápio - Descrição do produto							', '1537280804cardap05.jpg'),
(69, 13, '1,00', 'Cardápio - Descrição do produto							', '1537280816cardap07.jpg'),
(70, 1, '30,00', 'Banner em lona. Tamanho: 50x70cm. Madeira e cordão. Prazo de entrega: Mesmo dia. Com Arte.\r\n            ', '1537793292banner 50x70.jpg'),
(71, 1, '25,00', 'Banner Universitário em Papel Tamanho: 90x120cm. com madeira e cordão. Entrega no mesmo dia. Não incluso arte\r\n            ', '1537792377BANNER PROMOÇÃO 90X120.jpg'),
(72, 1, '45,00', 'Banner Universitário de Papel Tamanho: 90x120cm. com madeira e cordão. Entrega mesmo dia. Com arte da gráfica.				\r\n            \r\n            \r\n            ', '1537792451BANNER PROMOÇÃO 90X120.jpg'),
(73, 1, '90,00', 'Banner em lona. Tamanho: 100x150cm. Madeira e cordão. Entrega: Mesmo dia. Arte simples inclusa.					\r\n            \r\n            \r\n            ', '1537793740banner 100x150.jpg'),
(74, 1, '60,00', 'Banner em lona. Tamanho: 70X100cm. Madeira e cordão. Entrega mesmo dia. Com Arte simples inclusa.			\r\n            ', '1537794042banner 70X100.jpg'),
(75, 1, '65,00', 'Banner em lona. Tamanho: 80X100cm. Madeira e cordão. Entrega no mesmo dia. Com Arte simples inclusa.					\r\n            \r\n            ', '1537794381banner 80X100.jpg'),
(76, 1, '120,00', '            Banner em lona. Tamanho: 200x100cm. Madeira e cordão. Entrega: 24hs. Com Arte simples inclusa.					\r\n            \r\n            ', '1537794600banner 200x100.jpg'),
(77, 1, '100,00', '            Banner em lona. Tamanho: 200x80cm. Madeira e cordão. Entrega: 24hs. Com Arte simples inclusa.					\r\n            ', '1537795178banner 200x80.jpg'),
(78, 1, '70,00', 'Faixa / Banner em lona. Tamanho: 200x60cm. Madeira e cordão. Entrega: 24hs. Com Arte	simples inclusa.				\r\n            ', '1537795744Faixa banner 200x60.jpg'),
(79, 1, '100,00', 'Faixa / Banner em lona. Tamanho: 300x60cm. Madeira e cordão. Entrega: 24hs. Com Arte simples inclusa.					\r\n            ', '1537797033Faixa banner 300x60.jpg'),
(80, 9, '250,00', '            Backdrop - Tamanho 200x250cm: Lona com ilhois. Entrega 24hs					\r\n            ', '1537808474drop1.jpg'),
(81, 9, '320,00', '            Backdrop - Tamanho 250x250cm: Lona com ilhois. Entrega 24hs					\r\n            ', '1537808508drop.jpg'),
(82, 9, '450,00', '            Backdrop - Tamanho 300x300cm: Lona com ilhois. Entrega 24hs					\r\n            ', '1537808546drop2.jpg'),
(83, 25, '1490,00', 'Pasta com Bolsa Couchê 250g Tamanho 31x45 cm - 4x0cor - UV Total Frente. 1000 und. Prazo de entrega 10 dias uteis.				\r\n            ', '1537809155pastas.png'),
(84, 7, '200,00', '            Cartão de visita 1.000und. Colorido Frente e Verso. Laminação Fosca e Verniz localizado. Papel Couchê 300g. Entrega 7 dias uteis.					\r\n            ', '1537809945cartão laminação fosca.jpg'),
(85, 2, '90,00', '            Foto Moldura 80x100cm. em lona com estrutura de metalon. Entrega 24hs.					\r\n            ', '15378103861536607739img_modelo_produtos.jpg'),
(86, 2, '110,00', '            Foto Moldura 90x120cm. em lona com estrutura de metalon. Entrega 24hs.					\r\n            ', '15378104071536607739img_modelo_produtos.jpg'),
(87, 6, '400,00', '            Panfletos colorido 5.000unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					\r\n            ', '15378124461537277718panf04.jpg'),
(88, 6, '130,00', 'Panfletos colorido 1.000unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378126903B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(89, 6, '150,00', 'Panfletos colorido 2.500unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378127203B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(90, 6, '340,00', 'Panfletos colorido 10.000unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378127683B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(91, 6, '570,00', 'Panfletos colorido 20.000unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378127873B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(92, 6, '780,00', 'Panfletos colorido 30.000unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378128183B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(93, 6, '1230,00', 'Panfletos colorido 50.000unds. Tamanho 10x15 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378128363B155868-A0B5-493E-8D3B-C2DE05CE470D.jpg'),
(94, 6, '160,00', 'Panfletos colorido 1.000unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378129051537277690panf03.jpg'),
(95, 6, '190,00', 'Panfletos colorido 2.500unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378129361537277690panf03.jpg'),
(96, 6, '420,00', 'Panfletos colorido 10.000unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378130171537277690panf03.jpg'),
(97, 6, '650,00', 'Panfletos colorido 20.000unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378130471537277690panf03.jpg'),
(98, 6, '1000,00', 'Panfletos colorido 30.000unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378130741537277690panf03.jpg'),
(99, 6, '1550,00', 'Panfletos colorido 50.000unds. Tamanho 10x15 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378130941537277690panf03.jpg'),
(100, 6, '180,00', 'Panfletos colorido 1.000unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378133557F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(101, 6, '210,00', 'Panfletos colorido 2.500unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.				', '15378133917F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(102, 6, '580,00', 'Panfletos colorido 10.000unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378134517F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(103, 6, '1060,00', 'Panfletos colorido 20.000unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378134747F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(104, 6, '1650,00', 'Panfletos colorido 30.000unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378135167F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(105, 6, '2500,00', 'Panfletos colorido 50.000unds. Tamanho 15x21 só frente Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378135357F3DDC0D-FCDD-482F-B4D4-2E608EEF6B24.jpg'),
(106, 6, '190,00', 'Panfletos colorido 1.000unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378135801537277718panf04.jpg'),
(107, 6, '220,00', 'Panfletos colorido 2.500unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378136191537277718panf04.jpg'),
(108, 6, '600,00', 'Panfletos colorido 10.000unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378136561537277718panf04.jpg'),
(109, 6, '1120,00', 'Panfletos colorido 20.000unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378136831537277718panf04.jpg'),
(110, 6, '1650,00', 'Panfletos colorido 30.000unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378137091537277718panf04.jpg'),
(111, 6, '3700,00', 'Panfletos colorido 50.000unds. Tamanho 15x21 frente e verso Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378137371537277718panf04.jpg'),
(112, 6, '320,00', 'Folder A4 colorido. Só frente. 1.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378138993492502C-1170-4508-A7BD-7419379A4EDF.jpg'),
(113, 6, '370,00', 'Folder A4 colorido. Só frente. 2.500unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.						', '15378139603492502C-1170-4508-A7BD-7419379A4EDF.jpg'),
(114, 6, '650,00', 'Folder A4 colorido. Só frente. 5.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.						', '15378139863492502C-1170-4508-A7BD-7419379A4EDF.jpg'),
(115, 6, '1100,00', 'Folder A4 colorido. Só frente. 10.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.						', '15378140063492502C-1170-4508-A7BD-7419379A4EDF.jpg'),
(116, 6, '1990,00', 'Folder A4 colorido. Só frente. 20.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378140293492502C-1170-4508-A7BD-7419379A4EDF.jpg'),
(117, 6, '350,00', 'Folder A4 colorido. Frente e verso. 1.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.						', '15378141106C9792CE-359D-4E60-A9D5-7934A55A8E46.jpg'),
(118, 6, '390,00', 'Folder A4 colorido. Frente e verso. 2.500unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378141466C9792CE-359D-4E60-A9D5-7934A55A8E46.jpg'),
(119, 6, '690,00', 'Folder A4 colorido. Frente e verso. 5.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378142026C9792CE-359D-4E60-A9D5-7934A55A8E46.jpg'),
(120, 6, '1200,00', 'Folder A4 colorido. Frente e verso. 10.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.					', '15378142216C9792CE-359D-4E60-A9D5-7934A55A8E46.jpg'),
(121, 6, '2200,00', 'Folder A4 colorido. Frente e verso. 20.000unds. Papel Couchê brilho. Entrega 5 dias uteis. Arte simples inclusa.				', '15378142436C9792CE-359D-4E60-A9D5-7934A55A8E46.jpg'),
(122, 6, '90,00', 'Panfletos Colorido 2.000unds. Tamanho 10x15 Papel Comum. Entrega 24hs. Arte simples inclusa.			', '15378143131537276471panf01.jpg'),
(123, 6, '50,00', 'Panfletos Preto e Branco 2.000unds. Tamanho 10x15 Papel Comum. Entrega mesmo dia.					', '15378143611537277740panf05.jpg'),
(124, 40, '40,00', 'Adesivo Vinil 5x5 Redondo - 100unds - Entrega 24hs. Não incluso arte.					\r\n            ', '1537908928A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(125, 40, '60,00', '            Adesivo Vinil 5x5 Redondo 500unds. Entrega 24hs. Não incluso arte.					\r\n            ', '1537908966A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(126, 40, '100,00', 'Adesivo Vinil 5x5 Redondo 1.000unds. Entrega 24hs. Não incluso arte.					', '1537909014A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(127, 40, '450,00', 'Adesivo Vinil 5x5 Redondo 5.000unds. Entrega 24hs. Não incluso arte.					', '1537909037A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(128, 40, '50,00', 'Adesivo Vinil 6x6 Redondo 100unds. Entrega 24hs. Não incluso arte.					', '153790913480DB9B2E-321C-4A50-B54A-923EB84BF31F.jpg'),
(129, 40, '70,00', 'Adesivo Vinil 6x6 Redondo 500unds. Entrega 24hs. Não incluso arte.						', '153790917680DB9B2E-321C-4A50-B54A-923EB84BF31F.jpg'),
(130, 40, '120,00', 'Adesivo Vinil 6x6 Redondo 1.000unds. Entrega 24hs. Não incluso arte.						', '153790922580DB9B2E-321C-4A50-B54A-923EB84BF31F.jpg'),
(131, 40, '550,00', 'Adesivo Vinil 6x6 Redondo 5.000unds. Entrega 24hs. Não incluso arte.					', '153798331480DB9B2E-321C-4A50-B54A-923EB84BF31F.jpg'),
(132, 40, '50,00', 'Adesivo Vinil 7x7 Redondo 100unds. Entrega 24hs. Não incluso arte.					', '1537983423BB584750-AEFB-4446-B118-23686F2D7546.jpg'),
(133, 40, '100,00', 'Adesivo Vinil 7x7 Redondo 500unds. Entrega 24hs. Não incluso arte.					', '1537983464BB584750-AEFB-4446-B118-23686F2D7546.jpg'),
(134, 40, '175,00', 'Adesivo Vinil 7x7 Redondo 1.000unds. Entrega 24hs. Não incluso arte.						', '1537983520BB584750-AEFB-4446-B118-23686F2D7546.jpg'),
(135, 40, '750,00', 'Adesivo Vinil 7x7 Redondo 5.000unds. Entrega 24hs. Não incluso arte.						', '1537983590BB584750-AEFB-4446-B118-23686F2D7546.jpg'),
(136, 40, '60,00', '            Adesivo Vinil 8x8 Redondo 100unds. Entrega 24hs. Não incluso arte.						\r\n            ', '153798382309C9C4E0-7D5B-4277-BDAF-ADBC79907874.jpg'),
(137, 40, '140,00', 'Adesivo Vinil 8x8 Redondo 500unds. Entrega 24hs. Não incluso arte.					', '153798414009C9C4E0-7D5B-4277-BDAF-ADBC79907874.jpg'),
(138, 40, '240,00', 'Adesivo Vinil 8x8 Redondo 1.000unds. Entrega 24hs. Não incluso arte.					', '153798416009C9C4E0-7D5B-4277-BDAF-ADBC79907874.jpg'),
(139, 40, '1050,00', 'Adesivo Vinil 8x8 Redondo 5.000unds. Entrega 24hs. Não incluso arte.					', '153798418509C9C4E0-7D5B-4277-BDAF-ADBC79907874.jpg'),
(140, 40, '60,00', 'Adesivo Vinil 9x9 Redondo 100unds. Entrega 24hs. Não incluso arte.					', '15379842259681C19A-FF7C-493A-A0C2-62569DB06409.jpg'),
(141, 40, '170,00', 'Adesivo Vinil 9x9 Redondo 500unds. Entrega 24hs. Não incluso arte.					', '15379843399681C19A-FF7C-493A-A0C2-62569DB06409.jpg'),
(142, 40, '290,00', 'Adesivo Vinil 9x9 Redondo 1.000unds. Entrega 24hs. Não incluso arte.					', '15379843809681C19A-FF7C-493A-A0C2-62569DB06409.jpg'),
(143, 40, '1250,00', 'Adesivo Vinil 9x9 Redondo 5.000unds. Entrega 24hs. Não incluso arte.					', '15379844209681C19A-FF7C-493A-A0C2-62569DB06409.jpg'),
(144, 40, '60,00', 'Adesivo Vinil 10x10 Redondo 100unds. Entrega 24hs. Não incluso arte.					', '1537984454A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(145, 40, '200,00', 'Adesivo Vinil 10x10 Redondo 500unds. Entrega 24hs. Não incluso arte.					', '1537984569A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(146, 40, '350,00', 'Adesivo Vinil 10x10 Redondo 1.000unds. Entrega 24hs. Não incluso arte.					', '1537984620A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(147, 40, '1500,00', 'Adesivo Vinil 10x10 Redondo 5.000unds. Entrega 24hs. Não incluso arte.					', '1537984703A1055BAB-1AB3-401F-8015-94D1A6A3B910.jpg'),
(148, 5, '400,00', 'Placa tamanho 4x1m, estrutura em metalon galvanizado, lona impressão solvente durabilidade externa 2 anos, incluso arte simples. Instalação à consultar.					', '15379961401536607739img_modelo_produtos.jpg'),
(149, 5, '500,00', 'Placa tamanho 5x1m, estrutura em metalon galvanizado, lona impressão solvente durabilidade externa 2 anos, incluso arte simples. Instalação à consultar.					', '15379961621536607739img_modelo_produtos.jpg'),
(150, 5, '600,00', 'Placa tamanho 6x1m, estrutura em metalon galvanizado, lona impressão solvente durabilidade externa 2 anos, incluso arte simples. Instalação à consultar.					', '15379961931536607739img_modelo_produtos.jpg'),
(151, 5, '00,00', 'Fachada completa, luminárias, refletores, forro pvc. Arte simples incluso. Instalação.					', '15379963301536607739img_modelo_produtos.jpg'),
(152, 10, '299,00', 'Bandeira tamanho 100x150 - 10und. Prazo de entrega 7 dias uteis.					', '15380564971537279818band02.jpg'),
(153, 10, '1445,00', 'Bandeira tamanho 100x150 - 50und. Prazo de entrega 7 dias uteis.					', '15380565211537279899band04.jpg'),
(154, 10, '2790,00', 'Bandeira tamanho 100x150 - 100und. Prazo de entrega 7 dias uteis.					', '15380565441537279941band05.jpg'),
(155, 16, '10,00', 'Certificado tamanho A4. - Quantidade: 01und. Papel Couchê fosco 250g. Arte Incluso. Entrega Rápida.					', '15380572876B79014B-0B23-4A45-84AD-B485912DBA8F.jpg'),
(156, 16, '30,00', 'Certificado tamanho A4. - Quantidade: 05und. Papel Couchê fosco 250g. Arte Incluso. Entrega Rápida.					', '15380573466B79014B-0B23-4A45-84AD-B485912DBA8F.jpg'),
(157, 16, '50,00', 'Certificado tamanho A4. - Quantidade: 10und. Papel Couchê fosco 250g. Arte Incluso. Entrega Rápida.					', '15380573721E1E1858-9948-4210-AE61-6226FA72D74D.jpg'),
(158, 26, '15,00', '            Placa de PVC - Aluga-se. Tamanho: A4 (20x30). Quantidade: 01und. Entrega:24hs.				\r\n            ', '15380595281536607739img_modelo_produtos.jpg'),
(159, 26, '25,00', 'Placa de PVC - Aluga-se. Tamanho: A4 (20x30). Quantidade: 02und. Entrega:24hs.					', '15380599451536607739img_modelo_produtos.jpg'),
(160, 26, '60,00', 'Placa de PVC - Aluga-se. Tamanho: A4 (20x30). Quantidade: 05und. Entrega:24hs.					', '15380600091536607739img_modelo_produtos.jpg'),
(161, 26, '110,00', 'Placa de PVC - Aluga-se. Tamanho: A4 (20x30). Quantidade: 10und. Entrega:24hs.					', '15380600741536607739img_modelo_produtos.jpg'),
(162, 11, '500,00', 'Camisetas personalizadas, impressão total. Quantidade 50 unds. Entrega 5 dias uteis.					', '15380724141536607739img_modelo_produtos.jpg'),
(163, 17, '580,00', 'Calendário (A4) 27x20cm - 4x0 - Couchê 250g - UV Total Frente \r\n1000 und. Entrega 5 dias uteis.					\r\n            ', '15384241331536607739img_modelo_produtos.jpg'),
(164, 17, '350,00', 'Calendário (A4) 27x20cm - 4x0 - Couchê 250g - UV Total Frente \r\n500 und. Entrega 5 dias uteis.	', '15385883561536607739img_modelo_produtos.jpg'),
(165, 15, '00', 'Espaço para a descrição do produto					', '1539693155Cartaz -01.jpg'),
(166, 15, '00', 'Espaço para a descrição do produto						', '1539693195Cartaz -02.jpg'),
(167, 18, '00', 'Espaço para descrição do produto					', '1539694211Convt01.jpg'),
(168, 18, '00', 'Espaço para descrição do produto							', '1539694231Convt02.jpg'),
(169, 19, '00', 'Espaço para descrição do produto							', '1539694655cracha01.jpg'),
(170, 19, '00', 'Espaço para descrição do produto							', '1539694678cracha02.jpg'),
(171, 19, '00', 'Espaço para descrição do produto							', '1539694698cracha03.jpg'),
(172, 20, '00', 'Espaço para descrição do produto							', '1539694891envel01.jpg'),
(173, 20, '00', 'Espaço para descrição do produto							', '1539694915envel02.jpg'),
(174, 20, '00', 'Espaço para descrição do produto							', '1539694935envel03.jpg'),
(175, 20, '00', 'Espaço para descrição do produto							', '1539694952envel04.jpg'),
(176, 20, '00', 'Espaço para descrição do produto							', '1539694969envel05.jpg'),
(177, 20, '00', 'Espaço para descrição do produto							', '1539694999envel06.jpg'),
(178, 20, '00', 'Espaço para descrição do produto							', '1539695015envel07.jpg'),
(179, 23, '00', 'Espaço para descrição do produto							', '1539695684im01.jpg'),
(180, 23, '00', 'Espaço para descrição do produto							', '1539695707im02.jpg'),
(181, 23, '00', 'Espaço para descrição do produto							', '1539695734im03.jpg'),
(182, 23, '00', 'Espaço para descrição do produto							', '1539695764im04.jpg'),
(183, 23, '00', 'Espaço para descrição do produto							', '1539695784im05.jpg'),
(184, 23, '00', 'Espaço para descrição do produto							', '1539695818im06.jpg'),
(185, 23, '00', 'Espaço para descrição do produto							', '1539695838im07.jpg'),
(186, 24, '00', 'Espaço para descrição do produto							', '1539696005marcador01.jpg'),
(187, 24, '00', 'Espaço para descrição do produto							', '1539696021marcador02.jpg'),
(188, 24, '00', 'Espaço para descrição do produto							', '1539696038marcador03.jpg'),
(189, 24, '00', 'Espaço para descrição do produto							', '1539696058marcador04.jpg'),
(190, 24, '00', 'Espaço para descrição do produto							', '1539696089marcador05.jpg'),
(191, 24, '00', 'Espaço para descrição do produto							', '1539696106marcador06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `description`, `image`) VALUES
(1, '					', '1536605999promo-01.jpg'),
(2, '					', '1536606041promo-02.jpg'),
(3, '					', '1536606053promo-03.jpg'),
(4, '					', '1536606062promo-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@email.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `description` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `description`, `url`) VALUES
(1, 'Adesivo Perfurado', 'https://www.youtube.com/embed/De44mwamRLM'),
(2, 'Como Colar Lona na Armação para Fachada com Marksuel', 'https://www.youtube.com/embed/CatvdN0Rji4'),
(3, 'Como aplicar, colar adesivo em vitrine e vidros', 'https://www.youtube.com/embed/vWxXn7ktDlI'),
(4, 'Instalacao de vinil para iniciantes n.4', 'https://www.youtube.com/embed/yGdb9CegBbE');

-- --------------------------------------------------------

--
-- Table structure for table `w2a`
--

CREATE TABLE `w2a` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `large_banner` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img1` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `w2a`
--

INSERT INTO `w2a` (`id`, `text`, `large_banner`, `img1`, `img2`, `img3`) VALUES
(2, '<h1>Quem somos</h1><p>Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo.</p><p>Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado.</p><p>Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>', '1538509168img_equipe.jpg', '11538509168img_modelo_02.jpg', '21538509168img_modelo_02.jpg', '31538509168img_modelo_02.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w2a`
--
ALTER TABLE `w2a`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `w2a`
--
ALTER TABLE `w2a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
