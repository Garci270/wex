-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 21:52:14
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpespecial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Precio_1` double NOT NULL,
  `url_imagen` varchar(300) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `idcategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `Descripcion`, `Precio_1`, `url_imagen`, `Marca`, `idcategoria`) VALUES
(3, 'Papa X Kg', 59.9, 'https://actualonline.com.ar/images/tmp/p_3.jpg', 'GENERICA', 3),
(4, 'Cebolla Valenciana X Kg', 64.9, 'https://actualonline.com.ar/images/tmp/p_4.jpg', 'GENERICA', 3),
(6, 'Anana  Lata X 825', 399.9, 'https://actualonline.com.ar/images/articulos/p_6.jpg', 'MAROLIO', 3),
(11, 'Bolsa De Carbon Carton X 4 Kgs.', 239.9, 'https://actualonline.com.ar/images/articulos/p_11.jpg', 'CARBONES', 1),
(16, 'Tapas Para Empanadas  De Horno Y Freir', 79.9, 'https://actualonline.com.ar/images/tmp/p_16.jpg', 'LA CHACHA', 1),
(17, 'Empanadas  De Copetin', 85.9, 'https://actualonline.com.ar/images/articulos/p_17.jpg', 'LA CHACHA', 1),
(24, 'Pan Rallado  X 400 Grs', 124.9, 'https://actualonline.com.ar/images/articulos/p_24.jpg', 'SANTA TERESITA', 1),
(27, 'Chicles Top Line Tabletas Fruta X 5 Uds.', 29.9, 'https://actualonline.com.ar/images/articulos/p_27.jpg', 'TOPLINE', 18),
(29, 'Huevos Caja X 1 Docena Castaños', 145.9, 'https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/elgranchef/p/por-que-guardar-los-huevos-en-su-carton-1.jpg', 'GENERICA', 3),
(30, 'Huevos Castaños Caja X 1/2 Docena', 73.95, 'https://superrotifur.com.ar/wp-content/uploads/2021/04/Huevos-color-x-6-caja.jpg', 'GENERICA', 3),
(35, 'Ñoquis  Bandejas X 500 Grs.', 145.9, 'https://actualonline.com.ar/images/articulos/p_35.jpg', 'DON YEYO', 1),
(36, 'Ravioles  Pollo Termo Pack X 500 Grs.', 195.9, 'https://actualonline.com.ar/images/articulos/p_36.jpg', 'DON YEYO', 1),
(37, 'Rum  Gold Botella X 1 Litro', 359.9, 'https://actualonline.com.ar/images/tmp/p_37.jpg', 'JAMAICA', 10),
(42, 'Fideos  Al Huevo X 500 Grs.', 85.9, 'https://actualonline.com.ar/images/articulos/p_42.jpg', 'LA CHACHA', 1),
(44, 'Agua Mineral  X 2 Lts. Sin Gas', 109.9, 'https://actualonline.com.ar/images/articulos/p_44.jpg', 'VILLAVICENCIO', 10),
(50, 'Jabon En Polvo  Matic Sol X 400 Grs.', 99.9, 'https://actualonline.com.ar/images/tmp/p_50.jpg', 'ALA', 22),
(54, 'Galletitas  Larguitas Paquete X 150 Grs.', 65.9, 'https://actualonline.com.ar/images/tmp/p_54.jpg', 'HOJALMAR', 1),
(59, 'Cuadrada De Cerdo En Bifes X Kg', 379.9, 'https://actualonline.com.ar/images/articulos/p_59.jpg', 'GENERICA', 2),
(64, 'Bolsas De Leña X 6 Kgs.', 249.9, 'https://actualonline.com.ar/images/articulos/p_64.jpg', 'GENERICA', 1),
(68, 'Detergente  Cremoso Glicerina Botella X 4 Lts.', 349.9, 'https://statics.dinoonline.com.ar/imagenes/full_600x600_ma/2790503_1_f.jpg', 'ALA', 22),
(81, 'Yerba  Paquete X 500 Grs.', 199.9, 'https://actualonline.com.ar/images/tmp/p_81.jpg', 'ANDRESITO', 1),
(86, 'Yogur  Entero Sabor Frutilla Pote X 120 Cc', 34.365, 'https://actualonline.com.ar/images/tmp/p_86.jpg', 'ILOLAY', 16),
(87, 'Yogur  Entero Sabor Vainilla Pote X 120 Cc.', 35.9, 'https://actualonline.com.ar/images/tmp/p_87.jpg', 'ILOLAY', 16),
(88, 'Yogur Descremado Vainilla', 40.9, 'https://actualonline.com.ar/images/tmp/p_88.jpg', 'ILOLAY', 10),
(91, 'Galletitas  Sandwicheras Paquete X 360 Grs.', 85.05, 'https://actualonline.com.ar/images/articulos/p_91.jpg', 'MEDIA TARDE', 1),
(94, 'Galletitas  Paquete X 390 Grs.', 109.9, 'https://actualonline.com.ar/images/tmp/p_94.jpg', 'DIVERSION', 1),
(102, 'Lentejon  Origen Canada Paquete X 400 Grs.', 189.9, 'https://actualonline.com.ar/images/tmp/p_102.119', 'LA EGIPCIANA', 18),
(103, 'Arvejas Partidas  Paquete X 500 Grs.', 109.9, 'https://actualonline.com.ar/images/articulos/p_103.jpg', 'LA EGIPCIANA', 1),
(106, 'Porotos Pallares  Paquete X 500 Grs.', 329.9, 'https://actualonline.com.ar/images/articulos/p_106.jpg', 'LA EGIPCIANA', 1),
(108, 'Porotos  Alubia Paquete X 500 Grs.', 179.9, 'https://actualonline.com.ar/images/tmp/p_108.118', 'LA EGIPCIANA', 1),
(114, 'Galletitas  Frutilla Paquete X 93 Grs.', 59.9, 'https://actualonline.com.ar/images/tmp/p_114.jpg', 'MERENGADAS', 1),
(115, 'Fideos  Tallarin Con  Huevos Paquete X 500 Grs.', 99.9, 'https://actualonline.com.ar/images/tmp/p_115.116', 'DON FELIPE', 1),
(118, 'Vino  Cabernet Sauvignon Botella X 750 Cc.', 2199.9, 'https://actualonline.com.ar/images/tmp/p_118.jpg', 'RUTINI', 10),
(131, 'Galletitas  Sin Sal Paquete X 507 Grs.', 179.9, 'https://actualonline.com.ar/images/articulos/p_131.jpg', 'CRIOLLITAS', 1),
(144, 'Aceite  Mezcla Botella X 900 Cc.', 89.9, 'https://actualonline.com.ar/images/tmp/p_144.png', 'MAROLIO', 1),
(150, 'Champagna  Demi Sec Botella X 750 Cc.', 579.9, 'https://actualonline.com.ar/images/tmp/p_150.jpg', 'MUMM CUVEE', 10),
(151, 'Paleta De Novillito En Bifes X Kg', 749.9, 'https://actualonline.com.ar/images/articulos/p_151.jpg', 'GENERICA', 2),
(152, 'Paño De Piso  Super Ballerina Paquete X 1 Unidad', 159.9, 'https://jumboargentina.vteximg.com.br/arquivos/ids/635498-512-512/Limpiador-L-quido-Procenex-Extra-Fragancia-Lavanda-900-Ml-2-28836.jpg?v=637534488244900000', 'CIF', 22),
(153, 'Roast Beef De Novillito En Bifes X Kg', 599.9, 'https://actualonline.com.ar/images/articulos/p_153.jpg', 'GENERICA', 2),
(154, 'Bocado De Jamon De Cerdo En Bifes X Kg', 349.9, 'https://actualonline.com.ar/images/articulos/p_154.jpg', 'GENERICA', 2),
(164, 'Salchichas Vienissima X 12 Unidades', 213.35, 'https://mercanet.com.ar/server/Portal_0019782/img/products/salchicha-vienissima-6-uds_9310535.jpg', 'VIENISIMA', 1),
(165, 'Salchichas Vienissima X 6 Uds.', 115.25, 'https://actualonline.com.ar/images/tmp/p_165.jpg', 'VIENISIMA', 1),
(170, 'Bolsa De Carbon X 3 Kilos', 179.9, 'https://actualonline.com.ar/images/articulos/p_170.jpg', 'GENERICA', 1),
(173, 'Edulcorante  Botella X 250 Cc.', 129.9, 'https://actualonline.com.ar/images/tmp/p_173.jpg', 'SI DIET', 1),
(175, 'Vino  Blanco Tetra Breack X 1 Lt.', 149.9, 'https://actualonline.com.ar/images/tmp/p_175.jpg', 'UVITA', 10),
(176, 'Vino  Tinto Tetra Breack X 1 Lt.', 149.9, 'https://actualonline.com.ar/images/tmp/p_176.jpg', 'UVITA', 10),
(177, 'Vino  Blanco Dulce Tetra Breack X 1 Lt.', 149.9, 'https://actualonline.com.ar/images/tmp/p_177.jpg', 'UVITA', 10),
(178, 'Jugo  Pomelo Rosado X 1.5 L', 109.9, 'https://actualonline.com.ar/images/tmp/p_178.jpg', 'MOCORETA', 21),
(179, 'Jugo  Naranja X 1.5 L', 109.9, 'https://actualonline.com.ar/images/tmp/p_179.jpg', 'MOCORETA', 21),
(181, 'Mayonesa  Light Pouche X 237 Grs.', 69.9, 'https://actualonline.com.ar/images/tmp/p_181.jpg', 'HELLMANNS', 1),
(183, 'Galletitas  Sabor Chocolate Paquete X 112 Grs.', 50.35, 'https://actualonline.com.ar/images/tmp/p_183.jpg', 'RUMBA', 1),
(184, 'Galletitas  Miel Paquete X 170 Grs.', 70.25, 'https://actualonline.com.ar/images/tmp/p_184.jpg', 'MELITAS', 1),
(185, 'Galletitas  Oblea Paquete X 55 Grs.', 49.9, 'https://actualonline.com.ar/images/articulos/p_185.jpg', 'OPERA', 1),
(187, 'Galletitas s Con Salvado Paquete X 330 Grs.', 109.9, 'https://actualonline.com.ar/images/tmp/p_187.jpg', 'PASEO', 1),
(193, 'Galletitas  Familiar Salvado Fibractive Paquete X 169 Gs', 65.9, 'https://d3ugyf2ht6aenh.cloudfront.net/stores/914/913/products/18190791-af0e73978d8ff03a9d15469030016154-1024-1024.jpg', 'BAGLEY', 1),
(197, 'Galletitas  Oblea Paquete X 92 Grs.', 53.55, 'https://actualonline.com.ar/images/tmp/p_197.jpg', 'OPERA', 1),
(198, 'Galletitas  Mas Sabor Original Paquete X 169 Grs.', 65.9, 'https://actualonline.com.ar/images/articulos/p_198.jpg', 'CRIOLLITAS', 1),
(199, 'Galletitas  Paquete X 112 Grs.', 59.9, 'https://actualonline.com.ar/images/tmp/p_199.jpg', 'AMOR', 1),
(201, 'Galletitas  Paquete X 139 Grs.', 95.9, 'https://actualonline.com.ar/images/tmp/p_201.jpg', 'PORTEñITAS', 1),
(205, 'Cacao  Paquete X 180 Grs.', 95.9, 'https://actualonline.com.ar/images/articulos/p_205.jpg', 'CHOCOLINO', 1),
(215, 'Aperitivo  Botella X 1 Lt', 619.9, 'https://actualonline.com.ar/images/tmp/p_215.jpg', 'HESPERIDINA', 21),
(229, 'Toallitas Femeninas  Con Alas Con Desodorante X 8Uds.', 64.9, 'https://actualonline.com.ar/images/tmp/p_229.jpe', 'CALIPSO', 18),
(230, 'Jugo  Sabor Naranja Sobre X 45 Grs.', 22.9, 'https://actualonline.com.ar/images/articulos/p_230.jpg', 'TANG', 1),
(231, 'Jugo  Sabor Manzana Sobre X 45 Grs.', 22.9, 'https://actualonline.com.ar/images/articulos/p_231.jpg', 'TANG', 1),
(240, 'Yerba  Paquete X 1 Kg.', 399.9, 'https://actualonline.com.ar/images/tmp/p_240.jpg', 'ANDRESITO', 1),
(243, 'Rebozador  Paquete X 500 Grs.', 99.9, 'https://actualonline.com.ar/images/articulos/p_243.jpg', 'PREFERIDO', 1),
(244, 'Pan Rallado  Paquete X 500 Grs.', 99.9, 'https://actualonline.com.ar/images/articulos/p_244.jpg', 'PREFERIDO', 1),
(245, 'Pan Dulce  X 400 Grs.', 169.9, 'https://actualonline.com.ar/images/tmp/p_245.jpg', 'VALENTE', 1),
(247, 'Toallitas Femenitas  Basica Sin Alas Paquete X 8 Uds.', 129.9, 'https://www.superbaires.com.ar/wp-content/uploads/2020/08/toallitas-femeninas-ladysoft-ultradelgadas-8un.jpg', 'ALWAYS', 18),
(252, 'Vino s Cabernet Sauvignon Botella  X 750 Cc.', 479.9, 'https://actualonline.com.ar/images/tmp/p_252.png', 'NAVARRO CORREA', 21),
(253, ' De Arcor X 23 Grs.', 60.9, 'https://actualonline.com.ar/images/articulos/p_253.jpg', 'CEREAL MIX', 1),
(262, 'Pilas  Aaa Control Remodto Display X 4 Uds.', 369.9, 'https://actualonline.com.ar/images/articulos/p_262.jpg', 'ENERGIZER', 18),
(267, 'Pañales  Ultra Chico Bolson X 12 Uds.', 169.9, 'https://actualonline.com.ar/images/articulos/p_267.jpg', 'BABYSEC', 21),
(268, 'Margarina  Dorada Soft Light Pote X 200 Grs.', 129.9, 'https://actualonline.com.ar/images/tmp/p_268.jpg', 'DANICA', 1),
(279, 'Yerba  Azul X 1 Kg.', 309.9, 'https://maxiconsumo.com/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/1/6/16017.jpg', 'NOBLEZA GAUCHA', 1),
(280, 'Yerba  Azul X 500 G', 129.9, 'https://maxiconsumo.com/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/1/6/16017.jpg', 'NOBLEZA GAUCHA', 1),
(281, 'Postre  Dulce De Leche X 80 Grs.', 54.9, 'https://actualonline.com.ar/images/articulos/p_281.jpg', 'EXQUISITA', 1),
(282, 'Bizcochuelo  Sabor Naranja Caja X 540 Grs.', 149.9, 'https://actualonline.com.ar/images/tmp/p_282.118', 'EXQUISITA', 1),
(284, 'Bizcochuelo  Sabor Coco Caja X 540 Grs.', 149.9, 'https://actualonline.com.ar/images/articulos/p_284.jpg', 'EXQUISITA', 1),
(285, 'Flan  Vainilla Caja X 60 Grs.', 49.9, 'https://jumboargentina.vteximg.com.br/arquivos/ids/576325-512-512/Flan-Royal-Vainilla-60-Gr-2-18451.jpg?v=637187592164400000', 'EXQUISITA', 1),
(286, 'Alcohol  Puro Botella X 1 Lts.', 245.9, 'https://actualonline.com.ar/images/tmp/p_286.jpg', 'PORTA', 18),
(288, 'Postre  Sabor Vainilla Estuche X 80 Grs', 54.9, 'https://actualonline.com.ar/images/tmp/p_288.jpg', 'EXQUISITA', 1),
(289, 'Flan  Dulce De Leche X 60 G', 49.9, 'https://misuperchino.com/wp-content/uploads/2020/06/%E5%BE%AE%E4%BF%A1%E6%88%AA%E5%9B%BE_20200701044245.png', 'EXQUISITA', 1),
(294, 'Semola  Luchetti Clasica Fortificada Estuche X 500 Grs.', 175.9, 'https://actualonline.com.ar/images/articulos/p_294.jpg', 'VITINA', 1),
(308, 'Sal  Fina Paquete X 500 G', 42.9, 'https://ardiaprod.vteximg.com.br/arquivos/ids/184595-500-500/Sal-Fina-en-Paquete-Celusal-500-Gr-_1.jpg?v=637427546564070000', 'CELUSAL', 1),
(309, 'Fideos  Tallarin Con Huevo Paquete X 500 Grs.', 139.9, 'https://actualonline.com.ar/images/tmp/p_309.117', 'DON VICENTE', 1),
(310, 'Mortadela Familiar  X 500 G', 389.9, 'https://actualonline.com.ar/images/tmp/p_310.jpg', 'PALADINI', 4),
(312, 'Oblea  Sabor Vainilla Paquete X 100 Grs.', 49.99, 'https://actualonline.com.ar/images/articulos/p_312.jpg', 'RECITAL', 1),
(316, 'Limpiador Liquido  X 900 Cc. Suavidad De Algodon', 65.9, 'https://jumboargentina.vteximg.com.br/arquivos/ids/635498-512-512/Limpiador-L-quido-Procenex-Extra-Fragancia-Lavanda-900-Ml-2-28836.jpg?v=637534488244900000', 'POETT', 22),
(320, 'Aceite  De Girasol Botella X 1,5 Lts.', 219.55, 'http://d3ugyf2ht6aenh.cloudfront.net/stores/798/865/products/72756941-81a5627672605c028d16107993950727-640-0.jpg', 'CAÑUELAS', 1),
(326, 'Acondicionador  Listo Lavanda X 800  Cc.', 399.9, 'https://actualonline.com.ar/images/articulos/p_326.jpg', 'ECHO', 23),
(330, 'Limpiador Liquido  3 En 1 Bebe Botella X 900', 79.9, 'https://actualonline.com.ar/images/tmp/p_330.jpg', 'PROCENEX', 22),
(331, 'Insecticida  Max Cucarachicida En Aerosol X 400 Cc.', 479.9, 'https://actualonline.com.ar/images/tmp/p_331.jpg', 'RAID', 23),
(352, 'Mermelada  Sabor Ciruela Frasco X 390 Grs.', 99.9, 'https://actualonline.com.ar/images/tmp/p_352.119', 'DR CORMILLOT', 1),
(355, 'Shampoo  Liso Extremo Envase X 200 Cc.', 225.9, 'https://actualonline.com.ar/images/tmp/p_355.jpg', 'PANTENE', 23),
(359, 'Anana en Lata x400gr', 200, 'https://actualonline.com.ar/images/articulos/p_6.jpg', 'AGUSTIN', 1),
(360, 'AGUSTIN', 25421, 'assets/img/product/unnamed.jpg', 'AGUSTIN', 21),
(361, 'Carne feteada 100gr.', 100.25, 'https://static.diariovasco.com/www/multimedia/201906/03/media/cortadas/carne-roja-kS1C-R5uqUSGFlSqj84mn1I9bQuN-624x385@Diario%20Vasco.jpg', 'AGUSTIN', 2),
(362, 'Parrillada', 250, 'https://fundaciondelcorazon.com/images/Blog/iStock-627240344.jpg', 'AGUSTIN', 21),
(363, 'Chorizo c/u', 50, 'https://raffe.com.ar/wp-content/uploads/2019/06/Chorizo-Especial-Raffe.jpg', 'AGUSTIN', 2),
(364, 'Pack de leches', 200, 'https://www.on24.com.ar/wp-content/uploads/2019/02/Leche-3210.png', 'La Serenisima', 21),
(365, 'Leche 1Lt', 100, 'https://http2.mlstatic.com/D_NQ_NP_958934-MLA41408853299_042020-O.jpg', 'La Serenisima', 16),
(366, 'Dulce De Leche', 150, 'https://gauchofood.com/wp-content/uploads/2020/10/Dulce-de-leche-La-Serenisima-Tradicion-Argentina.jpg', 'La Serenisima', 16),
(367, 'Dulce De Leche Repostero', 150, 'https://www.casa-segal.com/wp-content/uploads/2019/04/dulce-de-leche-la-serenisima-repostero-400g-reposteria-mendoza-casa-segal.jpg', 'La Serenisima', 16),
(368, 'Queso Tybo', 120, 'https://maxiconsumo.com/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/2/2/22295.jpg', 'AGUSTIN', 4),
(369, 'Queso 100gr', 600, 'https://i2.wp.com/alfredelivery.com.ar/wp-content/uploads/2021/01/Gruyerito-media-horma-Ver%C3%B3nica.png?fit=500%2C500&ssl=1', 'AGUSTIN', 4),
(370, 'Queso Pategras', 200, 'https://eosdelivery.com.ar/3959-large_default/QUESO-ILOLAY-PATEGRAS-X100GR.jpg', 'Ilolay', 4),
(371, 'Queso Muzzarella', 100, 'https://superlorito.com.ar/wp-content/uploads/2020/05/MUZZARELLA-FETAS-ilolay.jpg', 'Ilolay', 4),
(372, 'Queso Feteado 100Gr.', 100.25, 'http://d3ugyf2ht6aenh.cloudfront.net/stores/001/219/229/products/queso-ilolay1-18e416b5a829be344315995212003710-640-0.jpg', 'Ilolay', 4),
(373, 'Queso Cremoso 100gr', 100.25, 'https://fiambreriasofi.com.ar/wp-content/uploads/2021/05/Queso-Cremoso-Arroyo-Cabral-Kg-1-5846.jpg', 'AGUSTIN', 4),
(374, 'Nuevo Producto', 240, 'https://actualonline.com.ar/images/articulos/p_6.jpg', 'AGUSTIN', 1),
(375, 'Nuevas carnes', 300, 'https://actualonline.com.ar/images/articulos/p_6.jpg', 'AGUSTIN', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `url_imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `Descripcion`, `url_imagen`) VALUES
(1, 'ALMACÉN', 'assets/img/ALMACÉN.png'),
(2, 'CARNES', 'assets/img/CARNES.png'),
(3, 'FRUTAS Y VERDURAS', 'assets/img/FRUTAS Y VERDURAS.png'),
(4, 'QUESOS Y FIAMBRES', 'assets/img/QUESOS Y FIAMBRES.png'),
(10, 'BEBIDAS', 'assets/img/BEBIDAS.png'),
(16, 'LÁCTEOS', 'assets/img/LÁCTEOS.png'),
(18, 'ESPECIALES & KITS', 'assets/img/ESPECIALES & KITS.png'),
(21, 'OFERTAS', 'assets/img/OFERTAS.png'),
(22, 'LIMPIEZA', 'assets/img/LIMPIEZA.png'),
(23, 'PERFUMERÍA', 'assets/img/PERFUMERÍA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `puntuacion` int(1) NOT NULL DEFAULT 1,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `clave` varchar(300) NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `nombre_usuario`, `email`, `clave`, `nivel`) VALUES
(1, 'Agustin', 'agusg', 'agustingarciaamaro@gmail.com', '$2y$10$QpMh7708FS1kFAhN9CZNBOqqEHvtWk41PGVqLIQKYv97A22D/ch.a', 1),
(14, 'Roberto', 'rog70', 'rog@gmail.com', '$2y$10$qg1.bcmTjfPQcBuRji.bKeNbG4dB1fYA.amReahlrNmvLbfEzZziS', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idarticulo` (`idarticulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;